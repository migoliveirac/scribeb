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
                        {!! $article->body !!}

                        <div class="panel-footer">
                            @if(strcmp($article->status,'submitted')==0)
                                Article not published yet!
                            @elseif(strcmp($article->status,'published')==0)
                                Article published on {!! $article->published_at !!}

                            @endif

                            <div class="btn btn-outline btn-default disabled pull-right">Delete</div>

                            <div class="btn btn-outline btn-default disabled pull-right">Publish</div>

                            <div class="btn btn-outline btn-default disabled pull-right">Submit</div>

                            <a href="{!! action('ArticleResourceController@edit',[$article->id]) !!}">
                                <div class="btn btn-outline btn-default pull-right">Edit</div>
                            </a>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->     
            </div> 
            <!-- /.cl-lg-12 -->
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