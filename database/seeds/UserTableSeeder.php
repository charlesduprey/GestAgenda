<?php
/**
 * Created by PhpStorm.
 * User: guill_000
 * Date: 12/12/2015
 * Time: 16:43
 */

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder {

    private function randDate()
    {
        return Carbon::createFromDate(null, rand(1, 12), rand(1, 28));
    }

    public function run()
    {
        DB::table('users')->delete();

        $date = $this->randDate();

        DB::table('users')->insert([
            'nom' => 'Rodier',
            'prenom' => 'Guillaume',
            'email' => 'guillaume.rodier@outlook.fr',
            'password' => bcrypt('azerty'),
            'admin' => rand(0, 1),
            'id_classe' => rand(1, 6),
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}