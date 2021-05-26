@extends('adminlte::page')

@section('title', 'Article Submission')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <b>Edit Submission {{$articleId}} </b>
                    </div>
                    <div class="card-body">
                        @livewire(resource_path('article.user.edit'), ['articleId' => $articleId])
                        @livewire('sympoza::article.user.edit')
                        <!-- ['articleId' => $articleId ] -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop