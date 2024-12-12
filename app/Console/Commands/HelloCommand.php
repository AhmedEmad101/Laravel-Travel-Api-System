<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use PhpParser\Node\Expr\Print_;
use Illuminate\Support\Str;

class HelloCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:hello-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       User::create(
        [
            'name'=>'Ahmedkaka',
            'email'=>'Omdadd@email.com',
            'password'=>'123456'
        ]
       )
       ;
    }
}
