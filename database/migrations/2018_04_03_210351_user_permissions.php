<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perm_table', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('page_access');
            $table->text('is_admin');
            $table->text('is_owner');
            $table->text('is_moderator');
            $table->text('group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perm_table');
    }
}
