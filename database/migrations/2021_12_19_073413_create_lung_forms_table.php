<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLungFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lung_forms', function (Blueprint $table) {
            $table->id();
            $table->string('Q11');
            $table->string('Q12');
            $table->string('Q13');
            $table->string('Q14');
            $table->string('Q15');
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
        Schema::dropIfExists('lung_forms');
    }
}
