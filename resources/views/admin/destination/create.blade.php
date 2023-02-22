@extends('admin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New Destination</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">New Destination</h3>

            <a href="{{ route('admin.destination.index') }}" class="float-right btn btn-sm btn-danger">Cancel</a>
          </div>

          <div class="card-body">
            
          </div>

          <div class="card-footer clearfix">
          </div>
        </div>
    </section>
    <!-- /.content -->
@endsection