@extends('layouts.default')
@section('content')
<?php $id = $data['0']->id;?>
<div class="content_wrapper">
<h1 class="title"> Author Information</h1>
		@foreach($data as $info)
			<div class="list"><label class="name_title">First Name :  </label>{{ $info->first_name}}</div> 
			<div class="list"><label class="name_title">Last Name :  </label>{{ $info->last_name}}</div>
			<div class="list"><label class="name_title">Email :  </label>{{ $info->email}}</div> 
			<div class="list"><label class="name_title">Updated At :  </label>{{ $info->updated_at}}</div> 
            @endforeach
		<div class="list">{{link_to_route('authors_list','Author List')}} || {{link_to_route("update_author","Update","id=$id")}} || {{link_to_route("delete_author","Delete","id=$id")}} || {{link_to_route("logout_author","Logout")}}</div>
		</div>
@stop
