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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable()->default('documents/product/default.png');
            $table->longText('description')->nullable();
            $table->string('slug')->nullable();
            $table->integer('category_id')->nullable();
            $table->decimal('price',11, 2);
            $table->string('cal')->nullable();
            $table->string('carbs')->nullable();
            $table->string('fat')->nullable();
            $table->string('protein')->nullable();
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
        Schema::dropIfExists('products');
    }
};
