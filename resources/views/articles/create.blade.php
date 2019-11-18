@extends('layouts.master')
@section('title','Create new Article')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <h4> Create new Article</h4>
            <hr>
            <form action="{{ route('articles.create') }}" method="post">
                @include('articles.partials.form', [
                    'article' => new \App\Article,
                    'submit' => 'Create'
                ])
            </form>
        </div>
    </div>
@endsection