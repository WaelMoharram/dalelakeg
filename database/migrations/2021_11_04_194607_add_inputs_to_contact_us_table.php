<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInputsToContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_us', function (Blueprint $table) {
            $table->text('section_1_sub_title');
            $table->text('section_2_sub_title');
            $table->text('section_3_sub_title');
            $table->text('section_4_sub_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_us', function (Blueprint $table) {
            $table->dropColumn('section_1_sub_title');
            $table->dropColumn('section_2_sub_title');
            $table->dropColumn('section_3_sub_title');
            $table->dropColumn('section_4_sub_title');
        });
    }
}
