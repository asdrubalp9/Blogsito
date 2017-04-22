@extends('main')

@section('title', '| Delete Comment')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Delete this?</h1>
            <p>
                <strong>Name: </strong>{{ $comment->name }}<br>
                <strong>email: </strong>{{ $comment->email }}<br>
                <strong>comment: </strong>{{ $comment->comment }}<br>
            </p>
            {{ Form::open( [ 'route' => ['comments.destroy', $comment->id]  , 'method' => 'DELETE' ]) }}
                {{ Form::submit('DELETE', ['class'=>'btn btn-danger btn-block'] ) }}
            {{ Form::close() }}
        
        </div>
    </div>

@stop