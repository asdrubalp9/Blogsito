@extends('main')

@section('title', '| Edit Comment')

@section('content')

    <h1>Edit Comment </h1>

    {{ Form::model($comment, ['route'=> ['comments.update', $comment->id,], 'method'=> 'PUT' ]) }}

    {{ Form::label('name', 'Name: ') }}
    {{ Form::text('name', null, ['class'=> 'form-control', 'disabled' => '']) }}

    {{ Form::label('email', 'Email: ') }}
    {{ Form::text('email', null, ['class'=>'form-control', 'disabled'=> '']) }}

    {{ Form::label('comment', 'Comment: ') }}
    {{ Form::textArea('comment', null, ['class'=>'form-control']) }}
    <br>    
    {{ Form::submit('Update Comment', ['class'=>'btn btn-block btn-success']) }}

    {{ Form::close() }}
    
@stop
