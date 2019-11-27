<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
});
            DB::table('post_types')->insert([
           ['name' => 'Evento Anterior'],
           ['name' => 'Evento Próximo'],
           ['name' => 'Donación'],
           ['name' => 'Voluntariado'],
           ['name' => 'Otros']

       ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('post_types');

    }
}
