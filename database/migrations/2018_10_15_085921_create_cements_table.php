<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cause');
            $table->integer('total_no_bags');
            $table->integer('total_good');
            $table->integer('total_defects');
            // $table->unsignedInteger('types_id');
            $table->string('types');
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
        Schema::dropIfExists('cements');
    }
}
