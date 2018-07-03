<?php namespace Fmateo\Library\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBookAuthorsTable extends Migration
{
    public function up()
    {
        Schema::create('fmateo_library_book_author', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('book_id');
            $table->integer('author_id');
            $table->integer('author_order');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fmateo_library_book_authors');
    }
}
