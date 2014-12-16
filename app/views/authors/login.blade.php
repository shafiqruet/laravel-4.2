@extends('layouts.default')
@section('content')
			<div class="content_wrapper">
				<h1 class="title">Login Author</h1>
				
				<?php echo Form::open(array('url' => 'authors/loginAuthor', 'method' => 'post')); ?>
					
					<p><label>{{ Form::label('first_name', 'First Name', array('class' => 'awesome')) 	}}</label>
					
					{{ Form::text('first_name', '',array('class' => 'form-control'))}}
					</p>
					
					
					<p>
					<label>{{ Form::label('email', 'E-Mail', array('class' => 'awesome')) 	}}</label>
						
					{{ Form::text('email', '',array('class' => 'form-control'))}}
					</p>
					
					
					
					
						<p>{{ Form::submit('Login',array('class' => 'btn btn-default'))}} || <span class="btn btn-default"> {{link_to_route('new_author','Sign Up')}}</span> </p>
					
					
	  
				<?php echo Form::close(); ?>
			</p>

		
			
@stop

