<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class SiteController extends Controller
{

    public function __construct()
    {

        $siteconfig =  Cache::remember('siteconfig', 15000000000000, function () {
            return DB::table("site_config")->get()[0];
        });

        $userarr = Cache::remember('user', 15000000000000, function () {
            return DB::table("kullanici_bilgi")->get()[0];
        });


        View::share("pagetitle", "Web Developer");
        View::share("siteconfig", $siteconfig);
        View::share("user", $userarr);
    }

    public function home()
    {

        $blogdata = DB::table("blog")->select(DB::raw("DATE_FORMAT(KAYIT_ZAMANI,'%d.%m.%Y')as KAYIT_ZAMANI"), "ID", "BASLIK", "OZET", "KAPAK_PATH", "BASLIK_SLUG")->get();

        View::share("blog", $blogdata);
        return view('page.home');
    }

    public function about()
    {
        View::share("pagetitle", " Hakkımda");
        return view('page.about');
    }

    public function blog()
    {

        $data = DB::table("blog")->select(DB::raw("DATE_FORMAT(KAYIT_ZAMANI,'%d.%m.%Y')as KAYIT_ZAMANI"), "ID", "BASLIK", "OZET", "KAPAK_PATH", "BASLIK_SLUG")->get();

        View::share("pagetitle", "Blog");
        View::share("blog", $data);
        return view('page.blog');
    }

    public function blogdetay($slug)
    {

        $data = DB::table("blog")->select("ICERIK", DB::raw("DATE_FORMAT(KAYIT_ZAMANI,'%d.%m.%Y')as KAYIT_ZAMANI"), "ID", "BASLIK", "OZET", "KAPAK_PATH", "BASLIK_SLUG")->where("BASLIK_SLUG", $slug)->get();

        View::share("arr", $data[0]);
        View::share("pagetitle", $data[0]->BASLIK . " - Blog");
        return view("page.blogdetay");
    }

    public function iletisim()
    {
        View::share("pagetitle", "- İletişim");
        return view("page.iletisim");
    }
    public function sitemap()
    {
        $url = url('');
        $blog = DB::select("SELECT CONCAT('<url><loc>$url/', 'blog' ,'/', BASLIK_SLUG, '</loc><lastmod>', DATE_FORMAT(CURDATE(),'%Y-%m-%d') , '</lastmod><changefreq>hourly</changefreq><priority>1</priority></url> ') AS xmlurl FROM blog");

        View::share("blog", $blog);
        return response()->view('page.sitemap')->header('Content-Type', 'text/xml');
    }
}
