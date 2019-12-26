<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClaveCompuestaIdUsuarioPosteo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
       {
         Schema::table('likes', function (Blueprint $table) {
           $table->dropColumn('id');
           $table->primary(['user_id', 'post_id']);

         });
       }

       /**
        * Reverse the migrations.
        *
        * @return void
        */
       public function down()
       {
         Schema::table('likes', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->dropPrimary(['user_id', 'post_id']);
         });
       }
}
