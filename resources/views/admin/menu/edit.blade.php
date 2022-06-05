@extends('admin.layouts.app')
@section('content')

  <div class="content-wrapper" style="min-height: 1345.31px;">
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Menu</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form action="{{route('menu.update',$menu->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" required value="{{$menu->title}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Url</label>
                    <input type="text" required value="{{$menu->link}}" name="url" class="form-control" id="exampleInputEmail1" placeholder="Enter Url">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Order</label>
                    <input type="number" required value="{{$menu->order_no}}" name="order" class="form-control" id="exampleInputPassword1" placeholder="Enter Order">
                  </div>
                  <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value=1 name="status" id="exampleRadios1" {{$menu->status == 1 ? 'checked' : ''}}>
                          <label class="form-check-label">Show</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value=0  name="status" id="exampleRadios2" {{$menu->status == 0 ? 'checked' : ''}}>
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
