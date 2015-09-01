@extends('dashboard.manager.dashboardMainManager')

@section('dashContentManager')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-user fa-fw"></i> Create New User</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row"> 
                <div class="col-lg-6">
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
                            
                            {!!Form::open(['action' => 'UserResourceController@store']) !!}

                            <?php $buttonsDisable=''; ?>
                                
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    {{-- {!! Form::close() !!} --}}
                                    <tr>
                                        <td>
                                            <strong>Username</strong>
                                        </td>
                                        <td>
                                            {!! Form::text('username', null, ['class' => 'form-control' ]) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Name</strong>
                                        </td>
                                        <td>
                                            
                                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                             
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Email</strong>
                                        </td>
                                        <td>
                                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Password</strong>
                                        </td>
                                        <td>
                                            {!! Form::password('password',null, ['class' => 'form-control']) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Confirm Password</strong>
                                        </td>
                                        <td>
                                            {!! Form::password('password_confirmation',null, ['class' => 'form-control']) !!}
                                        </td>
                                    </tr>
                                    
                                </table>
                                {!! Form::submit('Create User', ['class' => 'btn btn-outline btn-default']) !!}
                                
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
    
    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2.js"></script>

@stop