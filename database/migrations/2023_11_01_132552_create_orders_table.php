<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->string('order_number')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->double('lat', 15, 8)->nullable();
            $table->double('long', 15, 8)->nullable();
            $table->string('complete_address')->nullable();
            $table->string('transaction_id')->nullable();
            $table->decimal('subtotal', 11, 2)->nullable();
            $table->decimal('tax', 11, 2)->nullable();
            $table->decimal('total', 11, 2)->nullable();
            $table->string('cancel_by')->nullable();
            $table->integer('cancel_by_user_id')->nullable();
            $table->longText('cancel_reason')->nullable();
            $table->enum('status', ['pending','accept','ready', 'cancel','complete'])->nullable()->default('pending');

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
        Schema::dropIfExists('orders');
    }
};
