<?php namespace Fmateo\Library\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('fmateo_library_books', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
	        $table->string('title', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fmateo_library_books');
    }
}
