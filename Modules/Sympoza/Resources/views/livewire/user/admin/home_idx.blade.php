@extends('adminlte::page')

@section('title', 'Faculty home page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <b>User</b> | User management
                    </div>
                    <div class="card-body">
                        @livewire('sympoza::user.admin.home')
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop


