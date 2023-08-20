<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->enum('state', ['PUBLISHED', 'DELETED', 'ARCHIVED']);
            $table->unsignedBigInteger('board_id');
            $table->string('category_id', 9)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('title', 100);
            $table->text('content');
            $table->softDeletes();
            $table->timestamp('recovered_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
