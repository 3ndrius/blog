@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', '| $titleTag')

@section('content')
	
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>{{$post->title}}</h1>
				<p>{{$post->body}}</p>
				<hr>
				<p>Category: {{ $post->category->name }}</p><br><br><hr><br>
				

			</div>
		</div>

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
				@foreach($post->comments as $comment)
					
				<div class="comment well">
					<p><strong>Name:</strong> {{ $comment->name }}</p>
					<p><strong>Comment:</strong>  <br>{{$comment->comment}} </p>
				</div>

				@endforeach
			</div>
		</div>

		<div class="row">

			<div class="comment-form col-md-8 col-md-offset-2">
				{{ Form::open(['route' =>['comments.store', $post->id], 'method' => 'POST']) }}

				<div class="row">
					<div class="col-md-6">
						{{ Form::label('name' , 'Name:') }}
						{{ Form::text('name', null, ['class' => 'form-control']) }}
					</div>
					<div class="col-md-6">
						
						{{ Form::label('email', 'Email:') }}
						{{ Form::text('email', null, ['class' =>'form-control']) }}
					</div>	
					<div class="col-md-12">
						{{ Form::label('comment', 'Comment:') }}
						{{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '10']) }}

						{{ Form::submit('Add comment', ['class' => 'btn btn-success btn-block btn-lg form-spacing-top'])}}
					</div>		
						
					</div>
				{{Form::close()}}
				</div>
			</div>	
		</div>
	


@stop