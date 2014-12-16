<?php
 class AuthorsController extends BaseController
 {
	
	public function index()
	{
		 
		$data = Author::getData();
		return View::make('authors.index')
		->with('title','Author List')
		->with(compact('data'));
		
	}
	
	public function view($id)
	{
	        $this->checkLog();
		  
			 $data = Author::view($id);
			 return View::make('authors.view')
			 ->with(compact('data'))
			->with('title','Author Information');
		 
	}
	
	 public function newAuthor()
	 {
		 $this->checkLog();
		 return View::make('authors.new')
		 ->with('title','Add New Author');
		 
	 }
	 public function saveAuthor()
	 {
		$input = Input::all();
		$data = Author::insertData($input);
		if($data)
		{
			return Redirect::to('authors')->with('message', 'Insert Data Successfully');
		} else
		{
			return Redirect::to('authors/newAuthor')->with('error_message', 'Insert Data failed');
		}
		
	 }
	 
	 public function updateAuthor()
	 {
		$id=Input::get('id');
		 
		 $data = Author::view($id);
		 return View::make('authors.update')
		 ->with(compact('data'))
		 ->with('title','update Information');
	 }
	 
	 public function saveinfo()
	 {
		 $input = Input::all();
		 $data = Author::updateData($input);
		 $id = $input['id'];
		
		 if($data)
		 {
			 return Redirect::to("authors/$id")->with("message", "Update Data Successfully");
		 } else
		 {
			 return Redirect::to("authors/$id")->with("error_message", "Update Data Failed");
		 }
		 
	 }
	 
	 public function deleteAuthor()
	 {
		 $input = Input::all();
		 
		 $data = Author::deleteData($input);
		 $id = $input['id'];
		 
		 if($data)
		 {
			 return Redirect::to("authors")->with("message", "Delete Data Successfully");
		 } else
		 {
			 return Redirect::to("authors/$id")->with("error_message", "Delete Data Failed");
		 }
		 
	 }
	 
	 public function login()
	 {
		 return View::make('authors.login')
		 ->with('title','Login Author');
		 
	 }
	 
	 public function loginAuthor()
	 {
		 $input = Input::all();
		 $id = Author::login($input);
		 
		 if($id)
		 {
			 Session::put('id', $id);
			 return Redirect::to("authors/$id")->with("message", "Welcome  Author");
		 } else
		 {
			 return Redirect::to("/")->with("error_message", "Login Failed. Please try again");
		 }
		 
	 }
	 public function checkLog()
	 {
		$id = Session::get('id');
		if($id)
		{
			return true;
		} else
		{
			
				return Redirect::to("/")->with("error_message", "Login Failed. Please try again");
		}
		 
	 }
	 
	 public function logout()
	 {
		 Session::flush();
		  return Redirect::to("/")->with("error_message", "Logout Successfully.");
		 
	 }
 }
?>