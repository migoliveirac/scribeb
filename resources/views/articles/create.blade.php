@extends('dashboard.manager.dashboardMainManager')

@section('dashContentManager')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-user fa-fw"></i> Create New Article</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
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
                            
                            {!!Form::open(['action' => 'ArticleResourceController@store']) !!}
                                
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
                                <div class="panel-footer">
                                    @if (strcmp(Auth::user()->level,'manager')==0)
                                        {!! Form::submit('Publish Article', ['class' => 'btn btn-outline btn-default pull-right', 'name' => 'publish']) !!}
                                    @endif

                                    {!! Form::submit('Submit Article', ['class' => 'btn btn-outline btn-default pull-right', 'name' => 'submit']) !!}
                                    
                                    {!! Form::close() !!}
                                </div>

                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
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
    
    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2.js"></script>

@stop