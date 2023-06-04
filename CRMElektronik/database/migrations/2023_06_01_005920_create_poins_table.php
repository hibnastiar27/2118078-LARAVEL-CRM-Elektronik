<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('poins', function (Blueprint $table) {
      $table->id();
      // $table->foreignId('pelanggan_id');
      // $table->foreignId('pelanggan_id');

      $table->string('nama');
      $table->integer('min_trans')->nullable();
      $table->integer('batasan')->nullable();
      $table->integer('nominal');
      $table->dateTime('dateline')->nullable();
      $table->string('status');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('poins');
  }
};