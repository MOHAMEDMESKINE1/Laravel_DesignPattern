@extends('layouts.app')

@section('content')

    <div class="container m-5">
        <div class="row  d-flex justify-content-center align-items-center ">
            <div class="col-md-6 ">
                <div class="card border-secondary">
                 <div class="card-header">
                    <h4 class="card-title">Edit Restaurant</h4>
                 </div>
                  <div class="card-body">
                   
                    <form action="{{route('update',$restaurant->id)}}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" value="{{$restaurant->name}}"  class="form-control  shadow-none" placeholder="Name" >
                            <small class="text-danger">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email"  value="{{$restaurant->email}}"  class="form-control shadow-none" placeholder="test@gmail.com" >
                            <small class="text-danger">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Address</label>
                            <input type="text" name="address"  value="{{$restaurant->address}}"  class="form-control shadow-none" placeholder="adress" >
                            <small class="text-danger">
                                @error('address')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
        
                        <div class="mb-3">
                            <button class="btn btn-secondary" type="submit">Add </button>
                        </div>
                       </form>
        
                  </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection