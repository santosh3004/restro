@extends('admin.layouts.app')
@section('content')
  <div class="content-wrapper" style="min-height: 1345.31px;">
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('page.update',$page->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" hidden name="oldtitle" value=" $title">
                    <input type="text" required value="{{$page->title}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slug</label>
                    <input type="text" required value=" {{$page->slug}}" name="slug" class="form-control" id="exampleInputEmail1" placeholder="Enter Slug Text">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Old Image</label>
                    <img src="{{asset('uploads/'.$page->image)}}" alt="Page Image">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">New Image</label>
                    <input type="text" required value=" {{$page->image}}" name="image" class="form-control" id="exampleInputEmail1" placeholder="Enter New Image Link(Optional)">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Content</label>
                    <input type="text" required value=" {{$page->content}}" name="content" class="form-control" id="exampleInputEmail1" placeholder="Enter Slug Text">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Order</label>
                    <input type="number" required value="{{$page->order_no}}" name="order_no" class="form-control" id="exampleInputEmail1" placeholder="1/2/3....">
                  </div>
                  <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value=1 name="status" id="exampleRadios1" {{$page->status == 1 ? 'checked' : ''}}>
                          <label class="form-check-label">Show</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value=0 name="status" id="exampleRadios2" {{$page->status == 0 ? 'checked' : ''}}>
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
