@extends('main')

@section('title', '| Create New Post')

@section('content')

@section('stylesheets')
{!! Html::style('css/parsley.css')!!}

@endsection

	
	<div class="row">
		
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '' ]) !!}
    			
    			{{ Form::label('title', 'Title:') }}
    			{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}


    			{{ Form:: label('body', 'Post Body:') }}
    			{{ Form:: textarea('body', null, array('class' => 'form-control','required' => '')) }}

				{{Form::label('category_id', 'Category:')}}

					<select class="form-control" name="category_id">
						@foreach($categories as $category)
							<option value="{{ $category->id }}"> {{$category->name}}</option>
						@endforeach
					</select>


    			{{ Form::label('slug' , 'Slug:') }}
    			{{ Form::text('slug', null, ['class'=> 'form-control', 'required'=>'', 'maxlength' =>'255' ] )}}

    			{{ Form:: submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'  ))}}
			{!! Form::close() !!}

		</div>
	</div>

@endsection

@section('scripts')

{!!Html::script('javascript/parsley.min.js')!!}
@endsection