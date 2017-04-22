@extends('main')

@section('title', '| Edit Tag')

@section('content')

    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            {{ Form::model($tag, ['route'=>['tags.update', $tag->id], 'method'=>'PUT']) }}

            {{ Form::label('name', 'Title: ') }}
            {{ Form::text('name', null, ['class'=>'form-control']) }}
            <br>    
            {{ Form::submit('Sava changes', ['class'=>'btn btn-primary']) }}
            <a href="{{ route('tags.index') }}" class="btn btn-primary">Show All</a>
            {{ Form::close() }}
        </div>
    </div>
@stop