@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Inventory</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'inventories.store']) !!}

            <div class="card-body" style="background: rgb(253,163,45);">

                <div class="row">
                    @include('inventories.fields')
                </div>

            </div>

            <div class="card-footer" style="background: rgb(253,163,45)">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('inventories.index') }}" style="background: rgb(253,163,45);" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
