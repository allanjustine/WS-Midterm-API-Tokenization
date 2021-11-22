@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Inventories</h1>
                </div>
                <div class="col-sm-6">
                    <a style="background-color: rgb(253,163,45)" class="btn btn-primary float-right"
                       href="{{ route('inventories.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div style="background: rgb(253,181,45);
            background: linear-gradient(0deg, rgba(253,181,45,1) 52%, rgba(195,77,34,1) 100%);" class="card-body p-0">
                @include('inventories.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

