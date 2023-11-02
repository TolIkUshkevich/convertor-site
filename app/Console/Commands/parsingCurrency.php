<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Http;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Log;

class parsingCurrency extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parsing:currency';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'parsing currency from bank';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $response = Http::get('https://www.cbr-xml-daily.ru/daily_json.js');
        Log::info('response data', ['response' => $response->json()] );
        Log::info('test working log');
        return Command::SUCCESS;
    }
}
