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
        Schema::create('schedule_products', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->integer('product_id')->nullable();
            $table->date('date')->nullable();
            $table->time('to')->nullable();
            $table->time('from')->nullable();
            $table->tinyInteger('status')->nullable()->default(0);
            // Add more columns as needed

            $table->timestamps(); // Created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_products');
    }
};
