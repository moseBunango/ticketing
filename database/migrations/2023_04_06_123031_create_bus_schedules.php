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
Schema::create('bus_schedules', function (Blueprint $table) {
$table->bigIncrements('schedule_id');
$table->integer('bus_id');
$table->integer('operator_id');
$table->bigInteger('region_id')->unsigned();
$table->string('to_region');
// $table->bigInteger('to_region')->unsigned();

// $table->bigInteger('sub_region_id')->unsigned();
// $table->date('depart_date');
// $table->date('return_date');
$table->time('depart_time');
// $table->time('return_time');
// $table->string('pickup_address');
// $table->string('dropoff_address');
$table->boolean('status')->default(0);
$table->timestamps();
// $table->foreign('to_region')->references('region_id')->on('regions');
// $table->foreign('sub_region_id')->references('region_id')->on('regions');

});
}

/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::dropIfExists('bus_scheduals');
}
};