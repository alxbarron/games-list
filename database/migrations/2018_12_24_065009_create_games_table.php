<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('game_type')->nullable(false);
            $table->string('name', 100)->unique();
            $table->string('gender', 50)->nullable(false);
            $table->year('launch_year')->nullable(false);
            $table->string('developer', 50)->default('Unknown');
            $table->decimal('price', 6, 2)->unsigned()->default(0.0);
            $table->integer('qty')->unsigned()->default(0);
            $table->string('cover')->nullable();
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
        Schema::dropIfExists('games');
    }
}
