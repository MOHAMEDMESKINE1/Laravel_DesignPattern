<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// //////////// calling the interface// ///
use App\Contracts\RestauInterface;
// //////////// ////////////// ////////////



class RestauController extends Controller
{
    //

    public $restaurant ;

    public function __construct(RestauInterface  $restauInterface )
    {

        $this->restaurant = $restauInterface;
    }
    public function index(){
        
        return  view("home");
    }
    public function list(){

        
            
        $restaurants =$this->restaurant->all();

            return view("list",compact("restaurants"));
        
       
    }
    public function store(Request $request){

      $data = $request->validate([
        "name"=> "required",
        "email"=> "required|email",
        "address"=> "required",
       ]);

       if($data){

        // Restaurant::create([
        //     "name"=>$request->name,
        //     "email"=>$request->email,
        //     "address"=>$request->address,
           
        //    ]);

        $this->restaurant->store([

            "name"=>$request->name,
            "email"=>$request->email,
            "address"=>$request->address,
        ]);
       }
     
       Session::flash('added','bien ajouté');
       return redirect('list');
       
      

    }
    public function edit($id){

      $restaurant = $this->restaurant->get($id);

        return view("edit",compact("restaurant"));

    }
    public function update(Request $request, $id){

     //   $restaurant = Restaurant::find($id);
       
        $data = $request->validate([
            "name"=> "required",
            "email"=> "required|email",
            "address"=> "required",
           ]);

        if($data){

            // $restaurant->update([
            //     "name"=>$request->name,
            //     "email"=>$request->email,
            //     "address"=>$request->address,
            // ]);
    
            $this->restaurant->update($id,[
                
                "name"=>$request->name,
                "email"=>$request->email,
                "address"=>$request->address,

            ]);
        }
        Session::flash('updated','bien modifié');

        return \redirect('list');
      
    }
    public function destroy( $id){

      
        // $restaurant = Restaurant::find($id);
        // $restaurant->delete();

        $this->restaurant->delete($id);

        Session::flash("deleted","bien supprimé");
        return redirect('list');
    }
}
