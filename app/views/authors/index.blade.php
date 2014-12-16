@extends('layouts.default')
@section('content')
			
			
			<ul>
				@foreach($data as $info)
					<li>{{link_to_route('author',$info->first_name,array('id'=>$info->id))}}</li>
				@endforeach
			</ul>
			<p>{{link_to_route('new_author','Add New Author')}}</p>
@stop


