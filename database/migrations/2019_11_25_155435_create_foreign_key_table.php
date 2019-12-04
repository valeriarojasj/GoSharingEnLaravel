<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
          $table->unsignedBigInteger('post_type_id');
          $table->foreign('post_type_id')->references('id')->on('post_types');
          $table->unsignedBigInteger('interest_area_id');
          $table->foreign('interest_area_id')->references('id')->on('interest_areas');
          $table->unsignedBigInteger('user_id');
          $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('posts', function(Blueprint $table) {

          $table->dropForeign(['post_type_id']);
          $table->dropForeign(['interest_area_id']);
          $table->dropForeign(['comment_id']);
          $table->dropForeign(['user_id']);
          $table->dropColumn('post_type_id');
          $table->dropColumn('interest_area_id');
          $table->dropColumn('comment_id');
          $table->dropColumn('user_id');
    });
}









}
