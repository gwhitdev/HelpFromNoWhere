<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrimaryKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->foreignId('user_id')->constrain('users');
        });
        Schema::table('opportunities', function (Blueprint $table) {
            $table->foreignId('user_id')->constrain('users');
            $table->foreignId('status_id')->constrain('statuses');
            $table->foreignId('category_id')->constrain('categories');
            $table->foreignId('visibility_id')->constrain('visibilities');
        });
        Schema::table('tasks', function (Blueprint $table) {
            $table->foreignId('user_id')->constrain('users');
            $table->foreignId('status_id')->constrain('statuses');
            $table->foreignId('category_id')->constrain('categories');
            $table->foreignId('visibility_id')->constrain('visibilities');
            $table->foreignId('opportunity_id')->constrain('opportunities');
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
            $table->dropForeign('user_id');
            $table->dropForeign('status_id');
            $table->dropForeign('category_id');
            $table->dropForeign('visibility_id');
            $table->dropForeign('opportunity_id');
        });
    }
}
