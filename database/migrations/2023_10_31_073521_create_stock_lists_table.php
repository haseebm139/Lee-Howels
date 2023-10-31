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
        Schema::create('stock_lists', function (Blueprint $table) {
            $table->id();
            $table->string('category_id')->nullable();
            $table->string('item')->nullable();
            $table->string('cost_price_per_1000g')->nullable();
            $table->decimal('yield_percentage', 5, 2)->nullable();
            $table->decimal('actual_cost_price_per_1000g', 9, 6)->nullable();
            $table->decimal('serving_size_buffet_g', 9, 6)->nullable();
            $table->decimal('cost_per_serving', 10, 6)->nullable();
            $table->decimal('cost_per_1g', 10, 9)->nullable();
            $table->string('image')->nullable()->default('documents/item/default.png');
            $table->tinyInteger('status')->nullable()->default(1);

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
        Schema::dropIfExists('stock_lists');
    }
};
