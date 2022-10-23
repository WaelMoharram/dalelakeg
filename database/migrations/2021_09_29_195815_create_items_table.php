<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
            $table->unsignedBigInteger('category_id');
            $table->decimal('price');
            $table->decimal('sale_price')->nullable();
            $table->text('description');
            $table->string('slider_image')->nullable();
            $table->boolean('show_in_slider')->default(0);
            $table->string('slider_text_main')->nullable();
            $table->string('slider_text_sub')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
