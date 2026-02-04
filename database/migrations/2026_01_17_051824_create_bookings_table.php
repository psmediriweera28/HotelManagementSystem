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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name');
            $table->string('guest_email');
            $table->string('guest_phone')->nullable();
           // $table->foreignId('room_id')->nullable()->constrained('rooms')->nullOnDelete(); later link to rooms
            $table->date('check_in');
            $table->date('check_out');
            $table->unsignedInteger('guests');
            $table->string('status')->default('pending'); //pending/confirmed/cancelled
            $table->string('room_name');
            $table->decimal('room_price', 10, 2)->default(0);
            $table->decimal('food_total', 10, 2)->default(0);
            $table->decimal('grand_total', 10, 2)->default(0);
            $table->string('payment_method')->default('cash_on_arrival');
            $table->string('payment_status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
