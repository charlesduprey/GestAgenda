<?php
/**
 * Created by PhpStorm.
 * User: guill_000
 * Date: 13/12/2015
 * Time: 14:58
 */

use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder {

    public function run()
    {
        for($i = 1; $i <= 100; ++$i)
        {
            $numbers = range(1, 20);
            shuffle($numbers);
            $n = rand(3, 6);
            for($j = 1; $j < $n; ++$j)
            {
                DB::table('post_tag')->insert(array(
                    'post_id' => $i,
                    'tag_id' => $numbers[$j]
                ));
            }
        }
    }
}