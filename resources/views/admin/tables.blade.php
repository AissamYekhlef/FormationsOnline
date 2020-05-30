@extends('layouts.dash')

@section('content')

{{-- This Section for the Users Table  --}}

@if($users != null)

  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Table Of Users</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active"><a href="/admin">Admin</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->

  <h4>
      This is a Table Of ALL users
  </h4>   

  <section class="content">
      <div class="container-fluid">
          <table class="table table-bordered table-striped table-hover">
             <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
              </thead>
              @foreach ($users as $user)
                <tr>
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <td> <a href="#" class="btn btn-info"> Edit</a> <a href="#" class="btn btn-danger">Delete </a> </td>
                </tr>
              @endforeach
          </table>
      </div>

  </section>

@endif

@endsection