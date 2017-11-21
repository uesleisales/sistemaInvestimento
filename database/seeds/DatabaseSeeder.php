<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	
    	User::create([
    		 'cpf'        	=>	'85920220538',
    		 'name'        	=>	'ueslei', 
    		 'phone'        =>	'73988314261',
             'notes'        =>  'Programador web',
    		 'birth'        =>	'1996-02-03',
    		 'gender'       => 	'M',
    		 'email'        =>	'wesleijt@hotmail.com',
    		 'password'     =>  env('PASSWORD_HASH') ? bcrypt('magalhaes10') : 'magalhaes10'
    	]);
    	
        // $this->call(UsersTableSeeder::class);
    }
}
