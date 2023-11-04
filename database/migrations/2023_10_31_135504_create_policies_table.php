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
        Schema::create('policies', function (Blueprint $table) {
            $table->id();
            $table->string('policy_number')->unique();
            $table->string('coverage');
            $table->string('beneficiaries');
            $table->decimal('amount_insured', 10, 2);
            $table->decimal('premium', 10, 2);
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('deductible', 10, 2);
            $table->text('special_conditions')->nullable();
            $table->unsignedBigInteger('client_id');
            $table->timestamps();
            $table->string('status')->default('active');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policies');
    }
};
