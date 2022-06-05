@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 1302.4px;">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Menu Categories</h1>
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
                <a href="{{route('menucategory.create')}}"><button type="button"class="btn btn-primary">Add</button></a>
                <a href="{{route('menucategory.bin')}}"><button type="button"class="btn btn-info">Recycle Bin</button></a>
                </div>
                </div>
                  <!-- <h3 class="card-title">Categories</h3> -->

                <!-- /.card-header -->
                <div class="card-body">
                  <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-responsive table-hover dataTable dtr-inline" aria-describedby="example2_info">
                    <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Title</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Slug</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Image</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Actions</th>
                  </tr>
                    </thead>
                    <tbody>




                        @foreach ($menucategories as $menucategory)

<tr class="odd">
                      <td class="dtr-control sorting_1" tabindex="0">{{$menucategory['title']}}</td>
                      <td>{{$menucategory['slug']}}</td>
                      <td><img src="{{asset('uploads/'.$menucategory['image'])}}" width="100px" height="100px"></td>
                      <td>{{$menucategory['status']}}</td>
                      <td>

                        <a href="{{route('menucategory.edit',$menucategory->id)}}"><button type="button"class="btn btn-info">Edit</button></a>
                        <form action="{{route('menucategory.destroy',$menucategory->id)}}" method="POST" enctype="multipart/form-data">
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
