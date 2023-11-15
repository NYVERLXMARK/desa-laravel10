<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Auth;

// All Model
use App\Models\WpArtikel;
use App\Models\WpBerita;
use App\Models\WpDokumen;
use App\Models\WpFooter;
use App\Models\WpGaleriFoto;
use App\Models\WpHeader;
use App\Models\WpInformasi;
use App\Models\WpLayanan;
use App\Models\WpMedsos;
use App\Models\WpProfil;
use App\Models\WpPublikasi;
use App\Models\WpPublikasiDetail;
use App\Models\WpSlider;
use App\Models\WpVidio;
use App\Models\WpFaq;
use App\Models\WpPpid;
use App\Models\WpInformasiPengaduan;
use App\Models\Sintaripegawai;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\simplePaginator;
use GuzzleHttp\Client;



class IndexController extends Controller
{

 function base(){
  $data['list_slider'] = WpSlider::where('opd_id', 567)->where('flag_erase',1)->get();
  $data['list_hero'] = WpProfil::where('opd_id', 567)->where('flag_erase',1)->get();
  $data['list_profil'] = WpProfil::where('opd_id', 567)->where('flag_erase',1)->get();
  $data['list_berita'] = WpBerita::where('opd_id', 567)->where('flag_erase',1)->get();
  $data['list_layanan'] = WpLayanan::where('opd_id', 567)->where('flag_erase',1)->get();
  $data['list_vidio'] = WpVidio::where('opd_id', 567)->where('flag_erase',1)->get();
  $data['list_footer'] = WpFooter::where('opd_id', 567)->where('flag_erase',1)->get();
  $data['list_galeri'] = WpGaleriFoto::where('opd_id', 567)->where('flag_erase',1)->where('kategori',1)->orderByDesc('id')->take(6)->get();

  return view('components.app',$data);
}

public function index(){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['footer'] = WpFooter::where('opd_id', 578)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['slider'] = WpSlider::where('opd_id', 567)->where('flag_erase',1)->first();
 $data['list_slider'] = WpSlider::where('opd_id', 567)->where('flag_erase',1)->get();
 $data['list_hero'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_berita'] = WpBerita::where('opd_id', 578)->where('flag_erase',1)->take(3)->get();
 $data['list_layanan'] = WpLayanan::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_vidio'] = WpVidio::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 578)->where('flag_erase',1)->first();
 $data['list_pegawai'] = Sintaripegawai::where('pegawai_opd_gabung', 578)->where('status','PNS AKTIF')->take(9)->get();
 $data['tentang'] = WpProfil::where('opd_id', 578)->where('flag_erase',1)->first();
 $data['visimisi'] = WpProfil::where('opd_id', 578)->where('flag_erase',1)->first();


 return view('index',$data);
}

function berita(){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['list_hero'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_berita'] = WpBerita::where('opd_id', 578)->where('flag_erase',1)->get();
//  $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->simplePaginate(12);
 $data['list_layanan'] = WpLayanan::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_vidio'] = WpVidio::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 return view('publikasi.berita', $data);

}

function beritaBaca(WpBerita $berita){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['berita'] = $berita;
 $beritaCount = WpBerita::where('id',$berita->id)->first();
  // dd($beritaCount);

 WpBerita::where('id',$berita->id)->update([
  'viewer' => $beritaCount->viewer +1,
]);
 $data['list_berita'] = WpBerita::where('opd_id', 578)->where('flag_erase',1)->get();
 $data['list_lainnya'] = WpBerita::where('opd_id', 578)->where('flag_erase',1)->where('id','!=',$berita->id)->get();
 $data['list_vidio'] = WpVidio::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 return view('publikasi.showBerita',$data);
}

function artikel(){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['list_hero'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_layanan'] = WpLayanan::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_vidio'] = WpVidio::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_artikel'] = WpArtikel::where('opd_id', 533)->where('flag_erase',1)->get();

 return view('publikasi.artikel',$data);
}

function artikelBaca(WpArtikel $artikel){
  $data['artikel'] = $artikel;
  $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
  $data['opd'] = WpHeader::where('opd_id',564)->first();
  $data['list_lainnya'] = WpArtikel::where('opd_id', 564)->where('flag_erase',1)->where('id','!=',$artikel->id)->get();

  $data['list_hero'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['list_profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['list_layanan'] = WpLayanan::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['list_vidio'] = WpVidio::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['list_artikel'] = WpArtikel::where('opd_id', 564)->where('flag_erase',1)->get();

  return view('publikasi.showArtikel',$data);
}

function galeriFoto(){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_galeri'] = WpGaleriFoto::where('opd_id', 567)->where('flag_erase',1)
 ->where('kategori',1)
 ->orderByDesc('id')->get();
 return view('galeri.foto',$data);
}

function serviceDelivery(){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_galeri'] = WpGaleriFoto::where('opd_id', 564)->where('flag_erase',1)
 ->where('kategori',2)
 ->orderByDesc('id')->get();
 $data['publikasi'] = WpPublikasi::where('opd_id', 567)->where('kategori_publikasi',2)->where('flag_erase',1)->get();
 return view('publikasi.service',$data);
}

function galeriVidio(){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_vidio'] = WpVidio::where('opd_id', 533)->where('flag_erase',1)->orderByDesc('id')->get();
 $data['list_galeri'] = WpGaleriFoto::where('opd_id', 567)->where('flag_erase',1)
 ->where('kategori',1)
 ->orderByDesc('id')->get();
 return view('galeri.video',$data);
}

function selayangPandang(){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['list_hero'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_layanan'] = WpLayanan::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_vidio'] = WpVidio::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['selayang'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first('selayang');
 return view('profil.selayangPandang',$data);
}

function tentang(){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['tentang'] = WpProfil::where('opd_id', 578)->where('flag_erase',1)->first();
 return view('profil.tentang',$data);
}

function visiMisi(){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['visimisi'] = WpProfil::where('opd_id', 578)->where('flag_erase',1)->first();
 return view('profil.visiMisi',$data);
}

function maklumat(){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['maklumat'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 return view('profil.maklumat',$data);
}

function dokumenPublik(){
//  $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
//  $data['opd'] = WpHeader::where('opd_id',564)->first();
//  $data['publikasi'] = $publikasi;
//  $data['file'] = WpPublikasiDetail::where('opd_id', 567)->where('publikasi_id',$publikasi->id)->get('file');

 $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_publikasi'] = WpPublikasi::where('opd_id', 567)->where('kategori_publikasi',1)->where('flag_erase',1)->simplePaginate(10);
 return view('publikasi.dokumenPublik',$data);
}

function standarPelayanan(){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['publikasi'] = WpPublikasi::where('opd_id', 567)->where('kategori_publikasi',2)->where('flag_erase',1)->get();
 return view('publikasi.standarPelayanan',$data);
}

function dokumenKinerja(){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['publikasi'] = WpPublikasi::where('opd_id', 567)->where('kategori_publikasi',3)->where('flag_erase',1)->get();
 return view('publikasi.dokumenKinerja',$data);
}

function laporanSkm(){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['publikasi'] = WpPublikasi::where('opd_id', 564)->where('kategori_publikasi',4)->where('flag_erase',1)->get();
 return view('ruang-publik.laporanSKM',$data);
}

function tindakLanjutSkm(){
 $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
 $data['opd'] = WpHeader::where('opd_id',564)->first();

 $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['publikasi'] = WpPublikasi::where('opd_id', 564)->where('kategori_publikasi',5)->where('flag_erase',1)->get();
 return view('ruang-publik.tindakLanjutSKM',$data);
}

function dokumenPublikBaca(WpPublikasi $publikasi){
    $data['publikasi'] = $publikasi;
    $data['list_file'] = WpPublikasiDetail::where('publikasi_id',$publikasi->id)->get();

//   $data['opd'] = WpHeader::where('opd_id',564)->first();

    $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
    $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
    return view('publikasi.showPublikBaca',$data);
}
// function dokumenPublikBaca(WpPublikasi $publikasi)
//   {
//     $data['publikasi'] = $publikasi;
//     // dd($data['publikasi']);
//     $data['list_file'] = WpPublikasiDetail::where('publikasi_id', $publikasi->id)->get();


//     $data['list_berita'] = WpBerita::where('opd_id', 567)->where('flag_erase', 1)->get();
//     $data['list_footer'] = WpFooter::where('opd_id', 567)->where('flag_erase', 1)->get();
//     return view('publikasi.showPublikBaca',$data);
// }

public function strukturOrganisasi(){
  // data wajib
  $data['profil'] = WpProfil::where('opd_id', 567)->where('flag_erase',1)->first();
  $data['opd'] = WpHeader::where('opd_id',564)->first();
  $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
  return view('profil.struktur',$data);
}

function informasi(){
  $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
  $data['opd'] = WpHeader::where('opd_id',564)->first();
  $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();

          // tambahan
  $data['informasi'] = WpInformasi::where('opd_id', 533)->where('flag_erase',1)->get();
  return view('informasi.informasi',$data);
}

function informasiBaca(WpInformasi $informasi){
 $data['opd'] = WpHeader::where('opd_id',564)->first();
 $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
 $data['informasi'] = $informasi;
 $informasiCount = WpInformasi::where('id',$informasi->id)->first();
 $data['list_lainnya'] = WpInformasi::where('opd_id', 564)->where('flag_erase',1)->where('id','!=',$informasi->id)->get();
  // dd($beritaCount);

 WpInformasi::where('id',$informasi->id)->update([
  'viewer' => $informasiCount->viewer +1,
]);
 return view('informasi.showInformasi',$data);
}


function kontak(){
  $data['opd'] = WpHeader::where('opd_id',564)->first();
 $data['footer'] = WpFooter::where('opd_id', 578)->where('flag_erase',1)->first();
//   $data['footer'] = WpHeader::where('opd_id',578)->first();
  $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['list_footer'] = WpFooter::where('opd_id', 578)->where('flag_erase',1)->first();
  return view('kontak.kontak',$data);
}

function pegawai(){
   $data['opd'] = WpHeader::where('opd_id',564)->first();
  $data['footer'] = WpHeader::where('opd_id',564)->first();
  $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['list_pegawai'] = Sintaripegawai::where('pegawai_opd_gabung', 564)
  ->whereIn('status', ["PNS AKTIF", "PPPK"])
  ->get();

  return view('profil.pegawai',$data);
}


function ppid(){
   $data['opd'] = WpHeader::where('opd_id',564)->first();
  $data['footer'] = WpHeader::where('opd_id',564)->first();
  $data['list_berita'] = WpBerita::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['ppid'] = WpPpid::where('opd_id', 564)->first();

  $ppid = $data['ppid'];
    if ($ppid == null) {
      return abort(404);
    }

  return view('ppid.ppid',$data);
}

function developer(){
  $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
  $data['footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->first();
  $data['opd'] = WpHeader::where('opd_id',564)->first();
  $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
  return view('developer', $data);
}

function faq(){
  $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
  $data['footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->first();
  $data['opd'] = WpHeader::where('opd_id',564)->first();
  $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();
  $data['list_faq'] = WpFaq::where('faq_opd', 578)->where('flag_erase',1)->get();
  return view('faq.faq', $data);
}

function informasiPengaduan(){
  $data['profil'] = WpProfil::where('opd_id', 564)->where('flag_erase',1)->first();
  $data['footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->first();
  $data['opd'] = WpHeader::where('opd_id',564)->first();
  $data['list_footer'] = WpFooter::where('opd_id', 564)->where('flag_erase',1)->get();

  $data['pengaduancount'] = WpInformasiPengaduan::where('opd_id', 564)->count();
    $data['pengaduan'] = WpInformasiPengaduan::where('opd_id', 567)->first();

  return view('pengaduan.pengaduan',$data);
}

}
