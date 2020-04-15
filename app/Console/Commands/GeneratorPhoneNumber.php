<?php

namespace App\Console\Commands;

use Faker\Factory;
use Illuminate\Console\Command;

class GeneratorPhoneNumber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pessoa:telefone';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'gere um numero de telefone aleatoriamente';

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
        var_dump($faker->phoneNumber);
    }
}
