@extends('dashboard.manager.dashboardMainManager')

@section('dashContentManager')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-user fa-fw"></i> Profile of {{ $user->username }}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row"> 
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            {!!Form::model($user, ['method' => 'GET', 'action' => ['UserResourceController@edit', $user->id]]) !!}

                            <?php $buttonsDisable='disabled'; ?>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    {{-- {!! Form::close() !!} --}}
                                    <tr>
                                        <td>
                                            <strong>Username</strong>
                                        </td>
                                        <td>
                                            {!! Form::text('username', $user->username, ['class' => 'form-control', $buttonsDisable ]) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Status</strong>
                                        </td>
                                        <td>
                                            {!! Form::text('level', $user->level, ['class' => 'form-control', $buttonsDisable]) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Name</strong>
                                        </td>
                                        <td>
                                            {!! Form::text('name', $user->name, ['class' => 'form-control', $buttonsDisable]) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Email</strong>
                                        </td>
                                        <td>
                                            {!! Form::text('email', $user->email, ['class' => 'form-control', $buttonsDisable]) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Last Login</strong>
                                        </td>
                                        <td>
                                            {!! Form::text('updated_at', $user->updated_at, ['class' => 'form-control', 'disabled' => 'disabled']) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Created at</strong>
                                        </td>
                                        <td>
                                            {!! Form::text('created_at', $user->created_at, ['class' => 'form-control', 'disabled' => 'disabled']) !!}
                                        </td>
                                    </tr>
                                </table>
                                {!! Form::submit('Edit', ['class' => 'btn btn-outline btn-default', 'name' => 'edit']) !!}

                                

                                {!! Form::submit('Delete User', ['class' => 'btn btn-outline btn-default', 'name' => 'delete', 'disabled']) !!}
                                
                                {!! Form::close() !!}





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
    
     <!-- Morris Charts JavaScript -->
    <script src="/bower_components/raphael/raphael-min.js"></script>
    <script src="/bower_components/morrisjs/morris.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2.js"></script>

@stop