<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('race', function (Blueprint $table) {
            $table->increments('id_race');
            $table->string('name', 50);
            $table->integer('age_min');
            $table->integer('age_max');
            $table->integer('height_min');
            $table->integer('height_max');
            $table->integer('destiny');
            $table->integer('resilience');
            $table->integer('extra');
            $table->integer('movement');
            $table->timestamps();
        });

        DB::table('race')->insert([
            [
                'id_race' => 1,
                'name' => 'Humano',
                'age_min' => 16,
                'age_max' => 25,
                'height_min' => 155,
                'height_max' => 206,
                'destiny' => 2,
                'resilience' => 1,
                'extra' => 3,
                'movement' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 2,
                'name' => 'Enano',
                'age_min' => 25,
                'age_max' => 115,
                'height_min' => 132,
                'height_max' => 160,
                'destiny' => 0,
                'resilience' => 2,
                'extra' => 2,
                'movement' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 3,
                'name' => 'Halfing',
                'age_min' => 20,
                'age_max' => 65,
                'height_min' => 97,
                'height_max' => 124,
                'destiny' => 0,
                'resilience' => 2,
                'extra' => 3,
                'movement' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 4,
                'name' => 'Alto elfo',
                'age_min' => 40,
                'age_max' => 130,
                'height_min' => 183,
                'height_max' => 211,
                'destiny' => 0,
                'resilience' => 0,
                'extra' => 2,
                'movement' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 5,
                'name' => 'Elfo silvano',
                'age_min' => 40,
                'age_max' => 130,
                'height_min' => 183,
                'height_max' => 211,
                'destiny' => 0,
                'resilience' => 0,
                'extra' => 2,
                'movement' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('race');
    }
}
?>