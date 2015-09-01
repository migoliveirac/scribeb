<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>


        	<ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="{!! url('/auth/login') !!}">Login</a>
                </li>
                <li>
                    <a href="{!! url('/auth/register') !!}">Sign up</a>
                </li>
            </ul>



{{-- 
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
             <a href="/" class="dropdown-toggle" data-toggle="dropdown" id="signin-dropdown">Sign in<b class="caret"></b></a>
             <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;" id="signIn-dropdown-menu">
                <li>
                   <div class="row">
                      <div class="col-md-12">

                        <script type="text/javascript">
                        // function OnSubmitForm()
                        // {
                        //   if(document.pressed == 'signin')
                        //   {
                        //    document.myform.action ="auth/login";
                        //   }
                        //   else
                        //   if(document.pressed == 'auth/register')
                        //   {
                        //     document.myform.action ="update.html";
                        //   }
                        //   return true;
                        // }
                        </script>

                        {{-- onsubmit="return onsubmitform();" --}}



{{-- 
                         <form class="form" role="form" method="POST" action="/auth/register" accept-charset="UTF-8">
                            <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('email', null, ['type' => 'email', 'class' => 'form-control', 'placeholder' => 'Email']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('password', null, ['type' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']) !!}
                            </div>
                            <div class="checkbox">
                               <label>
                               <input type="checkbox"> Remember me
                               </label>
                            </div>
                            <div class="form-group">
                            {!! Form::submit('Sign in', ['class' => 'btn btn-success btn-block', 'value' => 'signin', 'onclick' => 'document.pressed=this.value'] ) !!}
                            </div>
                            <div>
                            {!! Form::submit('Sign up', ['class' => 'btn btn-success btn-block', 'value' => 'signup', 'onclick' => 'document.pressed=this.value'] ) !!}
                            </div>
                              {{--  <button type="submit" class="btn btn-success btn-block">Sign in</button>
                               <button type="submit" class="btn btn-success btn-block">Sign up</button> --}}
                            
                         {{-- </form>



                      </div>
                   </div>
                </li>
            </ul>
        </li>
            </ul> --}}



                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{!! url('/') !!}">Home</a>
                    </li>
                    <li>
                        <a href="{!! action('PagesController@articlesGuest', [Auth::user()]) !!}">Posts</a>
                    </li>
                    <li>
                        <a href="{!! url('/contact') !!}">Contact</a>
                    </li>
                </ul>



            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>