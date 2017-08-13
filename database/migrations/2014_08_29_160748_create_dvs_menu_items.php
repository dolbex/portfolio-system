<?php namespace App;

use Illuminate\Database\Migrations\Migration;

class CreateDvsMenuItems extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvs_menu_items', function($table) {
            $table->increments('id');
            $table->integer('menu_id')->unsigned();
            $table->integer('page_id')->nullable()->unsigned();
            $table->integer('parent_item_id')->nullable()->unsigned();
            $table->string('name', 255);
            $table->string('url', 255);
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->integer('position')->default('0');
            $table->string('permission')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->index('menu_id');
            $table->index('page_id');
            $table->index('parent_item_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dvs_menu_items');
    }

}
