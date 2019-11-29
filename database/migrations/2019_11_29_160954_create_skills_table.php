<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
        });


                DB::table('skills')->insert([
               ['name' => 'Inglés'],
               ['name' => 'Portugués'],
               ['name' => 'Manejo de Proyectos'],
               ['name' => 'Guitarra'],
               ['name' => 'Animación'],
               ['name' => 'Programación Web'],
               ['name' => 'Sociable'],
               ['name' => 'Entusiasta'],
               ['name' => 'lider']
              ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
    }
}
