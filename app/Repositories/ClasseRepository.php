<?php
/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 10/03/2016
 * Time: 19:11
 */

namespace App\Repositories;

use App\Classe;

class ClasseRepository
{

    protected $classe;

    public function __construct(Classe $classe)
    {
        $this->classe = $classe;
    }

    private function save(Classe $classe, Array $inputs)
    {
        $classe->Niveau = $inputs['Niveau'];
        $classe->Libelle = $inputs['Libelle'];

        $classe->save();
    }

    public function getPaginate($n)
    {
        return $this->classe->paginate($n);
    }

    public function store(Array $inputs)
    {
        return $this->classe->create($inputs);
    }

    public function getById($id)
    {
        return $this->classe->findOrFail($id);
    }

    public function update($id, Array $inputs)
    {
        $this->save($this->getById($id), $inputs);
    }

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }

}