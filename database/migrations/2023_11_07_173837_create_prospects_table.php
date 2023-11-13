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
        Schema::create('prospects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->string('business_type')->nullable();
            $table->string('class')->nullable();
            $table->string('policy_type')->nullable();
            $table->string('prospect_owner')->nullable();
            $table->string('location')->nullable();
            $table->date('lead_date')->nullable();
            $table->date('due_date')->nullable();
            $table->string('classification')->nullable();
            $table->string('proposed_insurer')->nullable();
            $table->string('source')->nullable();
            $table->string('assign_group')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prospects');
    }
};
