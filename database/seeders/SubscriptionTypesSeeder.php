<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscription_types')->truncate();

        $subscription_types = [
            [
                'name' => 'Fixed usage',
                'description' => 'The fixed usage subscription model offers a set price for a fixed quantity of goods or services over a set time frame.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Unlimited usage',
                'description' => 'The unlimited usage subscription model offers a set price for unlimited access to a good or service.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pay-as-you-go',
                'description' => 'Enables customers to purchase products or services periodically without any long-term commitment. Customers can cancel their subscription at any time',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Freemium',
                'description' => 'Offers access to limited levels of content for free, but only offers additional content or premium features to paying subscribers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('subscription_types')->insert($subscription_types);

    }
}
