<?php

namespace App\Console\Commands;

use Faker\Factory;
use Illuminate\Console\Command;

class GeneratorCardAmericanExpress extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cartao:amex';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $faker = Factory::create('pt_BR');
        $cartao = $faker->creditCardNumber('American Express');
        var_dump($cartao);
    }
}
