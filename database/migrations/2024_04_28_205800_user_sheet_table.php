<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_sheet', function (Blueprint $table) {
            $table->increments('id_user_sheet');
            $table->string('name');
            $table->integer('id_race');
            $table->integer('id_category');
            $table->integer('id_career_path');
            $table->string('status');
            $table->integer('age');
            $table->integer('height');
            $table->integer('id_hair');
            $table->integer('id_eyes');
            $table->integer('ha_ini');
            $table->integer('hp_ini');
            $table->integer('f_ini');
            $table->integer('r_ini');
            $table->integer('ini_ini');
            $table->integer('ag_ini');
            $table->integer('des_ini');
            $table->integer('i_ini');
            $table->integer('v_ini');
            $table->integer('em_ini');
            $table->integer('ha_imp');
            $table->integer('hp_imp');
            $table->integer('f_imp');
            $table->integer('r_imp');
            $table->integer('ini_imp');
            $table->integer('ag_imp');
            $table->integer('des_imp');
            $table->integer('i_imp');
            $table->integer('v_imp');
            $table->integer('em_imp');
            $table->integer('destiny');
            $table->integer('fortune');
            $table->integer('resilience');
            $table->integer('resolution');
            $table->integer('motivation');
            $table->integer('exp_actual');
            $table->integer('exp_spent');
            $table->integer('exp_total');
            $table->integer('movement');
            $table->integer('walk');
            $table->integer('run');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_sheet');
    }
};