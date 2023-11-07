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
        Schema::create('sinistres', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('policy_id')->unsigned();
            $table->foreign('policy_id')->references('id')->on('policies')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('sinistre_num')->unique();
            $table->string('immatriculation')->unique();
            $table->string('mark');
            $table->string('power');
            $table->string('usage');
            $table->string('zone');
            $table->integer('ptac');
            $table->date('date_visite');
            $table->string('immatriculation_adv')->unique();
            $table->string('mark_adv');
            $table->string('police_num');
            $table->string('insure_adv');
            $table->string('zone_adv');
            $table->date('date_v_adv');
            $table->string('name_c');
            $table->string('link_insure');
            $table->string('age_c');
            $table->string('cat');
            $table->string('num_date');
            $table->string('capacity');
            $table->string('name_c2');
            $table->string('activity');
            $table->string('age_c2');
            $table->string('passager');
            $table->timestamp('date_h')->useCurrent();
            $table->string('lieu');
            $table->string('venant');
            $table->string('allant');
            $table->text('circonstance');
            $table->text('croquis');
            $table->string('temoins');
            $table->string('name_adv');
            $table->string('adresse');
            $table->string('name_c_adv');
            $table->string('permis');
            $table->string('del_date_adv');
            $table->string('capacity_adv');
            $table->text('corporeil');
            $table->text('corporeil_adv');
            $table->text('materiel');
            $table->text('materiel_adv');
            $table->string('vehicule_v');
            $table->string('vehicule_v_adv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sinistres');
    }
};
