@extends('main')

@section('title','| Homepage')

@section('content')


            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1>Laravel Site </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure sint praesentium illum commodi enim sequi repudiandae quisquam laboriosam aperiam? Odit!</p>
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
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
                       <p>{{ substr($post->body, 0, 500)}} {{ strlen($post->body) >500 ? "..." : "" }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}" class ="btn btn-primary pull-right buton">Read more</a>
                      </div>
                  </div>
                        
               @endforeach
              </div>

              <div class=" col-md-3"> 
                <div class="panel panel-default">
                  <div class="panel-body">
                      Basic panel example Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex distinctio eius a, id omnis repellendus eum magnam tempora, minus adipisci! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni maiores cum labore repellendus, ratione ut non, totam aliquam vitae et nulla repellat modi libero cupiditate impedit ipsa vel in doloribus.
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
        
@endsection

@section('scripts')

<script>
    
    // confirm("I loaded new Js")
</script>
@endsection
       







