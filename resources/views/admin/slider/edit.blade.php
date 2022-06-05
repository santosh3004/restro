@extends('admin.layouts.app')
@section('content')

  <div class="content-wrapper" style="min-height: 1345.31px;">
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
  <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Slider Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form class="form-horizontal" method="POST" action="{{route('slider.update',$slider->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                          <input type="text" name="title" value="{{$slider->title}}" class="form-control" id="inputEmail3" placeholder="Url">
                        </div>
                      </div>
                      <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Sub Title</label>
                        <div class="col-sm-10">
                          <input type="text" name="subtitle" value="{{$slider->title}}" class="form-control" id="inputEmail3" placeholder="Url">
                        </div>
                      </div>
                {{-- <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Blog Id</label>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Blog</label>
                        <select name="blogid" class="form-control">
                          <option value="-1" selected>Select</option>

                        </select>
                      </div>
                    </div>

                  </div> --}}
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Old Image</label>
                    <div class="col-sm-10">
                      <img src="{{asset('uploads/files/'.$slider->image)}}"style="height:80px;width:100px;" alt="Image File" srcset="">
                    </div>
                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <input type="text" name="image" value="{{$slider->image}}" class="form-control" id="inputEmail3" placeholder="Url">
                    </div>
                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Button text</label>
                    <div class="col-sm-10">
                      <input type="text" name="btn_text" value="{{$slider->btn_text}}" class="form-control" id="inputEmail3" placeholder="Url">
                    </div>
                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Button Link</label>
                    <div class="col-sm-10">
                      <input type="text" name="btn_link" value="{{$slider->btn_link}}" class="form-control" id="inputEmail3" placeholder="Url">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Order</label>
                    <div class="col-sm-10">
                      <input type="number" name="order_no" value="{{$slider->order_no}}" class="form-control" placeholder="1,2,3.....">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" value=1 name="status" id="exampleRadios1" {{$slider->status == 1 ? 'checked' : ''}}>
                        <label class="form-check-label">Show</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" value=0  name="status" id="exampleRadios2" {{$slider->status == 0 ? 'checked' : ''}}>
                        <label class="form-check-label">Hide</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info">Add Slider</button>

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
