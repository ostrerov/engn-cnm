<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('numbers', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('owner');
            $table->foreignId('operator_id')->index()->constrained();
            $table->smallInteger('disabled');
            $table->foreignId('tariff_id')->constrained();
            $table->foreignId('personal_account_id')->index()->constrained();
            $table->integer('created_at');
            $table->integer('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('numbers');
    }
};
