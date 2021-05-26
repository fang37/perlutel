@extends('adminlte::page')

@section('title', 'Article Submission')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <b>Create Submission</b>
                    </div>
                    <div class="card-body">
                        @livewire('sympoza::article.user.create')
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop