@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper" style="min-height: 1345.31px;">
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Edit Menu Item Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <form class="form-horizontal" method="POST" action="{{ route('menuitem.update',$menuitem->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" value="{{$menuitem->name}}" class="form-control" id="name"
                                                placeholder="Menu Item Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="description" {{$menuitem->desc}} class="form-control" id="inputEmail3"
                                                placeholder="Description">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Old Image</label>
                                        <div class="col-sm-10">
                                            <img src="{{asset('uploads/'.$menuitem->image)}}" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="image" {{$menuitem->image}} class="form-control" id="inputEmail3"
                                                placeholder="Description">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Menu Category</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="menucategory_id">
                                                @foreach ($menucategories as $menucategory)
                                                    <option value="{{$menucategory->id}}" @if ($menucategory->id == $menuitem->menu_category_id)
                                                        selected
                                                    @endif>{{$menucategory->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="price" {{$menucategory->price}} class="form-control" id="inputEmail3"
                                                placeholder="Price">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Order Number</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="order_no" {{$menucategory->order_no}} class="form-control" id="inputEmail3"
                                                placeholder="Order Number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group">
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" value=1 name="status" id="exampleRadios1" {{$menuitem->status == 1 ? 'checked' : ''}}>
                                            <label class="form-check-label">Show</label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" value=0  name="status" id="exampleRadios2" {{$menuitem->status == 0 ? 'checked' : ''}}>
                                            <label class="form-check-label">Hide</label>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" name="submit" class="btn btn-info">Add Category</button>
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
