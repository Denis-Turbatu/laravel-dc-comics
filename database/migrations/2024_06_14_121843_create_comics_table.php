<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * CREATE TABLE `comics`(
     *  id int PRIMARY KEY AUTO_INCREMENT,
     *  title varchar(255) NOT NULL,
     *  description varchar(255) NOT NULL,
     *  thumb varchar(255) NOT NULL,
     *  price varchar(255) NOT NULL,
     *  series varchar(255) NOT NULL,
     *  sale_date date() NOT NULL,
     *  type varchar(255) NOT NULL,
     *  created_in timestamps() NOT NULL,
     *  updated_in timestamps() NOT NULL,
     * );
     */
    public function up(): void
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('thumb')->nullable();
            $table->string('price');
            $table->string('series');
            $table->date('sale_date');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
