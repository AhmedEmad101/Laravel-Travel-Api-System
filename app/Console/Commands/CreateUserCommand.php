<?php

namespace App\Console\Commands;

use App\Models\Roles;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user['name'] = $this->ask('Name of the new user');
        $user['email'] = $this->ask('email of the new user');
        $user['password'] = $this->ask('password of the new user');
        $roles = Roles::pluck('Name')->toArray();
        $roleName = $this->choice('Role of the user',$roles,default:1);
        $role = Roles::where('Name',$roleName)->first();
        if(!$role)
        {
            $this->error('Role not found');
            return -1;
        }
        DB::transaction(function() use ($user,$role) {
            $user['password'] = Hash::make($user['password']);
            $NewUser = User::create($user);
        });

       // $NewUser->roles()->attach($role->id);


        $this->info('User'.$user['name'].'is created successfully with email '.$user['email'] );
    }
}
