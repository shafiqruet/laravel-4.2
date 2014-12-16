@extends('layouts.default')
@section('content')
			<h1>Update Author Information</h1>
			
			<?php echo Form::open(array('url' => 'authors/saveinfo', 'method' => 'post')); ?>
				<p>
					{{ Form::label('first_name', 'First Name', array('class' => 'awesome')) 	}}
					{{ Form::text('first_name', $data['0']->first_name)}}
				</p>
				<p>
					{{ Form::label('last_name', 'Last Name', array('class' => 'awesome')) 	}}
					{{ Form::text('last_name', $data['0']->last_name)}}
				</p>
				<p>
					{{ Form::label('email', 'E-Mail', array('class' => 'awesome')) 	}}
					{{ Form::text('email', $data['0']->email)}}
				</p>
				{{ Form::hidden('id', $data['0']->id) }}
				<p>
					{{ Form::submit('Update') }}
				</p>
				
  
			<?php echo Form::close(); ?>
			
@stop
