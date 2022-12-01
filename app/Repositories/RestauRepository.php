<?php

namespace App\Repositories;

use App\Contracts\RestauInterface;
use App\Models\Restaurant;

class RestauRepository implements RestauInterface {

    public function all(){
        
        $restaurants = Restaurant::latest()->get();

        return $restaurants;
    }
    public function get($id){

        $restaurant = Restaurant::find($id);

        return $restaurant;
    }
    public function store(array $data){

        $create =  Restaurant::create($data);

        return $create;
    }
    public function update($id,array $data){

        $data = Restaurant::find($id)->update($data);
        
        return $data;
    }
    public  function delete($id){

        $data = Restaurant::destroy($id);

        return $data;
    }
}