@extends('dashboard.manager.dashboardMainManager')

@section('dashContentManager')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {!! $article->title !!} <small>by {!! $article->user->name !!}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row"> 
            <div class="col-lg-12">
                <div class="panel panel-default">
                   {{--  <div class="panel-heading">
                        Default Panel
                    </div> --}}
                    <div class="panel-body">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                        {!!Form::model($article, ['method' => 'PATCH', 'action' => ['ArticleResourceController@update', $article->id]]) !!}
                            
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                {{-- {!! Form::close() !!} --}}
                                <tr>
                                    <td>
                                        <strong>Title</strong>
                                    </td>
                                    <td>
                                        {!! Form::text('title', null, ['class' => 'form-control' ]) !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Body</strong>
                                    </td>
                                    <td>
                                        
                                        {!! Form::textarea('body', null, ['class' => 'form-control', 'class' => 'col-lg-12']) !!}
                                         
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                        <!-- /.table-responsive -->


                        <div class="panel-footer">
                            @if(strcmp($article->status,'submitted')==0)
                                Article not published yet!
                            @elseif(strcmp($article->status,'published')==0)
                                Article published on {!! $article->published_at !!}

                            @endif


                            {!! Form::submit('Delete', ['class' => 'btn btn-outline btn-default pull-right', 'name' => 'delete']) !!}

                            {!! Form::submit('Publish', ['class' => 'btn btn-outline btn-default pull-right', 'name' => 'publish']) !!}

                            {!! Form::submit('Submit', ['class' => 'btn btn-outline btn-default pull-right', 'name' => 'submit']) !!}

                            {!! Form::submit('Back', ['class' => 'btn btn-outline btn-default pull-right', 'name' => 'back']) !!}
                                
                            {!! Form::close() !!}
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                   <!-- /.panel --> 
            </div>
                <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.page-wrapper -->

    <!-- jQuery & Core & Custom JavaScript -->
    <!-- jQuery -->
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


    <!-- Metis Menu Plugin JavaScript -->
    <script src="/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    
     <!-- Morris Charts JavaScript -->
    <script src="/bower_components/raphael/raphael-min.js"></script>
    <script src="/bower_components/morrisjs/morris.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2.js"></script>

@stop