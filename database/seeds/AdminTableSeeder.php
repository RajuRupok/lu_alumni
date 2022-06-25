<?php

use Illuminate\Database\Seeder;

use App\Admin;
use App\Models\Category\Category;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'pias@admin.com',
            // 'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'postion' => 'Advisor',
            // 'admin' => 1,
            // 'approved_at' => now(),
        ]);

        $arr = [
            'IT JOBS',
            'GOVT JOBS',
            'BCS',
            'IDEAS',
            'GRE',
            'IELTS ADVISE',
            'UNIVERSITY INFORMATION',
            'GANERAL ADVICE',
            'SUCESS STORIES',
            'CAREER EXPERT',
        ];
        for( $i=0; $i < sizeof($arr); $i++){
            Category::create([
                'category_name' => $arr[$i],
            ]);
        }
    }
}
