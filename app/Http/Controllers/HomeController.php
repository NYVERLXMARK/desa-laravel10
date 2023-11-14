<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WpBerita;
use App\Models\WpGaleriFoto;


class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    function tentang() {
        return view('profil.tentang');
    }

    function visiMisi() {
        return view('profil.visiMisi');
    }

    function maklumat() {
        return view('profil.maklumat');
    }

    function selayangPandang() {
        return view('profil.selayangPandang');
    }

    function strukturOrganisasi() {
        return view('profil.struktur');
    }

    function pegawai() {
        return view('profil.pegawai');
    }

    function berita() {
        // $data['list_berita'] = WpBerita::all();
        $data['list_berita'] = WpBerita::where('opd_id', 533)->where('flag_erase',1)->get();
        return view('publikasi.berita', $data);
    }

    function artikel() {
        return view('publikasi.artikel');
    }

    function standarPelayanan() {
        return view('publikasi.standarPelayanan');
    }

    function serviceDelivery() {
        return view('publikasi.service');
    }

    function dokumenPublik() {
        return view('publikasi.dokumenPublik');
    }

    function dokumenKinerja() {
        return view('publikasi.dokumenKinerja');
    }

    function laporanSkm() {
        return view('ruang-publik.laporanSKM');
    }

    function tindakLanjutSkm() {
        return view('ruang-publik.tindakLanjutSKM');
    }

    function ppid() {
        return view('ppid.ppid');
    }

    function informasi() {
        return view('informasi.informasi');
    }

    function galeriFoto() {
        return view('galeri.foto');
    }

    function galeriVidio() {
        $data['list_galeri'] = WpGaleriFoto::where('opd_id', 567)->where('flag_erase',1)
        ->where('kategori',1)
        ->orderByDesc('id')->get();
        return view('galeri.video',$data);
    }

    function kontak() {
        return view('kontak.kontak');
    }

    function faq() {
        return view('faq.faq');
    }

    function informasiPengaduan() {
        return view('pengaduan.pengaduan');
    }

}
