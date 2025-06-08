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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('userID')->nullable();
            $table->string('companyName')->nullable();
            $table->string('companyCategory');
            $table->string('url');
            $table->string('weburl')->nullable();
            $table->string('address');
            $table->string('district');
            $table->string('city');
            $table->string('province');
            $table->string('state');
            $table->date('join');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
