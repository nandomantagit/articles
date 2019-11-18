@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $article->title }}</h1>
                <hr>
                <div class="mb-4">
                    {{ $article->content }}
                </div>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a class="btn btn-primary" href="{{ route('articles.edit', $article )}}">Edit</a>
                    </li>
                    <li class="list-inline-item">
                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{ $article->slug}}">
                            Delete
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="{{ $article->slug}}" tabindex="-1" role="dialog" aria-labelledby="{{ $article->slug}}Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="{{ $article->slug}}Label">Are you sure ?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <form action="{{ route('articles.delete', $article) }}" method="post">
                                                @csrf
                                                
                                                <button type="submit" class="btn btn-danger">Yes</button>
                                            </form>
                                        </li>
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                    </li>
                </ul>   
            </div>
        </div>
    </div>
    
@endsection