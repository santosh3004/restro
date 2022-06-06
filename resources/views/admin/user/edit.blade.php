@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">Edit User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                {{-- <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Edit User</h3>
                  </div> --}}
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{route('user.update',$user->id)}}" enctype="multipart/form-data">
                    @method('PUT')
                      @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="confirmpassword"  class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                      </div>
                    </div>
                    <!-- status radio button -->
                    <div class="form-group">
                      <label>Status</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" @if($user->status == 1) checked @endif>
                        <label class="form-check-label" for="exampleRadios1">
                          Active
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0" @if($user->status == 0) checked @endif>
                        <label class="form-check-label" for="exampleRadios2">
                          Inactive
                        </label>
                      </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
