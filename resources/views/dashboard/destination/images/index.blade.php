@extends('dashboard.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Image Lists</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Image List</h3>

            <a href="{{ route('dashboard.destination.images.create', ['id' => $id]) }}" class="float-right btn btn-sm btn-primary">Upload Image</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Image</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($images as $key => $image)
                  <tr>
                    <td> {{ $key + 1 }} </td>
                    <td>
                      <img src="{{ asset('tourismImage/' . $image->path) }}" alt="">
                    </td>
                    <td>
                      <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">«</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
          </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
