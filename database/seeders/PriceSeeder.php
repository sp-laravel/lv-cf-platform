<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder {
  /**
   * Run the database seeds.
   */
  public function run(): void {
    Price::create([
      'name' => 'Gratis',
      'value' => 0
    ]);
    Price::create([
      'name' => '19.99 US$ (nivel 1)',
      'value' => 19.99
    ]);
    Price::create([
      'name' => '49.99 US$ (nivel 2)',
      'value' => 49.99
    ]);
    Price::create([
      'name' => '49.99 US$ (nivel 2)',
      'value' => 99.99
    ]);
  }
}