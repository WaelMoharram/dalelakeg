<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('section_1_icon');
            $table->text('section_1_title');


            $table->text('section_2_icon');
            $table->text('section_2_title');


            $table->text('section_3_icon');
            $table->text('section_3_title');


            $table->text('section_4_icon');
            $table->text('section_4_title');

            $table->string('lat')->default(0);
            $table->string('lng')->default(0);
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
        Schema::dropIfExists('contact_us');
    }
}
