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
            $table->string('nama_tanaman');
            $table->string('no_sertifikat');
            $table->string('no_registrasi');
            $table->string('kode_area');
            $table->integer('jumlah_bibit');
            $table->string('alamat_cluster');
            $table->timestamps();
        });

        Tanaman::create([
            'nama_tanaman'=>'Talas',
            'no_sertifikat'=>'198391893',
            'no_registrasi'=>'012121',
            'kode_area'=>'020',
            'jumlah_bibit'=>'200',
            'alamat_cluster'=>'banyuwangi'
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
