<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddroleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addroles', function (Blueprint $table) {
            $table->id();
            $table->string('rolesname');
            $table->string('modulename');
            $table->string('managmentpower');
            $table->string('teamstats')->nullable();
            $table->string('followtheteam')->nullable();
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
        Schema::dropIfExists('addroles');
    }
}
