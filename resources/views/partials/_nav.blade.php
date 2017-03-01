<nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Laravel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/')? "active": "" }}"><a href="/">Home </span></a></li>
                    <li class="{{ Request::is('about')? "active": "" }}"><a href="about">About</a></li>
                    <li class="{{ Request::is('blog')? "active": "" }}"><a href="/blog">Archive</a></li>
                     <li class="{{ Request::is('contact')? "active": "" }}"><a href="contact">Contact</a></li>
                </ul>
             
              <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{route('posts.index')}}">Posts</a></li>
                      <li><a href="{{route('categories.index')}}">Category</a></li> 
                        <li><a href="{{route('tags.index')}}">Tags</a></li> 

                      <li role="separator" class="divider"></li>
                      <li><a href="{{route('logout')}}">LogOut</a></li>
                    </ul>
                  </li>
                @else

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PANEL <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{route('login')}}">Login</a></li>
                        <li role="separator" class="divider"></li>
                      <li><a href="{{route('register')}}">Register</a></li>
                      
                    
                     
                    </ul>
                  </li>


               

                @endif
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>