<?php namespace App;

use Illuminate\Database\Migrations\Migration;

class CreateDvsMenus extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvs_menus', function($table) {
            $table->increments('id');
            $table->unsignedInteger('language_id');
            $table->integer('translated_from_menu_id')->default(0);
            $table->string('name', 255);
            $table->text('links')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dvs_menus');
    }

}
