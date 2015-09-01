{{-- {!! Form::hidden('user_id', 1) !!} --}}
<div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
		{!! Form::label('name') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
	</div>
</div>

<div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
		{!! Form::label('email') !!}
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=> 'Email']) !!}
	</div>
</div>

<div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
		{!! Form::label('message') !!}
		{!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message', 'rows' => '5']) !!}
	</div>
</div>

<br>
<div class="row">
	{!! Form::submit('Send', ['class' => 'row col-xs-1.2 col-sm-offset-6 btn btn-default' ]) !!}
</div>

