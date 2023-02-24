@extends('dashboard.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Upload Image</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Upload Image</h3>

                <a href="{{ route('dashboard.destination.images.index', ['id' => $id]) }}" class="float-right btn btn-sm btn-danger">Cancel</a>
            </div>

            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('dashboard.destination.images.store', ['id' => $id]) }}" method="POST" class="form" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="">File</label>
                        <input type="file" name="berkas" class="form-control" value="{{ old('berkas') }}">
                    </div>

                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="card-footer clearfix">
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection