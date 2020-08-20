<?php

namespace App\Console\Commands\Crawler;

use Illuminate\Console\Command;

class MovieCrawler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:movie';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Movie Crawler';

    /**
     * Create a new command instance.
     *
     * @return void
     */
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
        //
    }
}
