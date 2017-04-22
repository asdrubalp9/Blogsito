@extends ('main')

@section('title','| create new post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({ 
            selector:'textarea',
            plugins:'link',
            menubar:false
        });
    </script>
@endsection


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New</h1>
            <hr>
            {!! Form::open(array('route' => 'posts.store', 'id'=>'form')) !!}
                {{ Form::label('title', 'Title:' ) }}
                {{ Form::text('title', null, array('class' => 'form-control', 'maxlength'=> '50', 'required'=>'')) }}

                {{ Form::label('slug', 'Slug:') }}
                {{ Form::text('slug', null, array('class'=> 'form-control', 'required' => '', 'minlength'=>'5', 'maxlength'=>'255')) }}

                {{ Form::label('category_id', 'Category: ') }}
                <select class="form-control" name="category_id" >
                    @foreach($categories as $category)
                        <option value="{{ $category -> id }}" > {{ $category->name }} </option>
                    @endforeach
                </select>
                {{ Form::label('tags', 'Tags: ') }}
                <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value="{{ $tag -> id }}" > {{ $tag->name }} </option>
                    @endforeach
                </select>


                {{ Form::label('body', 'Post Body:') }}
                {{ Form::textarea('body', null, array('class'=> 'form-control')) }}

                {{ Form::submit('Create post', array('class'=> 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;' )) }}

            {!! Form::close() !!}
        </div>
    </div>
    
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.full.min.js') !!}
    <script type="text/javascript">
        $('#form').parsley();
    </script>   
    <script type="text/javascript">
        $(".select2-multi").select2();
    </script>
@endsection