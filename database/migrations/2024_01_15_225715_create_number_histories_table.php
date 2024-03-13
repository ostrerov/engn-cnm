<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('number_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('number_id')->index()->constrained();
            $table->foreignId('operator_id')->index()->constrained();
            $table->string('old_data')->nullable();
            $table->string('new_data')->nullable();
            $table->integer('created_at');
            $table->integer('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('number_histories');
    }
};
