<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallAdmin2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:admin2';

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
        $user = new User([
            'name' => 'ABC Admin',
            'email' => 'abcd@gmail.com',
            'phone_no' => '6666666666',
            'password' => Hash::make('secret'),
            'user_type' => 1,
        ]);
        if ($user->save()) {
            $this->info('Account Insert Success');
        } else {
            $this->info('Something went wrong!');
        }
        }
    }

