@extends('layouts.app')
@section('content')

<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<h1>{{$post->name}}</h1>
			
			  <div class="panel panel-dafault">
                 <div class="panel-heading">
				   <h1>Categoria</h1>
				 <a href="{{ route('category', $post->category->slug)}}">{{$post->category->name}}</a>
				 </div>

				 <div class="panel-body">

					@if($post->file)
						<img src="{{$post->file}}" alt="img-responsive">
					@endif
					{{$post->excerpt}}
					<hr>
					{!! $post->body!!}
					<hr>
					<h1>Etiquetas</h1>
					@foreach($post->tags as $tag)
				 <a href="{{ route('tag', $tag->slug)}}">{{ $tag->name}}</a>
					@endforeach
				
				</div>
			  </div>
				
	</div>
</div>
@endsection