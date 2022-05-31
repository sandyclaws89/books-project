<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250);
            $table->binary('cover_image')->nullable();
            $table->string('short_description', 1000);
            $table->string('author', 250)->nullable();
            $table->decimal('price');
            $table->string('genre', 150)->nullable();
            $table->text('synopsis')->nullable();
            $table->float('review')->nullable();
            $table->string('edition', 100)->nullable();
            $table->string('publishing_house', 250)->nullable();
            $table->date('pubblication_date')->nullable();
            $table->date('checkin_date');
            $table->boolean('available');
            $table->tinyInteger('quantity')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
