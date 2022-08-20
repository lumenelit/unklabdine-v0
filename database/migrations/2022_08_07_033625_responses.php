<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('responses', function(Blueprint $table) {
            $table->id();
            $table->string('responden');
            $table->date('timecreated');
            $table->string('comments');
            $table->integer('rating');
            $table->char('type', 1);
            $table->char('mealtime', 1);
            // `id` int(11) NOT NULL,
            // `responden` varchar(30) NOT NULL,
            // `timecreated` date NOT NULL,
            // `comments` varchar(255) NOT NULL,
            // `rating` int(1) NOT NULL,
            // `type` varchar(2) NOT NULL,
            // `mealtime` varchar(2) NOT NULL
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('responses');
    }
};
