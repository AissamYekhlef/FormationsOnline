@extends('layouts.dash')
@section('title','Show User')
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
      <section class="content p-4">
        <p>
         Show the user informations :<span class="text-primary">{{$user->email ?? ''}}</span>
        </p>
        <dl>
          <dt>ID</dt>
          <dd>{{$user->id ?? ''}}</dd>
        </dl>
        <dl>
          <dt>Name</dt>
          <dd>{{$user->name ?? ''}}</dd>
        </dl>
        <dl>
          <dt>email</dt>
          <dd>{{$user->email ?? ''}}</dd>
        </dl>
        <dl>
          <dt>Created At</dt>
          <dd>{{$user->created_at ?? ''}}</dd>
        </dl>
        <dl>
          <dt>Updated At</dt>
          <dd>{{$user->updated_at ?? ''}}</dd>
        </dl>  
        <dl>
          <dt>Profile Photo</dt>
          <dd><img src="{{ asset('storage/images/' . $user->avatar) }}" class="rounded d-block" alt="User Image" width="200" height="200"/></dd>
        </dl>

      </section>
      <!-- /.content -->
@endsection
