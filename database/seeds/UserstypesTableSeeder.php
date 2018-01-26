<?php

use Illuminate\Database\Seeder;
use App\Userstype;
class UserstypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $userstypes = [
            [
                'name'=>'superadmin',
            ],
            [
                'name'=>'user',
            ]];

        foreach($userstypes AS $usertype):
        
            Userstype::create($usertype);
        endforeach;
    }
}
