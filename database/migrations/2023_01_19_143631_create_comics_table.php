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
        // series
        // sale_date
        // type

        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string("title", 50);
            $table->text("description");
            $table->string("thumb")->nullable();
            $table->float("price", 8,2);
            $table->string("series", 50);
            $table->date("sale_date");
            $table->string("type", 25);
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
        Schema::dropIfExists('comics');
    }
};
