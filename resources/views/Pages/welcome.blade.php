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
               <div class="col-md-8">
               
                  @foreach( $posts as $post)
                        
                    <div class="post">
                      <h3>{{$post->title}}</h3>
                      <p>{{ substr($post->body, 0, 300)}} {{ strlen($post->body) >300 ? "..." : "" }}</p>
                      <a href="{{ url('blog/'.$post->slug) }}" class ="btn btn-primary">Read more</a>

                    </div>


                  @endforeach



               </div>
               <div class=" col-md-3 col-md-offset-1"> Lorem ipsum dolor sit ametconsectetur adipisicing elit. Consequatur aperiam a perspiciatis est, magni sunt.Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam suscipit aliquid iusto.</div>
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
       







