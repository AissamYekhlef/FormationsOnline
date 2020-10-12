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
        <p>Change the profile photo:</p>
        <div class="cart-body">
          <form action="/upload" method="post" enctype="multipart/form-data">
              @csrf
              <input type="file" name="image" placeholder="image" id="" required>
              <input type="submit" vlaue="Upload" id="">
          </form>
        </div>

      </section>
      <!-- /.content -->
@endsection
