<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStarPhonesTableMigration extends Migration
{
    public function up()
    {
        Schema::create('star_phones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('position', false, true);
            $table->softDeletes();

            $table->foreign('parent_id')
                ->references('id')
                ->on('star_phones')
                ->onDelete('set null');
            $table->string('title');
            $table->integer('price')->nullable();
            $table->timestamps();
        });

        Schema::create('star_phone_closure', function (Blueprint $table) {
            $table->increments('closure_id');

            $table->integer('ancestor', false, true);
            $table->integer('descendant', false, true);
            $table->integer('depth', false, true);

            $table->foreign('ancestor')
                ->references('id')
                ->on('star_phones')
                ->onDelete('cascade');

            $table->foreign('descendant')
                ->references('id')
                ->on('star_phones')
                ->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('star_phone_closure');
        Schema::dropIfExists('star_phones');
    }
}
