<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // make life easier
        // $this->call(CompanySeeder::class);

        // $this->call([
        //     CompanySeeder::class,
        //     ContactSeeder::class
        // ]);

        // after we use factory
        // and not necessary for the seed clases for these
        // Company::factory()->count(10)->create();
        // Contact::factory()->count(100)->create();

        // after relationship in factory
        // Company::factory(10)->hasContacts(10)->create();

        User::factory(10)->has(
            Company::factory(10)->has(
                Contact::factory(10)->state(function ($attributes, Company $company) {
                    return [
                        "user_id" => $company->user_id
                    ];
                })
            )
        )->create();
    }
}
