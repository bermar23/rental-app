<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('item_id');
            $table->string('item_code')->unique();
            $table->string('item_name');
            $table->string('status');
            $table->string('brand');
            $table->text('description');
            $table->text('terms_and_conditions');
            $table->text('html_description');
            $table->decimal('rental_price', 8, 2);         
            $table->timestamps();   
        });

        Schema::table('items', function($table) { 
            $table->bigInteger('user_id')->unsigned()->index(); 
            $table->foreign('user_id')->references('user_id')->on('users'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropForeign('items_user_id_foreign');
        });
        
        Schema::dropIfExists('items');
    }
}
