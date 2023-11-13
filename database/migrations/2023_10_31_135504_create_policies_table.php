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
            $table->string('business_type');
            $table->string('class');
           // $table->string('policy_type');

            //client
            $table->unsignedBigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            //insurer Details
            $table->string('insurer');
            $table->string('insurer_branch');
            $table->string('insurance_plan');

            //policy_details
            // $table->string('client_num_ref');
            //$table->integer('note_num');
            $table->string('policy_number');
            $table->date('start_date');
            $table->date('expery_date');
           // $table->date('date_due');
           // $table->char('renewable_flag');

            //policy amount
            $table->integer('sum_insurer');
            $table->integer('discount');
            $table->integer('claim_bonus');
            $table->integer('base_premium');
            $table->integer('other_premium');
            $table->integer('total_premium');
            $table->integer('gst');
            $table->integer('premium_gst');

            //car information
            $table->string('immatriculation');
            $table->string('mark');
            $table->string('power');
            $table->string('genre');
            $table->string('nb_place');
            $table->string('cat');
            $table->string('zone');
            $table->string('serie');
            $table->date('date_mc');
            $table->string('val_neuve');
            $table->string('val_venale');
            $table->string('val_acc');
            $table->string('attestation');
            $table->string('carte_rose');
            $table->integer('ptac');
            $table->string('inscription_number');

            //policy Additional details
            $table->date('issue_date');
            $table->string('source');
           // $table->string('POS')->default('INOV');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('location')->nullable();
            $table->string('previous_insurer')->nullable();
            $table->string('previous_insurance_plan')->nullable();
            $table->string('previous_source')->nullable();
            $table->string('previous_POS')->nullable();
            $table->string('co_generation');
            $table->text('deductible_details')->nullable();
            $table->text('additional_info')->nullable();
           // $table->string('file_type')->nullable();
           // $table->string('policy_status')->default('inforce');

            //payment details
            $table->string('payment_type');
            $table->string('ref_num');
            $table->string('bank_name');
            $table->date('payment_date');
            $table->integer('amount');
           // $table->text('remarks')->nullable();
            $table->date('collected_date');
            $table->timestamps();
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
