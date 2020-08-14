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
          You can Update  the user inforormations :<span class="text-primary">{{$user->name}}</span>
        </p>
      </section>
      <!-- /.content -->
@endsection
