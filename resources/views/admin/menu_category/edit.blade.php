@extends('admin.layouts.app')
@section('content')
  <div class="content-wrapper" style="min-height: 1345.31px;">
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Menu Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('menucategory.update',$menucategory->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" hidden name="oldtitle" value=" $title">
                    <input type="text" required value="{{$menucategory->title}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slug</label>
                    <input type="text" required value=" {{$menucategory->slug}}" name="slug" class="form-control" id="exampleInputEmail1" placeholder="Enter Slug Text">
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Old Image</label>
                    <div class="col-sm-10">
                      <img src="{{asset('uploads/files/'.$menucategory->image)}}"style="height:80px;width:100px;" alt="Image File" srcset="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">New Image</label>
                    <div class="col-sm-10">
                      <input type="text" name="image" class="form-control" id="inputEmail3" placeholder="Image link (Optional)">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Order</label>
                    <div class="col-sm-10">
                      <input type="number" name="order_no" value="{{$menucategory->order_no}}" class="form-control" placeholder="1,2,3.....">
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value=1 name="status" id="exampleRadios1" @if($menucategory->status == 1) checked @endif>
                          <label class="form-check-label">Show</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value=0 name="status" id="exampleRadios2" @if($menucategory->status == 0) checked @endif>
                          <label class="form-check-label">Hide</label>
                        </div>
                      </div>
                    </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
 </section>
  </div>
@endsection
