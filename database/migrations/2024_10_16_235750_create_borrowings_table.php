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
    Schema::create('borrowings', function (Blueprint $table) {
      $table->id();
      $table->date('borrow_date')->comment('The date the book was borrowed');
      $table->date('return_date')->nullable()->comment('The date the book was returned');
      $table->unsignedBigInteger('book_id');
      $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
      $table->unsignedBigInteger('user_id');
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('borrowings');
  }
};
