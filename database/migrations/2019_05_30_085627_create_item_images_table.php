<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_images', function (Blueprint $table) {
            $table->bigIncrements('item_image_id');
            $table->string('url');
            $table->string('image_name');    
            $table->timestamps();
        });

        Schema::table('item_images', function($table) { 
            $table->bigInteger('item_id')->unsigned()->index(); 
            $table->foreign('item_id')->references('item_id')->on('items'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_images', function (Blueprint $table) {
            $table->dropForeign('item_images_item_id_foreign');
        });

        Schema::dropIfExists('item_images');
    }
}
