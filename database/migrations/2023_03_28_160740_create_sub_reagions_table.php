<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sub_reagions', function (Blueprint $table) {
            $table->bigIncrements('sub_reagion_id');
            $table->string('sub_reagion_name');
            $table->string('sub_reagion_code');
            $table->integer('reagion_id');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_reagions');
    }
};
