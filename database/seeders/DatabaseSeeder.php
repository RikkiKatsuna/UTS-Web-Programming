<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\brand;
use App\Models\category;
use App\Models\item;
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
        category::create(
            ["category_name"=> "Shirt"],
        );
        category::create(
            ["category_name"=> "Bag"],
        );
        category::create(
            ["category_name"=> "Shoes"],
        );
        category::create(
            ["category_name"=> "Dress"],
        );

        brand::create(
            ["brand_name"=> "HoshHosh", "top5_flag"=> 1, "description"=> "HoshHosh was founded in 2023 only for Binus - Mid Term Exam."]
        );
        brand::create(
            ["brand_name"=> "Pulu", "top5_flag"=> 1, "description"=> "Pulu was founded in 2023 only for Binus - Mid Term Exam."]
        );
        brand::create(
            ["brand_name"=> "Hawee", "top5_flag"=> 1, "description"=> "Hawee was founded in 2023 only for Binus - Mid Term Exam."]
        );
        brand::create(
            ["brand_name"=> "Hush Dog", "top5_flag"=> 0, "description"=> "Hush Dog was founded in 2023 only for Binus - Mid Term Exam."]
        );
        brand::create(
            ["brand_name"=> "Adadah", "top5_flag"=> 1, "description"=> "Adadah was founded in 2023 only for Binus - Mid Term Exam."]
        );
        brand::create(
            ["brand_name"=> "Maximal", "top5_flag"=> 1, "description"=> "Maximal was founded in 2023 only for Binus - Mid Term Exam."]
        );

        item::create(
            ["item_name"=> "Blue Shirt", "brand_id" => 1, "category_id"=> 1, "price"=> 100000,"description" => "HoshHosh blue shirt is the best-imported shirt on \"Top Reseller\"."]
        );
        item::create(
            ["item_name"=> "Kids Overall", "brand_id" => 1, "category_id"=> 1, "price"=> 150000,"description" => "HoshHosh kids overall is the best-imported shirt on \"Top Reseller\"."]
        );
        item::create(
            ["item_name"=> "Green Shirt", "brand_id" => 2, "category_id"=> 1, "price"=> 200000,"description" => "Pulu green shirt is the best-imported shirt on \"Top Reseller\"."]
        );
        item::create(
            ["item_name"=> "Flower Shirt", "brand_id" => 3, "category_id"=> 1, "price"=> 300000,"description" => "Hawee flower shirt is the best-imported shirt on \"Top Reseller\"."]
        );
        item::create(
            ["item_name"=> "Tote Bag", "brand_id" => 4, "category_id"=> 2, "price"=> 200000,"description" => "Tote bag from Hush Dog is the best bag on \"Top Reseller\"."]
        );
        item::create(
            ["item_name"=> "Running Shoes", "brand_id" => 5, "category_id"=> 3, "price"=> 300000,"description" => "Adadah running shoes is the best-imported shoes on \"Top Reseller\"."]
        );
        item::create(
            ["item_name"=> "Baby shoes", "brand_id" => 1, "category_id"=> 3, "price"=> 80000,"description" => "HoshHosh baby shoes is the best-imported shoes on \"Top Reseller\"."],
        );
        item::create(
            ["item_name"=> "Red Dress", "brand_id" => 6, "category_id"=> 4, "price"=> 500000,"description" => "Maximal red dress is the best-imported dress on \"Top Reseller\"."],
        );
    }
}
