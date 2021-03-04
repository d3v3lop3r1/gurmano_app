<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('group', 100);
            $table->string('producer', 100);
            $table->boolean('is_new')->nullable();
            $table->string('name', 100);
            $table->string('variant', 50)->nullable();
            $table->integer('pcs')->nullable();
            $table->text('description');
            $table->text('short_description');
            $table->string('size', 30);
            $table->text('ingredients');
            $table->integer('price_1');
            $table->integer('price_2')->nullable();
            $table->integer('price_3')->nullable();
            $table->string('picture_1', 40)->nullable();
            $table->string('picture_2', 40)->nullable();
            $table->string('picture_3', 40)->nullable();
            $table->text('recipes')->nullable();
            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('products');
    }
}
