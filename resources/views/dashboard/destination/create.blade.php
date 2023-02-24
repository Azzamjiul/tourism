@extends('dashboard.layouts.master')

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

                <a href="{{ route('dashboard.destination.index') }}" class="float-right btn btn-sm btn-danger">Cancel</a>
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

                <form action="{{ route('dashboard.destination.store') }}" method="POST" class="form">
                    @csrf

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="">Area</label>
                        <select name="area_id" class="form-control" required>
                            <option value="">Choose one</option>
                            @foreach ($areas as $area)
                                <option @if(old('area_id') == $area->id) selected @endif value="{{ $area->id }}">{{ $area->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}">
                    </div>

                    <div class="form-group">
                        <label for="">Address URL</label>
                        <input type="text" name="address_url" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
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
