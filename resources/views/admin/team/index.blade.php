@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 1302.4px;">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Teams</h1>
            </div>
            <div class="col-sm-6">
              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
              </ol> -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <section class="content">
        <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">

                <div class="card-header d-flex justify-content-end">
                <div>
                <a href="{{route('team.create')}}"><button type="button"class="btn btn-primary">Add</button></a>
                <a href="{{route('team.bin')}}"><button type="button"class="btn btn-info">Recycle Bin</i></button></a>
                </div>
                </div>
                  <!-- <h3 class="card-title">Categories</h3> -->

                <!-- /.card-header -->
                <div class="card-body">
                  <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-responsive table-hover dataTable dtr-inline" aria-describedby="example2_info">
                    <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Position</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Image</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Order</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Facebook</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Instagram</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Twitter</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Actions</th>
                  </tr>
                    </thead>
                    <tbody>


                        @foreach ($teams as $team)

<tr class="odd">
                      <td class="dtr-control sorting_1" tabindex="0">{{$team['name']}}</td>
                      <td>{{$team['position']}}</td>
                        <td><img src="{{asset('uploads/files/'.$team['image'])}}" alt="Member Image"></td>
                        <td>{{$team['order_no']}}</td>
                        <td>{{$team['fb_link']}}</td>
                        <td>{{$team['ins_link']}}</td>
                        <td>{{$team['twi_link']}}</td>
                      <td>{{$team['status']}}</td>
                      <td>

                        <a href="{{route('team.edit',$team->id)}}"><button type="button"class="btn btn-info">Edit</button></a>
                        <form action="{{route('team.destroy',$team->id)}}" method="POST" enctype="multipart/form-data">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button></a>
                        </form>

                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                    </table></div></div></div>
                <!-- /.card-body -->
              </div>
          </div>
        </div>
        </div>
          </div>
          </div>
        </div>
        </div>
      </section>
    </div>
@endsection
