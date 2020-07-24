<?php

use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            'creator_id' => 1,
            'recipe_name' => 'いちごと牛乳',
            'recipe_image' => 'K46_0118.JPG',
            'recipe' => 'いちごと牛乳をミキサーに入れ、撹拌します。',
            'material_1' => 'いちご:40g',
            'material_2' => '牛乳:100ml',
        ];
        DB::table('recipes')->insert($items);
        $items = [
            'creator_id' => 2,
            'recipe_name' => 'バナナジュース',
            'recipe_image' => 'K46_0118.JPG',
            'recipe' =>
            'バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。
            バナナと牛乳をミキサーに入れ、撹拌します。',
            'material_1' => 'バナナ:40g',
            'material_2' => '牛乳:100ml',
            'material_3' => '牛乳:100ml',
            'material_4' => '牛乳:100ml',
            'material_5' => '牛乳:100ml',
            'material_6' => '牛乳:100ml',
            'material_7' => '牛乳:100ml',
            'material_8' => '牛乳:100ml',
            'material_9' => '牛乳:100ml',
            'material_10' => '牛乳:100ml',
        ];
        DB::table('recipes')->insert($items);
    }
}
