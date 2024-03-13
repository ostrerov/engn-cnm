<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('tax_id');
            $table->foreignId('operator_id')->index()->constrained();
            $table->integer('created_at');
            $table->integer('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
