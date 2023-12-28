<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExtendPriceTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tracking_items', function (Blueprint $table){
            $table->float('high',8,2);
            $table->float('low',8,2);
            $table->float('open',8,2);
            $table->float('close',8,2);
            $table->dropColumn('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tracking_items', function (Blueprint $table){
           $table->dropColumn('high');
           $table->dropColumn('low');
           $table->dropColumn('open');
           $table->dropColumn('close');
           $table->string('value');
        });
    }
}
