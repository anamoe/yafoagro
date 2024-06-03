<?php

use App\Models\Tanaman;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tanamen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nama_tanaman');
            $table->string('no_sertifikat');
            $table->string('no_registrasi');
            $table->string('no_approval');
            $table->string('no_id_pemilik');
            $table->string('kode_area');
            $table->integer('jumlah_bibit');
            $table->string('alamat_cluster');
            $table->integer('luas_lahan');
            $table->bigInteger('kemitraan');
            $table->string('bukti_transfer')->nullable();
            $table->timestamps();
        });

        Tanaman::create([
            'user_id'=>'2',
            'nama_tanaman'=>'Talas',
            'no_sertifikat'=>'198391893',
            'no_registrasi'=>'012121',
            'kode_area'=>'020',
            'jumlah_bibit'=>'200',
            'alamat_cluster'=>'banyuwangi',
            'no_approval'=>'112a',
            'no_id_pemilik'=>'11a',
            'luas_lahan'=>'900',
            'kemitraan'=>'50000',
            'bukti_transfer'=>'transfer.jpg',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanamen');
    }
};
