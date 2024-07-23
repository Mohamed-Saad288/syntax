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
        Schema::create('categories', function (Blueprint $table) {
//        $table->unsignedBigInteger('id')->autoIncrement()->primary();
            $table->id(); // name : id || autoIncrement || primary key
           $table->string('name');
           $table->string('slug')->unique();
           $table->text('description')->nullable();
//           $table->boolean('status')->default(true);
            $table->enum('status',['active','inactive'])->default('active');
            // created_at || updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
