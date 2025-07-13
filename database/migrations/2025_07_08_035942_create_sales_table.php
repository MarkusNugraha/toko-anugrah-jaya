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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained('customers')->onDelete('cascade');
            $table->string('invoice_number');
            $table->date('invoice_date');
            $table->decimal('total_amount', 15, 2); // total tagihan pembayaran
            $table->decimal('amount_paid', 15, 2); // pembayaran
            $table->decimal('change_due', 15, 2); // kembalian
            $table->string('payment_method');
            $table->string('notes')->nullable();
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
