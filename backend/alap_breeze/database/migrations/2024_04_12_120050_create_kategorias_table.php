<?php

use App\Models\Kategoria;
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
        Schema::create('kategorias', function (Blueprint $table) {
            $table->id();
            $table->string('kat_nev');
            $table->timestamps();
        });

        Kategoria::create([
            'kat_nev' => 'főétel'
        ]);
        Kategoria::create(['kat_nev' => 'leves']);
        Kategoria::create(['kat_nev' => 'édesség']);
        Kategoria::create(['kat_nev' => 'saláta']);

    }


  


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategorias');
    }
};
