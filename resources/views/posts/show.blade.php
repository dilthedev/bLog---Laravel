@extends('layouts.app')

@section('content')

<div class="card card-body bg-light" style="margin-bottom:10px;">
<h1>{{$post->title}}</h1>
<img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}">
<br>
<p>{!!$post->body!!}</p>
<small>Written On {{$post->created_at}} by {{$post->user->name}}</small>
</div>
<a href="/posts" class="btn btn-primary">Back</a>

@if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

            {!! Form::open(['action' => ['PostsController@destroy', $post->id],'method' => 'POST', 'class'=>'float-right']) !!}

                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete',['class' => 'btn btn-danger']) }}

            {!! Form::close() !!}
    @endif
@endif
    @endsection
