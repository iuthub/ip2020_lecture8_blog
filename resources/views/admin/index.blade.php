@extends('layouts.admin_layout')

@section('content')


@include('partials.info_block')

@foreach($posts as $post)
    <div class="article">
        <div class="article-header">
            <h2>{{ $post['title'] }}</h2>
        </div>
        <div class="article-body">
            {{ $post['body'] }}
        </div>
        <div class="article-footer">
            <div class="article-meta">
                
            </div>
             <div class="article-actions">
                <a href="{{ route('adminEdit', ['id'=> array_search($post, $posts) ]) }}">Edit</a> | 
                <a href="{{ route('adminDelete', ['id'=>  array_search($post, $posts) ]) }}">Delete</a>
            </div>
        </div>
      
    </div>
@endforeach
  

@endsection