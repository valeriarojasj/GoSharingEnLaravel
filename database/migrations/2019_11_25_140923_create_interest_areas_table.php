<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterestAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interest_areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
        });

        DB::table('interest_areas')->insert([
       ['name' => 'Educación'],
       ['name' => 'Salud'],
       ['name' => 'Niñez'],
       ['name' => 'Tercera Edad'],
       ['name' => 'Mujer'],
       ['name' => 'Medio Ambiente'],
       ['name' => 'Animales'],
       ['name' => 'Nutrición']
      ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('interest_areas');
    }
}
