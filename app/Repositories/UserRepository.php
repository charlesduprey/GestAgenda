<?php
/**
 * Created by PhpStorm.
 * User: guill_000
 * Date: 09/12/2015
 * Time: 19:45
 */

namespace App\Repositories;

use App\User;

class UserRepository
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    private function save(User $user, Array $inputs)
    {
        $user->nom = $inputs['nom'];
        $user->prenom = $inputs['prenom'];
        $user->email = $inputs['email'];
        $user->admin = isset($inputs['admin']);
        //$user->id_classe = $inputs['id_classe'];

        $user->save();
    }

    public function getPaginate($n)
    {
        return $this->user->paginate($n);
    }

    public function store(Array $inputs)
    {
        $user = new $this->user;
        $user->password = bcrypt($inputs['password']);

        $this->save($user, $inputs);

        return $user;
    }

    public function getById($id)
    {
        return $this->user->findOrFail($id);
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