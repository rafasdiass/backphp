<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserCommand extends Command
{
    protected $signature = 'user:create {email} {password}';
    protected $description = 'Create a new user';

    public function handle()
    {
        $user = new User();
        $user->email = $this->argument('email');
        $user->password = Hash::make($this->argument('password'));
        $user->save();

        $this->info('User created successfully.');
    }
}
