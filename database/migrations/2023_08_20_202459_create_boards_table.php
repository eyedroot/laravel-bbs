<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->enum('state', ['PUBLIC', 'PRIVATE', 'ANONYMOUS', 'RESTRICTED'])->default('PRIVATE');
            $table->string('name', 50);
            $table->string('description', 100)->nullable();
            $table->string('slug', 50)->unique();
            $table->json('metadata')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('boards');
    }
};
