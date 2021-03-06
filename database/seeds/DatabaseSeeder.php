<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('users')->delete();
        DB::table('tasks')->delete();

        // =========================== CREATE USERS ============================
        $users = [
            ['name' => 'Bert',   'email' => 'bert@user.com',   'password' => Hash::make('secret') ],
            ['name' => 'Ernie',  'email' => 'ernie@user.com',  'password' => Hash::make('secret') ],
            ['name' => 'Calvin', 'email' => 'calvin@user.com', 'password' => Hash::make('secret') ],
            ['name' => 'Hobbes', 'email' => 'hobbes@user.com', 'password' => Hash::make('secret') ],
            ['name' => 'admin',  'email' => 'admin@user.com',  'password' => Hash::make('secret') ],
        ];

        foreach ($users as $user)
        {
            User::create($user);
        }

        $currentUser = User::where('name', '=', 'Bert')->first();
        $currentUser->tasks()->create(['description' => 'The First Task']);
        $currentUser->tasks()->create(['description' => 'The Second Task']);
    }
}
