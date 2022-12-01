@extends('layouts.app')


@section('content')

<div class="container m-5 ">
    <div class="text-center">

        @if (session()->has('added'))
            <x-alert class='alert-success'>{{session("added")}}</x-alert>
        @endif

        @if (session()->has('updated'))
            <x-alert class='alert-success'>{{session("updated")}}</x-alert>
        @endif

        @if (session()->has('deleted'))
            <x-alert class='alert-danger'>{{session("deleted")}}</x-alert>
        @endif

    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 mx-auto">
            <div class="card text-center">
               
                <div class="card-header">
                    <h4 class="card-title">List of Restaurants</h4>
                </div>
              <div class="card-body">
                {{-- <form action="{{route('search')}}">
                    <input type="text" class="form-control" name="name" id="">
                    <button type="submit">Search </button>
                </form> --}}
                <div class="table-responsive">
                    <table class="table table-stripped table-hover">
                        <thead>
                            <tr>
                                <th >ID</th>
                                <th >Name </th>
                                <th >Email</th>
                                <th >Adress</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($restaurants as $restaurant)
                                <tr>
                                    <td >{{$restaurant->id}}</td>
                                    <td >{{$restaurant->name}}</td>
                                    <td >{{$restaurant->email}}</td>
                                    <td >{{$restaurant->address}}</td>
                                    <td>
                                        
                                        <div class="d-flex justify-content-between ">
                                            <a href="{{route('edit',$restaurant->id)}}" class="btn btn-success ">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            
                                             <form action="{{route('delete',$restaurant->id)}}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                
                                                <button class="btn btn-danger " type="submit">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                           
                          
                        </tbody>
                    </table>
                </div>
                
                
              </div>
              <div class="card-footer text-start">
                <span class="text-warning">Number of restaurants :  {{$restaurants->count()}} </span>
              </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
