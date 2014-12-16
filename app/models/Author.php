<?php
	class Author extends Eloquent
	{
		static public function getData()
		{
		  /*return DB::table('authors')->get();*/
		  
		 return  DB::table('authors')
            ->select('*')
            ->orderBy('first_name', 'asc')
            ->take(10)
            ->get();
		  
		}
		
		static public function view($id)
		{
		  /*return DB::table('authors')->get();*/
		  
		 return  DB::table('authors')
			->where('id',$id)
            ->select('*')
             ->orderBy('first_name', 'asc')
            ->take(10)
            ->get();
		  
		}
		
		static public function insertData($data)
		{
			/*return DB::table('authors')->get();*/
			
			//print_r($data);
			return DB::table('authors')->insert(
			array('first_name' => $data['first_name'],
			'last_name' => $data['last_name'],
			'email' => $data['email'],
			'updated_at' => date('Y-m-d H:i;s')
			)
			);
			
		}
		
		static public function updateData($data)
		{
			return DB::table('authors')
            ->where('id', $data['id'])
            ->update(
			array('first_name' => $data['first_name'],
			'last_name' => $data['last_name'],
			'email' => $data['email'],
			'updated_at' => date('Y-m-d H:i;s')
			));
		}
		
		static public function deleteData($data)
		{
			return DB::table('authors')->where('id', $data['id'])->delete();
		}
		
		static public function login($data)
		{
			$user = DB::table('authors')
			->where('first_name',$data['first_name'])
			->where('email',$data['email'])
			->first();

			if(!empty($user)) {
				return $user->id;
			} else 
			{
				return 0;
			}
		}
	}
	
?>