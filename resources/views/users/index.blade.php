@extends('dashboard.manager.dashboardMainManager')

@section('dashContentManager')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-user fa-fw"></i> 
                    <a href="{!! action('UserResourceController@index') !!}">User List</a>   

                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        
     {{-- <span class="pull-left"> --}}
        <div class="row"> 
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th align="center" valign="middle">#</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created on</th>
                                        <th>Last Login</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr class="odd gradeX">
                                        <td align="center" valign="middle">
                                            <a href="{!! action('UserResourceController@show',[$user->id]) !!}">
                                                <i class="fa fa-user fa-fw fa-lg"></i>
                                            </a>
                                        </td>
                                        <td>{!! $user->username !!} </td>
                                        <td>{!! $user->level !!}</td>
                                        <td>{!! $user->name !!}</td>
                                        <td class="center">{!! $user->email !!}</td>
                                        <td class="center">{!! $user->created_at !!}</td>
                                        <td class="center">{!! $user->updated_at !!}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                    <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div> 
    <!-- wrapper -->

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