<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;


class YoutubeMovie extends Command
{
    protected $signature = 'crawler:youtube-movie';
    protected $description = 'Youtube Movie Crawler';

    /************ public variable ***********/
    
    /************ private variable ************/
    private $protocol = "https://";
    private $domain = "www.youtube.com";

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new Client();
        $url = $protocol.$description;
        $document = $client->request
    }
}
