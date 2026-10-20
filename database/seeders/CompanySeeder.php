<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $companies = [];
        // $faker = Faker::create();

        // foreach(range(1, 10) as $index){
            // $company = [
            //     "name" => $name = "Company $index",
            //     "address" => "Address $name",
            //     "website" => "Website $name",
            //     "email" => "Email $name",
            //     "created_at" => now(),
            //     "updated_at" => now()
            // ];

            // after we use faker
                // $company = [
                // after we use factories we comment these lines
                // "name" => $faker->company(),
                // "address" => $faker->address(),
                // "website" => $faker->domainName(),
                // "email" => $faker->email(),
                // "created_at" => now(),
                // "updated_at" => now()
            // ];
            // $companies[] = $company;
        // }

        // to aviod duplicate data
        // DB::table("companies")->delete();
        // DB::table("companies")->insert($companies);

        // after we use factory
        // since we have one line of code, seed class is unnecessary
        // instead we will put the code in the database seeder directly
        // Company::factory()->count(10)->create();
    }
}

// we can also register our seeder in the db seeder class
// to make our life easier