<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenement', function(Blueprint $table) {
            $table->increments('id');
            $table->string('typeevent');
            $table->string('description', 255);
            $table->date('date', 10);
            $table->string('horaireDeb', 10);
            $table->string('horaireFin', 10);
            $table->integer('id_classe')->unsigned();
            $table->foreign('id_classe')
                ->references('id')
                ->on('classe')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evenement', function(Blueprint $table) {
            $table->dropForeign('posts_user_id_foreign');
        });
        Schema::drop('evenement');
    }
}
