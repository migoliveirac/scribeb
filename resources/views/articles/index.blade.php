@extends('dashboard.manager.dashboardMainManager')

@section('dashContentManager')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-user fa-fw"></i> 
                    <a href="{!! action('UserResourceController@index') !!}">Article List</a>   
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

<!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    {{-- <div class="panel-heading">
                        DataTables Advanced Tables
                    </div> --}}
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th align="center" valign="middle">#</th>
                                        <th>Author</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Created at</th>
                                        <th>Last Updated</th>
                                        <th>Published at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($articles as $article)
                                    <tr class="odd gradeX">
                                        <td align="center" valign="middle">
                                            <a href="{!! action('ArticleResourceController@show',[$article->id]) !!}">
                                                <i class="fa fa-file fa-fw"></i>
                                            </a>
                                        </td>
                                        <td>{!! $article->user->username !!} </td>
                                        <td>{!! $article->title !!}</td>
                                        <td>{!! $article->status !!}</td>
                                        <td class="center">{!! $article->created_at !!}</td>
                                        <td class="center">{!! $article->updated_at !!}</td>
                                        <td class="center">{!! $article->published_at !!}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                        {{-- <div class="well">
                            <h4>DataTables Usage Information</h4>
                            <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                            <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                        </div> --}}
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



    <!-- jQuery -->
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>


@stop