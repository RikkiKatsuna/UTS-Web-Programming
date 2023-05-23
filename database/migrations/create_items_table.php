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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId("brand_id")->references("id")->on("brands")->nullable(false);
            $table->foreignId("category_id")->references("id")->on("categories")->nullable(false);
            $table->string("item_name", 25)->nullable(false);
            $table->integer("price")->nullable(false);
            $table->string("description",100)->nullable(false);
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
        Schema::dropIfExists('items');
    }
};
