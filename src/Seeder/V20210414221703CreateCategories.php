<?php

namespace Miaoxing\Category\Seeder;

use Faker\Factory;
use Miaoxing\Category\Service\CategoryModel;
use Miaoxing\Plugin\Seeder\BaseSeeder;

class V20210414221703CreateCategories extends BaseSeeder
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $faker = Factory::create('zh_CN');

        foreach (range(1, 30) as $i) {
            $category = $this->createCategory($faker);
            foreach (range(1, 2) as $j) {
                $this->createCategory($faker, [
                    'parentId' => $category->id,
                    'level' => 2,
                    'sort' => 50 - ($j - 1) * 10,
                ]);
            }
        }
    }

    protected function createCategory($faker, $attributes = [])
    {
        return CategoryModel::saveAttributes($attributes + [
                'name' => $faker->words(2, true),
                'description' => $faker->sentence,
                'sort' => $faker->biasedNumberBetween(),
            ]);
    }
}
