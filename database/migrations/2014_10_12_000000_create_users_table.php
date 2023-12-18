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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('secondary_email')->nullable()->unique();
            $table->string('password');
            $table->string('address');
            $table->string('suite')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('zip_code');
            $table->string('phone_number');
            $table->string('fax')->nullable();
            $table->string('home_number')->nullable();
            $table->string('is_verified')->default(0);
            $table->string('type');
            $table->string('agency')->nullable();
            $table->string('arc')->nullable();
            $table->text('remarks')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
