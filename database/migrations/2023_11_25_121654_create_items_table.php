<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->string('image');
            $table->foreignId('partner_id');
            $table->datetimes();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('items');
    }
};
