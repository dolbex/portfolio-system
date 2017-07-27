<?php

use Illuminate\Database\Migrations\Migration;

class CreateDvsCollectionInstances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvs_collection_instances', function($table)
        {
            $table->increments('id');
            $table->integer('collection_set_id');
            $table->unsignedInteger('page_version_id');
            $table->string('name', 50);
            $table->integer('sort');
            $table->integer('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->index('collection_set_id');
            $table->index('page_version_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dvs_collection_instances');
    }

}
