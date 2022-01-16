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
            $table->id();
            $table->integer('user_id')->index();
            $table->integer('website_id')->index();
            $table->integer('transaction_status_id')->index();
            $table->integer('attempt_number');
            $table->timestamp('last_attempt_at')->nullable();
            $table->boolean('is_re_bill_attempt')->default(false);
            $table->boolean('is_trial_attempt')->default(false);
            $table->string('error_message')->nullable();
            $table->string('crypto_coin');
            $table->string('crypto_amount');
            $table->string('fiat_coin');
            $table->string('fiat_amount');
            $table->softDeletes();
            $table->timestampsTz();
        });

        Schema::create('transaction_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('status');
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
        Schema::dropIfExists('transaction_statuses');
    }
}
