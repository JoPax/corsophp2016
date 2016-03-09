<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announces', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->softDeletes();

			$table->string('title', 150);
			$table->text('text');
			$table->integer('category_id')->unsigned();
			$table->boolean('premium');
			$table->enum('status', ['unpublished', 'published', 'rejected']);
			$table->datetime('published_at');
			$table->integer('interval');
			$table->integer('user_id')->unsigned();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('announces');
    }
}
