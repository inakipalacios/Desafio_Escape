<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscapeRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('escape_rooms', function (Blueprint $table) {
            $table->id();
            $table->string("localName");
            $table->integer("phone");
            $table->string("level");
            $table->string("price");
            $table->integer("portalNum");
            $table->string("street");
            $table->integer("postalCode");
            $table->string("city");
            $table->string("province");
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
        Schema::dropIfExists('escape_rooms');
    }
}
