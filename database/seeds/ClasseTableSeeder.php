<?php
/**
 * Created by PhpStorm.
 * User: guill_000
 * Date: 12/12/2015
 * Time: 16:43
 */

use Illuminate\Database\Seeder;

class ClasseTableSeeder extends Seeder {

    public function run()
    {
        DB::table('classe')->delete();

        DB::table('classe')->insert(array(
            array('Niveau'=>'Terminal','Libelle'=>'L'),
            array('Niveau'=>'Terminal','Libelle'=>'ES'),
            array('Niveau'=>'Terminal','Libelle'=>'S'),
            array('Niveau'=>'Première','Libelle'=>'L'),
            array('Niveau'=>'Première','Libelle'=>'ES'),
            array('Niveau'=>'Première','Libelle'=>'S'),
        ));
    }
}