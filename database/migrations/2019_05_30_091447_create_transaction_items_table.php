<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_items', function (Blueprint $table) {
            $table->bigIncrements('transaction_item_id');
            $table->decimal('amount', 8, 2);
            $table->string('item_code');
            $table->timestamps();
        });

        Schema::table('transaction_items', function($table) { 
            $table->bigInteger('transaction_id')->unsigned()->index(); 
            $table->foreign('transaction_id')->references('transaction_id')->on('transactions'); 
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
        Schema::table('transaction_items', function (Blueprint $table) {
            $table->dropForeign('transaction_items_transaction_id_foreign');
            $table->dropForeign('transaction_items_item_id_foreign');
        });
        
        Schema::dropIfExists('transaction_items');
    }
}
