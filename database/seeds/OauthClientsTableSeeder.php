<?php

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => NULL,
                'name' => 'karting',
                'secret' => 'dx4KIi7saFTKZQk3Rj0NA9M1fTq5Cln7tdQDGYeV',
                'redirect' => 'http://localhost',
                'personal_access_client' => false,
                'password_client' => true,
                'revoked' => false,
                'created_at' => '2019-08-22 19:01:52',
                'updated_at' => '2019-08-22 19:01:52',
            ),
        ));
        
        
    }
}