@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                        <div class="container">
       
    <h3 class="jumbotron">Laravel Multiple File Upload</h3>
<form method="post" action="{{url('/photo')}}" enctype="multipart/form-data">
  {{csrf_field()}}

        <label>Name</label><br>
        <i class="fa fa-user"></i>
        <p>Envelope icon: <span class="glyphicon glyphicon-envelope"></span></p> 
            <div class="input-group-btn">
                <input id="name" type="text" class="form-control" name="name">
                </div><br>
                 <label>description</label><br>
            <div class="input-group-btn">
                <input id="name" type="text" class="form-control" name="description">
                </div><br>

        <div class="input-group control-group increment" >
             
          <input type="file" name="cover_image" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
