@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 1345.31px;">
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-6">
    <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Edit Team Member Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-horizontal" method="POST" action="{{route('team.update',$teammember->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="card-body">
                  <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" name="name" value="{{$teammember->name}}" class="form-control" id="name" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">

                      <label for="inputEmail3" class="col-sm-2 col-form-label">Position</label>
                      <div class="col-sm-10">
                        <input type="text" name="position" value="{{$teammember->position}}" class="form-control" id="inputEmail3" placeholder="Position">
                      </div>
                    </div>
                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                          <input type="text" name="image" value="{{$teammember->image}}" class="form-control" id="inputEmail3" placeholder="Image Link">
                        </div>
                      </div>
                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Order Number</label>
                        <div class="col-sm-10">
                          <input type="number" name="order_no" value="{{$teammember->order_no}}" class="form-control" id="inputEmail3" placeholder="Order Number">
                        </div>
                      </div>
                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Facebook</label>
                        <div class="col-sm-10">
                          <input type="text" name="fb_link" value="{{$teammember->fb_link}}" class="form-control" id="inputEmail3" placeholder="Facebook Link">
                        </div>
                      </div>
                      <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Instagram</label>
                        <div class="col-sm-10">
                          <input type="text" name="ins_link" value="{{$teammember->ins_link}}" class="form-control" id="inputEmail3" placeholder="Instagram Link">
                        </div>
                      </div>
                        <div class="form-group row">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Twitter</label>
                            <div class="col-sm-10">
                            <input type="text" name="twi_link" value="{{$teammember->twi_link}}" class="form-control" id="inputEmail3" placeholder="Twitter Link">
                            </div>

                  </div>
                  <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" value=1 @if ($teammember->status==1){{'checked'}}@endif name="status">
                        <label class="form-check-label">Show</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" value=0 @if ($teammember->status==0){{'checked'}}@endif name="status">
                        <label class="form-check-label">Hide</label>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-info">Update Team Member</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
    </div>
@endsection
