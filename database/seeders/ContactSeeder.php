<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Contact;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $companies = Company::all();
        // $faker = Faker::create();
        // $contacts = [];

        // foreach($companies as $company){
        //     foreach(range(1, mt_rand(5, 15)) as $index){
        //         $contact = [
        //         'first_name' => $faker->firstName(),
        //         'last_name' => $faker->lastName(),
        //         'phone' => $faker->phoneNumber(),
        //         'email' => $faker->email(),
        //         'address' => $faker->address(),
        //         'company_id' => $company->id,
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ];
        //     $contacts[] = $contact;
        //     }

            // Contact::create($contact);
        // }
        
        // since the create methods does not support multiple arrays
        // Contact::insert($contacts);


        // after we use the factory
        // after that is unnecessary for on line of code a seed class
        // we move it in database seed
        // Contact::factory()->count(100)->create();

    }
}
