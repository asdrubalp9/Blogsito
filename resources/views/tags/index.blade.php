@extends('main')

@section('title', ' | All Tags')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>TAGS</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tags as $tag)
                        <tr>
                            <th>{{ $tag->id }}</th>
                            <td><a href="{{ route('tags.show', $tag->id )}}">{{ $tag->name}}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- end cold-md-8 -->
        <div class="col-md-3 ">
            <div class="well">
                {!! Form::open(['route' => 'tags.store', 'method'=> 'POST']) !!}
                    <h2>New tag</h2>
                    {{ Form::label('name', 'name: ') }}
                    {{ Form::text('name', null, ['class'=> 'form-control']) }}
                    <br>
                    {{ Form::submit('Create New Tag', ['class'=> 'btn btn-primary btn-block']) }}
                {!! Form::close() !!}
            </div>
        </div>

    </div>

@endsection