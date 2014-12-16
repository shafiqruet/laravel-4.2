<?php
class Add_Authors
{
	public function up()
	{
		Schema::create('authors', function($table){
        $table->increments('id');
        $table->string('name', 100);
        $table->string('bio', 250);
        $table->timestamp('created_at');
        $table->timestamp('updated_at');
        $table->timestamps();
    });

    // Insert some stuff
    DB::table('authors')->insert(
        array(
            'name' => 'shafiq',
            'bio' => 'shafiq1',
        )
    );
	}
	
	
}


?>