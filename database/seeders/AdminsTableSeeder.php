<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            ['id'=>1, 'name'=>'Super Admin', 'type'=>'superadmin', 'vendor_id'=>0, 'mobile'=>'+8801721000000', 'email'=>'super@admin.com', 'password'=>'$2y$10$/NnidkuMyZyN1bE47Qqrzem8kjqwf170sqGMiCm4fsN0yxGwWopaW', 'image'=>'', 'status'=>1],
        ];
        Admin::insert($adminRecords);
    }
}