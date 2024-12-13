<?php
namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Post;
use App\Models\Page; // Pageモデルをインポート
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $sitemap = App::make("sitemap");

            // トップページ
            $sitemap->add(URL::to('/'), now(), '1.0', 'always');

            // 静的ページの追加
            $sitemap->add(URL::to('/privacy-policy'), now(), '0.5', 'yearly');
            $sitemap->add(URL::to('/contact'), now(), '0.5', 'yearly');

            // DBのデータを取得しaddしていく
            $posts = Post::query()->orderBy('updated_at', 'desc')->get();
            foreach ($posts as $post) {
                $sitemap->add(URL::to('/detail?id=' . $post->id), $post->updated_at, '0.8', 'monthly');
            }

            // 他のページも追加
            $pages = Page::all();
            foreach ($pages as $page) {
                $sitemap->add(URL::to($page->slug), $page->updated_at, '0.8', 'monthly');
            }

            // XMLファイルで出力
            $sitemap->store('xml', 'sitemap');

            // ログ出力
            Log::info('Sitemap generated successfully.');
        })->daily(); // 毎日実行
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}