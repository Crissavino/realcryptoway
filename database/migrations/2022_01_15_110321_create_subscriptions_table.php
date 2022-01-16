<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->integer('website_id')->index();
            $table->integer('subscription_status_id')->index();
            $table->integer('product_id')->index();
            $table->integer('transaction_id')->index();
            $table->integer('subscription_type_id')->index();
            $table->boolean('is_in_trial');
            $table->timestamp('next_re_bill_at')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->timestamp('current_period_start_at')->nullable();
            $table->timestamp('current_period_end_at')->nullable();
            $table->softDeletes();
            $table->timestampsTz();
        });

        Schema::create('subscription_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('subscription_transaction', function (Blueprint $table) {
            $table->id();
            $table->integer('subscription_id')->index();
            $table->integer('transaction_id')->index();
            $table->timestamps();
        });

        Schema::create('subscription_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('trial_hours')->nullable();
            $table->softDeletes();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
        Schema::dropIfExists('subscription_statuses');
        Schema::dropIfExists('subscription_transaction');
        Schema::dropIfExists('subscription_types');
    }
}
