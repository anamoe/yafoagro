<?php

use App\Models\ProfilMitra;
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
        Schema::create('profil_mitras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nik');
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->string('alamat');
            $table->bigInteger('kode_pos');
            $table->string('ahli_waris');
            $table->string('no_hp',15);
            $table->string('no_rekening',20);
            $table->string('nama_rekening');
            $table->integer('luas_lahan');
            $table->integer('bibit');
            $table->bigInteger('kemitraan');
            $table->string('bukti_transfer')->nullable();
            $table->timestamps();
        });

        ProfilMitra::create([
            'user_id'=>2,
            'nik'=>'3131313',
            'tgl_lahir'=>'2020-10-02',
            'tempat_lahir'=>'banyuwangi',
            'alamat'=>'banyuwangi saja',
            'kode_pos'=>'685413',
            'ahli_waris'=>'akulah',
            'no_hp'=>'081319083013',
            'nama_rekening'=>'anam',
            'no_rekening'=>'13131',
            'luas_lahan'=>'80',
            'bibit'=>'2000',
            'kemitraan'=>'5000000',
            'bukti_transfer'=>'transfer.jpg',




        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_mitras');
    }
};
