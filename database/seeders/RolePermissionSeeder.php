<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');


        //app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name'=>'add administrator']);
        Permission::create(['name'=>'delete administrator']);
        Permission::create(['name'=>'all administrators']);

        Permission::create(['name'=>'add category']);
        Permission::create(['name'=>'edit category']);
        Permission::create(['name'=>'delete category']);
        Permission::create(['name'=>'all category']);

        Permission::create(['name'=>'add subcategory']);
        Permission::create(['name'=>'edit subcategory']);
        Permission::create(['name'=>'delete subcategory']);
        Permission::create(['name'=>'all subcategory']);

        Permission::create(['name'=>'add product']);
        Permission::create(['name'=>'edit product']);
        Permission::create(['name'=>'delete product']);
        Permission::create(['name'=>'all product']);

        Permission::create(['name'=>'manage-user']);
        Permission::create(['name'=>'all users']);


        $z = Role::create(['name' => "super_admin"])->syncPermissions([

            'add administrator',
            'delete administrator',
            'all administrators',

            'add category',
            'edit category',
            'delete category',
            'all category',

            'add subcategory',
            'all subcategory',
            'edit subcategory',
            'delete subcategory',

            'add product',
            'all product',
            'edit product',
            'delete product',

            'all users',

            'manage-user',
        ]);

        $y = Role::create(['name' => "utilisateur"])->syncPermissions([
            'all category','all product','all users'
        ]);

        $x = Role::create(['name' => "admin"])->syncPermissions([
            'add category',
            'edit category',
            'delete category',
            'all category',

            'add subcategory',
            'all subcategory',
            'edit subcategory',
            'delete subcategory',

            'add product',
            'all product',
            'edit product',
            'delete product',
        ]);

        $user1 = User::create([
            //'token'		    => sha1('USER_'.rand(10,99).time()),
            'name'				=> 'jeferson yoboue',
            'email'				=> 'jeferson@gmail.com',
            'password'			=> Hash::make('password'),
        ]);
        $user1->assignRole($z);


        $user2 = User::create([
            //'token'		    => sha1('USER_'.rand(10,9999).time()),
            'name'				=> 'dieudonnee yao',
            'email'				=> 'yaodieudonne@gmail.com',
            'password'			=> Hash::make('password'),
        ]);
        $user2->assignRole($x);//$user2->assignRole(Constants::ROLE_ADMIN);


        $user3 = User::create([
            //'token'           => sha1('USER_'.rand(10,99).time()),
            'name'              => 'transmission',
            'email'             => 'itransmission@gmail.com',
            'password'          => Hash::make('password'),
        ]);
        $user3->assignRole($y);


    }
}
