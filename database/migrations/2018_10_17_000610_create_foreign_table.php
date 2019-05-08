<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::enableForeignKeyConstraints();
        // Schema::table('cements', function($table)
        // {
        //     $table->foreign('types_id')
        //             ->references('id')->on('types')
        //             ->onDelete('cascade')
        //             ->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('cements', function (Blueprint $table) {
        //     $table->dropForeign(['types_id']);
        // });
    }
}
