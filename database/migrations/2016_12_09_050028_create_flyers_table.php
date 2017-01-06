<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flyers', function (Blueprint $table) {
			$table->increments('id');
			$table->string('street');
			$table->string('city', 40);
			$table->string('zip',10);
			$table->string('state', 40);
			$table->string('country', 40);
			$table->integer('price');
			$table->text('description');
			
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
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('flyers');

		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
