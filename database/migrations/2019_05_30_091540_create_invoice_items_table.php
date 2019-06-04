<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->bigIncrements('invoice_item_id');
            $table->decimal('unit_price', 8, 2);
            $table->integer('quantity');
            $table->string('item_code');
            $table->timestamps();
        });

        Schema::table('invoice_items', function($table) { 
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
        Schema::table('invoice_items', function (Blueprint $table) {
            $table->dropForeign('invoice_items_item_id_foreign');
        });

        Schema::dropIfExists('invoice_items');
    }
}
