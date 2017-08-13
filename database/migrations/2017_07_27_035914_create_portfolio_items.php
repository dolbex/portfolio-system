<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioItems extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_items', function($table) {
                $table->increments('id');
                $table->integer('portfolio_category_id');
                $table->string('name');
                $table->text('description');
                $table->date('creation_date');
                $table->boolean('more_information');
                $table->integer('display_order');
                $table->boolean('on_right');
                $table->boolean('on_top');
                $table->boolean('dark');
                $table->boolean('media')->nullable();
                $table->timestamp('deleted_at')->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->index('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('portfolio_items');
    }

}
