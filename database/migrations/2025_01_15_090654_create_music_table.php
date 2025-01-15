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
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index()->constrained()->nullOnDelete();
            $table->foreignId('artist_id')->index()->constrained()->nullOnDelete();
            $table->foreignId('user_id')->index()->nullable()->constrained()->nullOnDelete();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('audio')->nullable();
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('downloads')->default(0);
            $table->unsignedBigInteger('favorites')->default(0);
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music');
    }
};
