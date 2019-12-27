<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('service_id')->nullable();;
            $table->longText('description');
            $table->string('transaction_type');
            $table->double('amount', 5, 4)->nullable()->default(0.00);
            $table->double('previous_balance', 5, 4)->nullable()->default(0.00);
            $table->double('current_balance', 5, 4)->nullable()->default(0.00);
            $table->integer('service_charge');
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
