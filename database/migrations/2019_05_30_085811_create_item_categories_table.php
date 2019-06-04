<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_categories', function (Blueprint $table) {  
            $table->bigIncrements('item_category_id');
        });

        Schema::table('item_categories', function($table) { 
            $table->bigInteger('item_id')->unsigned()->index(); 
            $table->foreign('item_id')->references('item_id')->on('items'); 
            $table->bigInteger('category_id')->unsigned()->index(); 
            $table->foreign('category_id')->references('category_id')->on('categories'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_categories', function (Blueprint $table) {
            $table->dropForeign('item_categories_item_id_foreign');
            $table->dropForeign('item_categories_category_id_foreign');
        });

        Schema::dropIfExists('item_categories');
    }
}
