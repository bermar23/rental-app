<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('invoice_id');            
            $table->string('status');
            $table->string('invoice_number');
            $table->dateTime('invoice_date');
            $table->timestamps();
        });

        Schema::table('invoices', function($table) { 
            $table->bigInteger('transaction_id')->unsigned()->index(); 
            $table->foreign('transaction_id')->references('transaction_id')->on('transactions'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeign('invoices_transaction_id_foreign');
        });

        Schema::dropIfExists('invoices');
    }
}
