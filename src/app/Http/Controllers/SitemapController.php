<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Models\Post;

class SitemapController extends Controller {
    public function index(Request $request) {
        $sitemap = App::make("sitemap");

        // トップページ
        $sitemap->add(URL::to('/'), now(), '1.0', 'always');

        // 静的ページの追加
        $sitemap->add(URL::to('/privacy-policy'), now(), '0.5', 'yearly');
        $sitemap->add(URL::to('/contact'), now(), '0.5', 'yearly');
        $sitemap->add(URL::to('/history'), now(), '0.5', 'yearly');
        $sitemap->add(URL::to('/level'), now(), '0.5', 'yearly');
        $sitemap->add(URL::to('/magic'), now(), '0.5', 'yearly');
        $sitemap->add(URL::to('/gold'), now(), '0.5', 'yearly');
        $sitemap->add(URL::to('/jsdesign'), now(), '0.5', 'yearly');
        $sitemap->add(URL::to('/hcbackvideo'), now(), '0.5', 'yearly');
        $sitemap->add(URL::to('/gpanime'), now(), '0.5', 'yearly');
        $sitemap->add(URL::to('/bs5website'), now(), '0.5', 'yearly');
        $sitemap->add(URL::to('/blog'), now(), '0.5', 'yearly');

        // DBのデータを取得しaddしていく
        $posts = Post::query()->orderBy('updated_at', 'desc')->get();
        foreach ($posts as $post) {
            $sitemap->add(URL::to('/detail?id=' . $post->id), $post->updated_at, '0.8', 'monthly');
        }

        // 出力
        return $sitemap->render('xml');
        // XMLファイルで出力する場合
        // $sitemap->store('xml', 'mysitemap');
    }
}
