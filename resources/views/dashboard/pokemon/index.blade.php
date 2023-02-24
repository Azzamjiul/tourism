@extends('dashboard.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pokemon</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Search Pokemon</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('pokemon.search') }}" method="GET" class="form">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="id" class="form-control" required>
                    </div>

                    <button class="btn btn-primary">Search</button>
                </form>
            </div>

            <div class="card-footer clearfix">
            </div>
        </div>

        <div class="card">
          <div class="card-header">
              <h3 class="card-title">Result</h3>
          </div>

          <div class="card-body">
              @if ($pokemon)
                ID: {{ $pokemon->id }} <br>
                NAME: {{ $pokemon->name }} <br>
                WEIGHT: {{ $pokemon->weight }} <br>
                HEIGHT: {{ $pokemon->height }} <br>
              @else
                Pokemon not found
              @endif
          </div>

          <div class="card-footer clearfix">
          </div>
      </div>
    </section>
    <!-- /.content -->
@endsection
