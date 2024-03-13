<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('created_at');
            $table->integer('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('operators');
    }
};
