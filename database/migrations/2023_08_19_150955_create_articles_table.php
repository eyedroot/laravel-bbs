<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->enum('state', ['PUBLISHED', 'DELETED', 'HIDDEN'])->default('HIDDEN');
            $table->unsignedBigInteger('board_id');
            $table->string('category_id', 9)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('title', 100);
            $table->text('content');
            $table->string('slug', 100)->unique();
            $table->json('metadata')->nullable();
            $table->softDeletes();
            $table->timestamp('recovered_at')->nullable();
            $table->timestamps();

            $table->foreign('board_id')->references('id')->on('boards');
            $table->foreign('category_id')->references('id')->on('board_categories');
            $table->foreign('user_id')->references('id')->on('users');
            $table->index('title');

            if (DB::getDatabaseName() !== ':memory:') {
                $table->fullText('title');
            }
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
