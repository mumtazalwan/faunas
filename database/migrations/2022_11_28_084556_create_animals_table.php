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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('img_path');
            $table->string('img_path1');
            $table->string('img_path2');
            $table->string('name');
            $table->foreignId('habitats_id');
            $table->longText('desc');
            $table->longText('long_desc');
            $table->foreignId('founder_id');
            $table->string('kingdom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
};
