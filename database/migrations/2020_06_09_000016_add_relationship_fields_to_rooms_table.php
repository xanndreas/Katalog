<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToRoomsTable extends Migration
{
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->unsignedInteger('gedung_id')->nullable();
            $table->foreign('gedung_id', 'gedung_fk_1618107')->references('id')->on('buildings');
        });
    }
}