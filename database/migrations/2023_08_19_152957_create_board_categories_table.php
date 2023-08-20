<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('board_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('board_id');
            $table->string('code', 9);
            $table->json('names');
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['board_id', 'code']);
            $table->foreign('board_id')->references('id')->on('boards');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
