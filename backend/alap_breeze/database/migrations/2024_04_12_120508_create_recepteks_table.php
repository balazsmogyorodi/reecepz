<?php

use App\Models\Receptek;
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
    public function up()
    {
        Schema::create('recepteks', function (Blueprint $table) {
            $table->id('id');
            $table->string('nev');
            $table->foreignId('kat_id')->references('id')->on('kategorias');
            $table->string('kep_eleresi_ut');
            $table->string('leiras');
            $table->timestamps();
        });

        Receptek::create(['nev' => 'hús leves', 'kat_id' => 2, 'kep_eleresi_ut' => 'nincs', 'leiras' => 'fbfgbrtgbtf']);
        Receptek::create(['nev' => 'gulyás leves', 'kat_id' => 2, 'kep_eleresi_ut' => 'nincs', 'leiras' => 'fhthththtjn']);
        Receptek::create(['nev' => 'csoki torta', 'kat_id' => 3, 'kep_eleresi_ut' => 'nincs', 'leiras' => 'adcdvdv vfd']);
        Receptek::create(['nev' => 'cézár saláta', 'kat_id' => 4, 'kep_eleresi_ut' => 'nincs', 'leiras' => 'sfdgfadgrfrg']);
 Receptek::create(['nev' => 'saláta', 'kat_id' => 4, 'kep_eleresi_ut' => 'nincs', 'leiras' => 'sfdgfadnznbng']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recepteks');
    }
};
