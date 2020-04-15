<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker\Factory;

class GeneratorVisaCard extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cartao:visa';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gere um número de cartão VISA aleatoriamente';

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
        $cartao = $faker->creditCardNumber('Visa');
        var_dump($cartao);
    }
}
