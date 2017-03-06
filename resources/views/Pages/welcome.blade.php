@extends('main')

@section('title','| Homepage')

@section('content')


            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <div class="text-center">
                          <h1> Laravel </h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                          Iure sint praesentium illum commodi enim sequi repudiandae quisquam laboriosam aperiam? Odit!</p>

                    </div>
                </div>
            </div>


            <!--  end of header row -->
           <div class="row">
               <div class="col-md-9">

                  @foreach( $posts as $post)

                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h3> {{$post->title}}</h3>
                       <p>{{ substr(strip_tags($post->body), 0, 500)}} {{ strlen(strip_tags($post->body)) >500 ? "..." : "" }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}" class ="btn btn-primary pull-right buton">Read more</a>
                      </div>
                  </div>

               @endforeach
              </div>

              <div class=" col-md-3">
                <div class="panel panel-default">
                  <div class="panel-body">
                    @foreach($post->tags as $tag)
          						<span class="label label-default  "> {{ $tag->name}}</span>

          					@endforeach

                  </div>
                </div>
              </div>
              <div class=" col-md-3">
                <div class="panel panel-default">
                  <div class="panel-body">
                      Basic panel example Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex distinctio eius a, id omnis repellendus eum magnam tempora, minus adipisci! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia fugiat, quo a incidunt, molestiae velit facere! In dolorum porro molestiae.
                  </div>
                </div>
              </div>

           <div class="row">
             <div class="col-md-12">
               <div class="text-center">{!! $posts->links()!!}</div>
             </div>
           </div>
            </div>

@endsection

@section('scripts')

<script>

    // confirm("I loaded new Js")
</script>
@endsection
