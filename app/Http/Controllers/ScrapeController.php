<?php

namespace App\Http\Controllers;

use App\Post;
use Goutte\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class ScrapeController extends Controller
{
    public function scrape()
    {
        if(is_null(Post::first()))
        {
            $page_limit = 5;
            $link = [];
    
            for ($i=1; $i <= $page_limit; $i++) { 
                $link[] = 'https://vatvostudio.vn/category/tin-tuc-moi-nhat/page/'.$i.'/';
            }
    
            foreach ($link as $url) {
                sleep(mt_rand(1, 3));
                $client  = new Client();
                $crawler = $client->request('GET', $url);
                
                $crawler->filter('.posts-list .list-item')->each(
                    function (Crawler $node) {
                        $contentUrl = $node->filter('.post__thumb a')->attr('href');
                        $this->childCrawl($contentUrl);
                    }
                );
            }
            return redirect()->route('posts')->with('success', 'Crawl dữ liệu thành công');
        }
        abort(404);
    }

    public function childCrawl($url)
    {
        $client  = new Client();
        $crawler = $client->request('GET', $url);
        $crawler->filter('.site-content')->each(function (Crawler $node) 
            {
                if ($node->filter('.entry-thumb img')->count() > 0 ) {

                    $image = $node->filter('.entry-thumb img')->attr('data-src');
                }else{

                    $image = null;
                }

                $title       = $node->filter('h1')->text();
                $summary     = $node->filter('p')->text();
                $description = $node->filter('.single-body')->text();

                Post::create([
                    'image'       => $image,
                    'title'       => $title,
                    'summary'     => $summary,
                    'description' => $description
                ]);
            }
        );
    }
}
