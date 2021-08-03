<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('nisbn')->unique();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->double('rating')->default(0);
            $table->integer('available')->default(0);
            $table->foreignId('penerbit_id');
            $table->foreignId('pengarang_id');
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
        Schema::dropIfExists('books');
    }
}
