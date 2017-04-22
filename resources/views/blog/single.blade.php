@extends('main')

<?php $titleTag =  htmlSpecialChars($post->title) ; ?>
@section('title', "| $titleTag " )

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $post->title }}</h1>
            <p>{!! $post->body !!}</p>
            <hr>
            <p>Posted on: {{ $post->category->name }} </p>
        </div>
    </div>
    <hr>
    <h1>Comments</h1>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($post->comments as $comment)
                <div class="comment">
                    <p><strong> {{ $comment->name }} Dijo! </strong></p>
                    <p><strong>Email:</strong> {{ $comment->email }} </p>
                    <p><strong>Comment: </strong> {{ $comment->comment }} </p>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
    <hr>
    <div class="row">
        
        <div id="comment-form" class="col-md-8 col-md-offset-2">
            {{ Form::open([ 'route'=> ['comments.store', $post->id], 'method' => 'POST'  ] ) }}
                <div class="row">
                    <div class="col-md-6">
                        {{ Form::label('name', 'Name: ') }}
                        {{ Form::text('name', null, ['class'=>'form-control']) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('email', 'Email: ') }}
                        {{ Form::text('email', null, ['class'=> 'form-control']) }}
                    </div>
                    <div class="col-md-12">
                        {{ Form::label('comment', 'Comment: ') }}
                        {{ Form::textArea('comment', null, ['class'=> 'form-control', 'rows'=> '5'] ) }}
                        <br>
                        {{ Form::submit('Add Comment', ['class'=>'btn btn-block btn-success']) }}
                    </div>
                </div>

                

            {{ Form::close()}}
        </div>
    </div>

@endsection