<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('board_authorities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('board_id');
            $table->enum('authority', ['OWNER', 'ADMIN', 'MEMBER', 'GUEST'])->default('READ');
            $table->unsignedTinyInteger('user_id')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['board_id', 'authority', 'user_id']);
            $table->foreign('board_id')->references('id')->on('boards');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('board_authorities');
    }
};
