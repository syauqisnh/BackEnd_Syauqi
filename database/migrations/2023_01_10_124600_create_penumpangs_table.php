<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penumpang', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('umur');
        });
        DB::table('penumpang')->insert(
            array(
                [
                    'nama' => 'Syauqi Nur Hibatullah', 'alamat' => "bengkulu", 'umur' => "19 Tahun"
                ],
                [
                    'nama' => 'Nahlin Norsalia', 'alamat' => "madiun", 'umur' => "21 Tahun"
                ]
            ),

        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penumpang');
    }
};
