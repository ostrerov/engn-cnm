<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('personal_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index()->constrained();
            $table->foreignId('operator_id')->index()->constrained();
            $table->string('number');
            $table->foreignId('company_id')->index()->constrained();
            $table->integer('created_at');
            $table->integer('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personal_accounts');
    }
};
