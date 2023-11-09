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
        Schema::table('stock_lists', function (Blueprint $table) {
            // $table->integer('stock')->unsigned()->nullable()->before('protein');
            $table->integer('stock')->nullable()->after('protein');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stock_lists', function (Blueprint $table) {
            //
        });
    }
};
