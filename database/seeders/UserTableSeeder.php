<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('12345678'),
            'role'=> 2,
            'is_online'=>false
        ]);
        $user->save();
        $user = new User([
            'name'=>'manager',
            'email'=>'manager@gmail.com',
            'password'=>Hash::make('12345678'),
            'role'=> 1,
            'is_online'=>false
        ]);
        $user->save();
        
        $user = new User([
            'name'=>'table 1',
            'email'=>'table1@gmail.com',
            'password'=>Hash::make('12345678'),
            'role'=> 0,
            'is_online'=>false
        ]);
        $user->save();
        
        $user = new User([
            'name'=>'table 2',
            'email'=>'table2@gmail.com',
            'password'=>Hash::make('12345678'),
            'role'=> 0,
            'is_online'=>false
        ]);
        $user->save();
        
        $user = new User([
            'name'=>'table 3',
            'email'=>'table3@gmail.com',
            'password'=>Hash::make('12345678'),
            'role'=> 0,
            'is_online'=>false
        ]);
        $user->save();
        
        $user = new User([
            'name'=>'table 4',
            'email'=>'table4@gmail.com',
            'password'=>Hash::make('12345678'),
            'role'=> 0,
            'is_online'=>false
        ]);
        $user->save();
        
        $user = new User([
            'name'=>'table 5',
            'email'=>'table5@gmail.com',
            'password'=>Hash::make('12345678'),
            'role'=> 0,
            'is_online'=>false
        ]);
        $user->save();


    }
}
