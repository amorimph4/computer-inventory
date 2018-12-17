<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputerInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computer_inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200)->nullable();
            $table->string('launch_year', 200)->nullable();
            $table->string('manufacturer', 200)->nullable();
            $table->string('operational_system', 200)->nullable();
            $table->string('cpu', 200)->nullable();
            $table->string('memory', 200)->nullable();
            $table->string('storage', 200)->nullable();
            $table->float('initial_price', 8, 2)->nullable();
            $table->string('image', 200)->nullable();
            $table->string('comments', 200)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computer_inventories');
    }
}
