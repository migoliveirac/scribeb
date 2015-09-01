@extends('main')

@section('content')
   <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="/js/jquery.bootpag.min.js"></script>
    <script src="/js/scribe-blog.min.js"></script>

<!-- Navigation -->
    @if (Auth::guest()==false)
        @include('home._loggedNavbar')
    @else
        @include('home._guestNavbar')
    @endif

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/kid-world.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>The Scribe</h1>
                        <hr class="small">
                        <span class="subheading"><p>Complete Article List</span>
                    </div>
                </div>
            </div>
        </div>
    </header>






    <!-- Main Content -->
    <div class="container">
        <div class="row">

			@foreach($articles as $article)
			    <div class="post-preview">
			        <a href="{!! action('PagesController@articlesGuestShow', [$article->id]) !!}">
			            <h2 class="post-title">
			                {!! $article->title !!}
			            </h2>
			            {{-- <h3 class="post-subtitle">
			                Problems look mighty small from 150 miles up
			            </h3> --}}
			        </a>
                    @if (Auth::guest()==false)
	                    <p class="post-meta">Posted by <a href="{!! action('UserResourceController@show', [$article->user->id]) !!}">{!! $article->user->username !!}</a> on {!! $article->published_at !!}</p>
	                @else
	                    <p class="post-meta">Posted by {!! $article->user->username !!}</a> on {!! $article->published_at !!}</p>
	                @endif 

			    </div>
			    <hr>
			@endforeach

{{-- 
        <div class="bs-docs-example">
            <p class="well demo content1">
                <!-- Dynamic Content here! -->
            </p>
            <p class="demo demo1"></p>
        </div>
        

         <script type="text/javascript">
         	$('.demo1').bootpag({
			    total: 5
			}).on("page", function(event, num){
			    $(".content").html("Page " + num); // or some ajax content loading...
			 
			});
        </script>

--}}



        </div>
    </div>







@stop

