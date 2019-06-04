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

        Schema::table('transactions', function($table) { 
            $table->bigInteger('user_id')->unsigned()->index(); 
            $table->foreign('user_id')->references('user_id')->on('users'); 
            $table->bigInteger('shipper_id')->unsigned()->index(); 
            $table->foreign('shipper_id')->references('shipper_id')->on('shippers'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign('transactions_user_id_foreign');
            $table->dropForeign('transactions_shipper_id_foreign');
        });

        Schema::dropIfExists('transactions');
    }
}
