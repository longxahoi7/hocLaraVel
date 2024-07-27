<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // DB::table('product')->insert([
        //     'name' => 'abc',
        //     'price' =>'244444',
        //     'view'=>'4',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);
Product::factory()->count(10)->create();
    }
}
