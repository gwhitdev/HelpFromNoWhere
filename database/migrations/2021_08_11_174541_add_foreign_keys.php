<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('opportunities', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('visibility_id');
            $table->foreign('visibility_id')->references('id')->on('visibilities');
        });
        Schema::table('tasks', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('visibility_id');
            $table->foreign('visibility_id')->references('id')->on('visibilities');
            $table->unsignedBigInteger('opportunity_id');
            $table->foreign('opportunity_id')->references('id')->on('opportunities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('opportunities', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['status_id']);
            $table->dropForeign(['category_id']);
            $table->dropForeign(['visibility_id']);
        });
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['status_id']);
            $table->dropForeign(['category_id']);
            $table->dropForeign(['visibility_id']);
            $table->dropForeign(['opportunity_id']);
        });
    }
}
