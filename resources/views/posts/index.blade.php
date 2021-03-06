@extends('main')

@section('title', '| All posts' )

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">

            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create new post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </thead>
                <tbody>

                    @foreach($posts as $post)
                        <tr>
                            <th> {{ $post -> id }}</th>
                            <td> {{ $post -> title }} </td>
                            <td> {{ substr( strip_tags($post -> body) , 0 ,25 ) }} {{ strlen(strip_tags($post -> body)) > 25 ? "...":""  }} </td>
                            <td> {{ date('d-m-Y', strtotime($post -> created_at)) }} </td>
                            <td> 
                                {!! Html::linkRoute('posts.show', 'View', array($post->id), array('class' => 'btn btn-default btn-sm')) !!}
                                {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-default btn-sm')) !!}
                                
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="text-center">
                {!! $posts-> links()  !!}
            </div>
        </div>
    </div>

@stop

