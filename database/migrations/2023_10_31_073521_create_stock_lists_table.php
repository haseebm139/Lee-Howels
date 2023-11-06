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

            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->decimal('cost_price_per_1000g', 5, 2)->nullable();
            $table->decimal('serving_size_buffet_g', 5, 2)->nullable();
            $table->decimal('cost_per_serving', 5, 2)->nullable();
            $table->decimal('cost_per_1g', 5, 2)->nullable();
            $table->decimal('item_cost', 5, 2)->nullable();
            $table->enum('meal_type', ['base', 'protein','vegetable','topping_extra'])->nullable()->default('base');
            $table->string('image')->nullable()->default('documents/default.png');
            $table->decimal('yield_percentage', 5, 2)->nullable();
            $table->decimal('cal', 5, 2)->nullable();
            $table->decimal('carbs', 5, 2)->nullable();
            $table->decimal('fat', 5, 2)->nullable();
            $table->decimal('protein', 5, 2)->nullable();
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
