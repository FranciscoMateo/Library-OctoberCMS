<?php namespace Fmateo\Library\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAuthorsTable extends Migration
{
    public function up()
    {
        Schema::create('fmateo_library_authors', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
	        $table->string('name', 100);
	        $table->string('surname', 100);
	        $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fmateo_library_authors');
    }
}
