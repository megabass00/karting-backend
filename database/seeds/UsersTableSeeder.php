<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'admin',
                'name' => 'admin1',
                'surname' => '',
                'image' => 'default.png',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$psfVa1LmPFz.Xpl.9m8m8.tdTwoLBZtLKJ/DzCCQiJ1Vcg6lLUrIy',
                'remember_token' => NULL,
                'created_at' => '2019-08-22 18:57:56',
                'updated_at' => '2019-08-22 18:57:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'member',
                'name' => 'user1',
                'surname' => '',
                'image' => 'default.png',
                'email' => 'user1@user.com',
                'password' => '$2y$10$psfVa1LmPFz.Xpl.9m8m8.tdTwoLBZtLKJ/DzCCQiJ1Vcg6lLUrIy',
                'remember_token' => NULL,
                'created_at' => '2019-08-22 18:57:56',
                'updated_at' => '2019-08-22 18:57:56',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}