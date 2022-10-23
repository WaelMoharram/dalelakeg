<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration {

	public function up()
	{
		Schema::create('blogs', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('user_id')->unsigned();
			$table->string('title');
			$table->longText('content');
			$table->string('image');
            $table->enum('lang',['ar','en'])->default('ar');
		});
	}



	public function down()
	{
		Schema::drop('blogs');
	}
}
