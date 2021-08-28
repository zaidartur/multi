<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 1; $i < 25; $i++) {
            DB::table('contact')->insert([
                'contact_phone'     => intval($faker->phoneNumber()),
                'contact_sapaan'    => $faker->title(),
                'contact_name'      => $faker->name(),
                'contact_email'     => $faker->email(),
                'contact_gender'    => 'M',
                'contact_birthday'  => $faker->dateTimeThisCentury(),
                'contact_agama'     => $faker->text('5'),
                'contact_address'   => $faker->address(),
                'contact_pekerjaan' => $faker->text('10'),
                'contact_keterangan' => $faker->word(),
                'contact_urut'      => date('YmdHis'),
            ]);
        }
    }
}
