<?php

namespace App\Providers;

use App\Models\WpFooter;
use App\Models\WpHeader;
use App\Models\WpMedsos;
use App\Models\WpProfil;
use App\Models\WpGaleriFoto;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CostumProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $profil = WpProfil::where('opd_id', 567)->where('flag_erase', 1)->first();
            $footer = WpFooter::where('opd_id', 567)->where('flag_erase', 1)->first();
            $opd = WpHeader::where('opd_id', 567)->first();
            $medsos = WpMedsos::where('opd_id', 567)->first();
            $galeri = WpGaleriFoto::where('opd_id', 567)->where('flag_erase',1)->where('kategori',1)->orderByDesc('id')->take(6)->get();

            $view->with('profil', $profil);
            $view->with('footer', $footer);
            $view->with('opd', $opd);
            $view->with('medsos', $medsos);
            $view->with('galeri', $galeri);
        });
    }
}
