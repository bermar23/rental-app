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
            $table->integer('trasaction_id')->unsigned();
            $table->foreign('trasaction_id')->references('trasaction_id')->on('transactions');
            $$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
