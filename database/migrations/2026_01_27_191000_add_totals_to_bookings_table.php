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
        Schema::table('bookings', function (Blueprint $table) {
            $table->decimal('room_price', 10, 2)->default(0)->after('guests');
            $table->decimal('food_total', 10, 2)->default(0)->after('room_price');
            $table->decimal('grand_total', 10, 2)->default(0)->after('food_total');
            $table->string('payment_method')->default('cash_on_arrival')->after('grand_total');
            $table->string('payment_status')->default('pending')->after('payment_method');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn(['room_price', 'food_total', 'grand_total', 'payment_method', 'payment_status']);
        });
    }
};
