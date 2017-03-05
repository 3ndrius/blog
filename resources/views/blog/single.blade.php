@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', '| $titleTag')

@section('content')
	
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>{{$post->title}}</h1>
				<p>{{$post->body}}</p>
				<hr>
				<p>Category: {{ $post->category->name }}</p>
				

			</div>

		</div>
<hr>
		<div class="row">
		<div class="col-md-8 col-md-offset-2">
			
			<div class="comment-title">
<h2><i class="fa fa-commenting" aria-hidden="true"></i>  {{$post->comments()->count()}} Comments</h2>
			</div>
		</div>	
		
		
			<div class="col-md-8 col-md-offset-2">
				
				@foreach($post->comments as $comment)
				{{-- 	
				<div class="comment well">
					<p><strong>Name:</strong> {{ $comment->name }}</p>
					<p><strong>Comment:</strong>  <br>{{$comment->comment}} </p>
				</div> --}}
				
				<div class="media">
					 <img class="img-avatar" src="{{" https://www.gravatar.com/avatar/". md5(strtolower(trim($comment->email))). "?d=mm" }}" alt="Generic placeholder image">
					 <div class="comment-body">
					    <h3 class="comment-head" >{{ $comment->name }}</h3>
						<h6 class="comment-date">{{ date(' d M Y, G:i:s' , strtotime($comment->created_at)) }}</h6>
					    
					   <p class="comment-content">{{$comment->comment}}</p>			    
					 </div>
					 <div class="clear"></div>
					 <hr>
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