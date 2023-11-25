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
        Schema::create('user_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('from_user_id');
            $table->foreignId('recipient_user_id');
            $table->foreignId('item_id');
            $table->boolean('is_redeemed');
            $table->boolean('is_gifted');
            $table->text('qr_code');
            $table->datetimes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_items');
    }
};
