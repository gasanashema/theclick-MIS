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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('set null');

            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('service_id')->references('id')->on('services')
            ->onUpdate('cascade')->onDelete('set null');

            $table->unsignedBigInteger('domain_id')->nullable();
            $table->foreign('domain_id')->references('id')->on('domains')
            ->onUpdate('cascade')->onDelete('set null');

            $table->unsignedBigInteger('hosting_id')->nullable();
            $table->foreign('hosting_id')->references('id')->on('hostings')
            ->onUpdate('cascade')->onDelete('set null');

            $table->string('domain_name');
            $table->string('ns1');
            $table->string('ns2');
            $table->string('ns3');
            $table->string('ns4');
            $table->integer('reg_period');
            $table->date('expiration_date');
            $table->integer('subtotal');
            $table->integer('tax');
            $table->integer('total');
            $table->string('order_status');
            $table->string('error');
            $table->timestamps();
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
