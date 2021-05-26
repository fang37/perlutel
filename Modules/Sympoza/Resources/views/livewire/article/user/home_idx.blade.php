@livewireScripts
@extends('adminlte::page')

@section('title', 'Article Submission')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <b>Article Submission</b>
                        <a href="/sympoza/article-submission/create" class="btn btn-sm bg-success float-right"><i class="fas fa-plus-circle"></i> Create</a>
                    </div>
                    <div class="card-body">
                        @livewire('sympoza::article.user.home')
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop