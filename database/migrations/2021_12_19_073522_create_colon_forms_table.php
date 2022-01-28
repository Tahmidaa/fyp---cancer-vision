<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColonFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colon_forms', function (Blueprint $table) {
            $table->id();
            $table->string('Q21');
            $table->string('Q22');
            $table->string('Q23');
            $table->string('Q24');
            $table->string('Q25');
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
        Schema::dropIfExists('colon_forms');
    }
}
