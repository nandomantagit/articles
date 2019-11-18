@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
           <div class="col-md-6">
               <div class="card">
                   <div class="card-header">Edit Article : {{ $article->title }}</div>
                   <div class="card-body">
                        <form action=" {{ route('articles.edit', $article) }}" method="POST">
                           @include('articles.partials.form', [
                                'submit' => 'Update'
                           ])
                        </form>
                   </div>
               </div>
           </div>
        </div>
    </div>
    
@endsection