<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('add_line_1')->nullable();
			$table->string('add_line_2')->nullable();
			$table->string('add_line_3')->nullable();
            $table->float('latitude', 10, 6)->nullable()->index();
			$table->float('longitude', 10, 6)->nullable()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
				'add_line_1',
                'add_line_2',
                'add_line_3',
                'latitude',
                'longitude'
			]);
        });
    }
}
