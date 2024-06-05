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
        Schema::create('hostings', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->string('space');
            $table->string('bandwidth');
            $table->integer('ftp_accounts');
            $table->integer('email_accounts');
            $table->integer('max_quota_email');
            $table->integer('max_email_list');
            $table->integer('subdomains');
            $table->integer('parked_domains');
            $table->integer('addon_domains');
            $table->string('ram');
            $table->string('cpu');
            $table->string('public_ip');
            $table->double('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hostings');
    }
};
