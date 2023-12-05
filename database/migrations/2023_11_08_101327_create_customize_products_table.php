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
        Schema::create('customize_products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->default('Customize Product');
            $table->string('image')->nullable()->default('documents/default.svg');
            $table->integer('base_id')->nullable();
            $table->integer('protein_id')->nullable();
            $table->integer('vegetable_id')->nullable();
            $table->integer('extra_topping_id')->nullable();
            $table->string('cal')->nullable();
            $table->string('carbs')->nullable();
            $table->string('fat')->nullable();
            $table->string('protein')->nullable();
            $table->decimal('price', 11, 2)->nullable();
            $table->string('status')->nullable()->default(1);
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
        Schema::dropIfExists('customize_products');
    }
};
