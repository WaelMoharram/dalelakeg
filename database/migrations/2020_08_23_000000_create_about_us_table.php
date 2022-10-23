<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('content');
            $table->text('image1');
            $table->text('image2');
            $table->text('image3');
            $table->text('image4');

            $table->text('section_1_icon');
            $table->text('section_1_number');
            $table->text('section_1_title');


            $table->text('section_2_icon');
            $table->text('section_2_number');
            $table->text('section_2_title');


            $table->text('section_3_icon');
            $table->text('section_3_number');
            $table->text('section_3_title');


            $table->text('section_4_icon');
            $table->text('section_4_number');
            $table->text('section_4_title');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_us');
    }
}
