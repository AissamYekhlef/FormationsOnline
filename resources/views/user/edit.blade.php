@extends('layouts.dash')
@section('title','Update User')
@section('content')
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Classroom</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Classroom</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
 
      <!-- Main content -->
      <section class="content">
        <p>
          You can Update the user informations :<span class="text-primary">{{$user->email}}</span>
        </p>
        <p>Change the profile Informations:</p>
        <div class="cart-body ml-5">
          <form action="/admin/users/{{$user->id}}/edit" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="row col-md-10 mb-1">
              <label class="col-md-2" for="">Name:</label>
              <input type="text" name="name" placeholder="Name" id="" class="float-left" required>
              </div>
              <div class="row col-md-10 mb-1">
                <label class="col-md-2" >Email</label>
                <input type="email" name="email" placeholder="Email" id="" autocomplete="off" required>
              </div>
              <div class="row col-md-10 mb-1">
                <label class="col-md-2" for="">Old Password:</label>
                <input type="password" name="old_password" placeholder="Old Password" id="" autocomplete="off" required>
              </div>
              <div class="row col-md-10 mb-1">
                <label class="col-md-2" for="">New Password:</label>
                <input type="password" name="password" placeholder="New Password" id="" autocomplete="off" required>
              </div>
              <div class="row col-md-10 mb-1">
                <label class="col-md-2" for="">Avatar:</label>
                <input type="file" name="image" placeholder="image" id="" >
              </div>              
              
              <input type="submit" class="btn btn-success" vlaue="Upload" id="">
              
          </form>
        </div>

      </section>
      <!-- /.content -->
@endsection
