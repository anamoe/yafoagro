<?php

use App\Models\Kontak;
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
        Schema::create('kontaks', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('judul');
            $table->longText('isi');
            $table->string('foto')->nullable();
            $table->string('username_sosmed')->nullable();
            $table->timestamps();
        });

        Kontak::create([
            'type'=>'tentangkami',
            'judul'=>'TENTANG KAMI',
            'isi'=>'PT. Yafo Agro Indonesia adalah perusahaan agribisnis yang berkomitmen pada praktik ekonomi hijau Menyediakan produk dan jasa agrikultur yang berkualitas dan berkelanjutan, untuk menciptakan nilai tambah kepada seluruh pemangku kepentingan',
            'foto'=>'tentangkami.jpg'
        ]);
        Kontak::create([
            'type'=>'beranda',
            'judul'=>'PT. Yafo Agro Indonesia',
            'isi'=>'GREEN PROPERTY',
            'foto'=>'LOGO YAFO hijau.png'
        ]);
        Kontak::create([
            'type'=>'tiktok',
            'judul'=>'TIKTOK',
            'isi'=>'https://www.tiktok.com/@yafoagro_indonesia?_t=8mkX44rvTfT&_r=1',
            'username_sosmed'=>'@yafoagro_indonesia',
        ]);
        Kontak::create([
            'type'=>'instagram',
            'judul'=>'INSTAGRAM',
            'isi'=>'https://www.instagram.com/yafoagroindonesia/?igsh=OGlreHNja2E2cWNl',
            'username_sosmed'=>'@yafoagroindonesia',
        ]);
        Kontak::create([
            'type'=>'email',
            'judul'=>'EMAIL',
            'isi'=>' yafoagroindonesia@gmail.com',
        ]);
        Kontak::create([
            'type'=>'lokasi',
            'judul'=>'LOKASI',
            'isi'=>'Paras Tembok, Jambewangi, Kec. Sempu, Kabupaten Banyuwangi, Jawa Timur 68468',
        ]);
        Kontak::create([
            'type'=>'no_telp',
            'judul'=>'No. Telp',
            'isi'=>'+62',
        ]);
        Kontak::create([
            'type'=>'maps',
            'judul'=>'MAPS',
            'isi'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.280602053468!2d114.1486929!3d-8.2748455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd153abbaa594f1%3A0x14c30e5e1ba5d7ba!2sPUSAT%20BUDIDAYA%20%26%20EDUKASI%20TALAS%20PRATAMA%20YAFO%20AGRO%20INDONESIA!5e0!3m2!1sid!2sid!4v1717048949141!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
        ]);
        Kontak::create([
            'type'=>'visi',
            'judul'=>'VISI',
            'isi'=>'Menjadi pionir dalam membentuk masa depan berkelanjutan dengan menyediakan produk pertanian berkualitas tinggi mendorong perubahan positif, serta menciptakan harmoni antara manusia dan lingkungan',
         
        ]);
        Kontak::create([
            'type'=>'misi',
            'judul'=>'MISI',
            'isi'=>'Menyediakan produk pertanian organik dan berkelanjutan dengan teknologi modern, mempromosikan keberlanjutan dan keberagaman dalam sistem pertanian, serta memberdayakan petani lokal.',
           
        ]);
        Kontak::create([
            'type'=>'misi',
            'judul'=>'MISI',
            'isi'=>'Berkontribusi pada pembangunan komunitas lokal dengan memberikan pelatihan, pengetahuan, dan peluang pekerjaan, serta berkolaborasi dengan pihak-pihak terkait untuk meningkatkan kesejahteraan masyarakat setempat.',
            
        ]);
        Kontak::create([
            'type'=>'misi',
            'judul'=>'MISI',
            'isi'=>'Membangun kemitraan strategis dengan perusahaan, organisasi, dan pemerintah di tingkat lokal maupun internasional untuk bersama-sama menghadirkan solusi berkelanjutan dan mendukung perubahan positif dalam skala yang lebih luas.',
         
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontaks');
    }
};
