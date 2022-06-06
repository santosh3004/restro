@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 1345.31px;">
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-6">
    <div class="card card-info">
        @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <div class="card-header">
                  <h3 class="card-title">Edit Reservation Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <!---session message---->

                <form class="form-horizontal" method="POST" action="{{route('reservation.update',$reservation->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="card-body">
                  <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" name="name" value="{{$reservation->name}}" class="form-control" id="name" placeholder="Category Title">
                      </div>
                    </div>
                    <div class="form-group row">

                      <label for="inputEmail3" class="col-sm-2 col-form-label">email</label>
                      <div class="col-sm-10">
                        <input type="email" name="email" value="{{$reservation->email}}" class="form-control" id="inputEmail3" placeholder="Slug Text">
                      </div>
                    </div>
                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                          <input type="number" name="phone" value="{{$reservation->phone}}" class="form-control" id="inputEmail3" placeholder="Slug Text">
                        </div>
                      </div>
                    <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Guests Count</label>
                        <div class="col-sm-10">
                          <input type="number" name="guestcount" value="{{$reservation->Guest}}" class="form-control" id="inputEmail3" placeholder="Order Number">
                        </div>
                      </div>
                      <div class="form-group row">

                        <label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                          <input type="date" name="date" value="{{$reservation->date}}" class="form-control" id="inputEmail3" placeholder="Order Number">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Time</label>
                        <div class="col-sm-10">
                          <input type="time" name="time" value="{{$reservation->time}}" class="form-control" id="inputEmail3" placeholder="Order Number">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <!-- radio -->
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value=1 @if ($reservation->status==1){{'checked'}}@endif name="status">
                            <label class="form-check-label">Show</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value=0 @if ($reservation->status==0){{'checked'}}@endif name="status">
                            <label class="form-check-label">Hide</label>
                          </div>
                        </div>
                      </div>

                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-info">Update Reservation</button>
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
