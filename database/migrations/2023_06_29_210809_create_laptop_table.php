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
        Schema::create('laptop', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->string('type');
            $table->string('Image');
            $table->string('brand');
            $table->string('ProcessorBrand');
            $table->string('ProcessorModel');
            $table->string('Generation');
            $table->string('ProcessorFrequency');
            $table->string('ProcessorThread');
            $table->string('CPUCache');
            $table->string('ChipsetModel');
            $table->string('DisplaySize');
            $table->string('DisplayType');
            $table->string('Resolution');
            $table->string('TouchScreen');
            $table->string('RefreshRate');
            $table->string('Features');
            $table->string('Ram');
            $table->string('RamType');
            $table->string('MaxRamCap');
            $table->string('StorageType');
            $table->string('StorageCap');
            $table->string('Extraslot');
            $table->string('SSD');
            $table->string('GPU');
            $table->string('Keyboard');
            $table->string('Touchpad');
            $table->string('Camera');
            $table->string('Ports');
            $table->string('Connectivity');
            $table->string('OS');
            $table->string('Fingerprint');
            $table->string('Dimension');
            $table->string('Weight');
            $table->string('Warranty');
           

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
        Schema::dropIfExists('laptop');
    }
};
