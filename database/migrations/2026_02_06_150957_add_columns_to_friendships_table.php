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
        Schema::table('friendships', function (Blueprint $table) {

        $table->foreignId('sender_id')
            ->constrained('users')
            ->cascadeOnDelete();

        $table->foreignId('receiver_id')
            ->constrained('users')
            ->cascadeOnDelete();

        $table->string('status')->default('pending');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('friendships', function (Blueprint $table) {
            $table->dropColumn(['sender_id', 'receiver_id', 'status']);
        });
    }

};
