<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('transaction_id');
            $table->string('reference_number')->unique();
            $table->dateTime('date_from');
            $table->dateTime('date_to');
            $table->text('status');
            $table->dateTime('date_returned');
            $table->dateTime('transaction_date');
            $table->integer('user_id')->unsigned();
            $table->integer('shipper_id')->unsigned();
            $table->dateTime('shipped_date');
            $table->text('shipped_to_name');
            $table->text('shipped_to_address');
            $table->text('shipped_to_city');
            $table->text('shipped_to_country');
            $table->text('shipped_to_postal_code');
            $table->text('shipped_to_tracking_number');
            $table->text('shipped_remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
