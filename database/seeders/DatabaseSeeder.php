<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\PlanFeature;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->admin()->create();
        // \App\Models\User::factory(1)->user()->create();

        $plans = [
            'Gold' => [
                'features' => ['Min Deposit $20,000', 'Referral Bonus', 'Full IT Support'],
                'min_investment' => 20000,
                'max_investment' => 49999,
            ],
            'Platinum' => [
                'features' => ['Min Deposit $50,000', 'Referral Bonus', 'Full IT Support'],
                'min_investment' => 50000,
                'max_investment' => 1000000,
            ],
            'Premium' => [
                'features' => ['Min Deposit $5,000', 'Referral Bonus', 'Full IT Support'],
                'min_investment' => 5000,
                'max_investment' => 19999,
            ],
            'Mini Plan' => [
                'features' => ['Min Deposit $500', 'Referral Bonus', 'Full IT Support'],
                'min_investment' => 500,
                'max_investment' => 4999,
            ],
        ];

        foreach ($plans as $planName => $planData) {
            $plan = Plan::firstOrCreate(['name' => $planName], [
                'tenure' => 50,
                'bonus' => 10,
                'min_investment' => $planData['min_investment'],
                'max_investment' => $planData['max_investment'],
                // Additional plan attributes go here
            ]);

            $plan->features()->delete(); // Remove existing features

            foreach ($planData['features'] as $feature) {
                PlanFeature::factory()->create([
                    'plan_id' => $plan->id,
                    'name' => $feature,
                ]);
            }
        }
    }
}