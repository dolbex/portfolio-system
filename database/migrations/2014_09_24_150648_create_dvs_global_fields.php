<?php

use Illuminate\Database\Migrations\Migration;

class CreateDvsGlobalFields extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvs_global_fields', function($table)
        {
            $table->increments('id');
            $table->unsignedInteger('language_id');
            $table->string('type', 25);
            $table->string('human_name', 255)->nullable();
            $table->string('key', 100);
            $table->longText('json_value');
            $table->boolean('content_requested')->default(false);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();

            $table->index('language_id');
            $table->unique(['language_id', 'key']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dvs_global_fields');
    }

}
