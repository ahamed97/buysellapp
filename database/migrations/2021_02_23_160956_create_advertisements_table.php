<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('route_id')->nullable();
            $table->integer('vehicle_type_id')->nullable();
            $table->integer('seller_id')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('sub_description')->nullable();
            $table->date('date')->nullable();
            $table->time('from_time')->nullable();
            $table->time('to_time')->nullable();
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
        Schema::dropIfExists('advertisements');
    }
}
