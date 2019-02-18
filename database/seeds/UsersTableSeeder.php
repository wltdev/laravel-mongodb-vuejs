<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name'     => 'Administrador',
            'email'    => 'admin@email.com',
            'password' => bcrypt('admin'),
        ];
        $user = User::create($user);

        // Associa a uma role:
        if(Schema::hasTable('roles')){
        	// busca a primeira role e associa:
        	$role = Role::orderBy('id')->first();
        	if($role !== null){
        		$user->assignRole($role->name);
        	}
        }
    }
}
