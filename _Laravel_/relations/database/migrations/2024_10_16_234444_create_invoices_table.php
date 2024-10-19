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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->double('value')->default(0);
            $table->unsignedBigInteger('address_id')->nullable();
            $table->timestamps();

            $table->foreign('address_id')->references('id')
                ->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropForeign('address_id');
        Schema::dropIfExists('invoice');
    }
};
