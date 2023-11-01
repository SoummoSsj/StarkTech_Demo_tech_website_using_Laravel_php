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
        Schema::create('components', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->string('type');
            $table->string('Image');
            $table->decimal('price', 8, 2);
            $table->string('generation');
            $table->string('Speed');
            $table->string('Cores');
            $table->string('Threads');
            $table->string('Size');
            $table->string('Memory');
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
        Schema::dropIfExists('components');
    }
};
