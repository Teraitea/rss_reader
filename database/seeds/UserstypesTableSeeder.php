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
        
        $userstypes = [];
        for($i = 0; $i < 3; $i++):
        $userstypes[] = [
            'name' => str_random(10),
        ];
        endfor;

        foreach($userstypes AS $usertype):
        
            Userstype::create($usertype);
        endforeach;
    }
}
