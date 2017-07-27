<?php

use Illuminate\Database\Migrations\Migration;

class CreateGroups extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('groups'))
        {
            Schema::create('groups', function($table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });
        }
        else
        {
            Schema::table('groups', function($table)
            {
                if (!Schema::hasColumn('groups', 'id')) {
                    $table->increments('id');
                }

                if (!Schema::hasColumn('groups', 'name')) {
                    $table->string('name', 255);
                }

                if (!Schema::hasColumn('groups', 'created_at')) {
                    $table->timestamp('created_at')->nullable();
                }

                if (!Schema::hasColumn('groups', 'updated_at')) {
                    $table->timestamp('updated_at')->nullable();
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('groups');
    }

}
