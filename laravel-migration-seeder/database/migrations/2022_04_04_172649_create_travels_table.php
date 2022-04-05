<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50);
            $table->text('description');
            $table->decimal('price', 10 ,2);
            $table->string('departure', 100);
            $table->string('where', 50);
            $table->dateTime('when');
            $table->string('duration', 20);
            $table->decimal('promotion', 4 ,2);

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
        Schema::dropIfExists('travels');
    }
}
