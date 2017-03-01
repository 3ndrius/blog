@extends('main')

@section('title', '| View Post')

@section('content')


	
		
		<div class="row">
			<div class="col-md-8">
				<h1>{{ $post->title }}</h1>
				<p class ="lead">{{ $post->body }}</p>
				<hr>
				<div class="tag">
				@foreach($post->tags as $tag)
					<span class="label label-default "> {{ $tag->name}}</span>

				@endforeach
				</div>
			</div>
			<div class="col-md-4">
				<div class="well">

					<dl >
						<dt>Slug:</dt>
						<dd><p> <a href="{{ route('blog.single',$post->slug)}}"> {{ route('blog.single',$post->slug)}}</a></p> </dd>
					</dl>

					<dl >
						<dt>Category:</dt>
						<dd><p>{{ $post->category->name }}</p></dd>
					</dl>

					<dl >
						<dt>Created at:</dt>
						<dd>{{ date( 'M D | Y H:i',  strtotime($post->created_at)) }}</dd>
					</dl>

					<dl >
						<dt >Last Updated:</dt>
						<dd>{{ date( 'M D | Y H:i',  strtotime($post->updated_at)) }}</dd>
					</dl>


					<hr>

					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block') ) !!}
						
							
						</div>
						<div class="col-sm-6">
							{!! 
								Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE' ])

							!!}

							{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

							{!! Form::close() !!}
						</div>
					</div>

					<div class="row">
						
						<div class="col-md-12">
							{{ Html::linkRoute('posts.index', '<<See All Posts', [], ['class' => 'btn btn-default btn-block btn-h1-margin']) }}
						</div>
					</div>
				</div>
			</div>
		</div>

	

	


@endsection