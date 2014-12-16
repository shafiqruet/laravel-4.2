@extends('layouts.default')
@section('content')
			<h1>Add New Author</h1>
			
			<?php echo Form::open(array('url' => 'authors/saveAuthor', 'method' => 'post')); ?>
				<p>
					{{ Form::label('first_name', 'First Name', array('class' => 'awesome')) 	}}
					{{ Form::text('first_name', 'First Name')}}
				</p>
				<p>
					{{ Form::label('last_name', 'Last Name', array('class' => 'awesome')) 	}}
					{{ Form::text('last_name', 'Last Name')}}
				</p>
				<p>
					{{ Form::label('email', 'E-Mail', array('class' => 'awesome')) 	}}
					{{ Form::text('email', 'E-Mail')}}
				</p>
				<p>
					{{ Form::submit('Save') }}
				</p>
				
  
			<?php echo Form::close(); ?>
			
@stop

