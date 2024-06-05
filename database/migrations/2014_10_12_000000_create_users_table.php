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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('surname');
            $table->string('password');
            $table->boolean('admin')->default(0);
            $table->string('phone');
            $table->string('street');
            $table->string('city');
            $table->string('country');
            $table->string('zipcode');
            $table->string('business_name');
            $table->string('tax_id');
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
