    <?php
/**
 * Created by PhpStorm.
 * User: guill_000
 * Date: 09/12/2015
 * Time: 19:49
 */

    $classe = DB::table('classe')->where('id', $user->id_classe)->first();
?>

@extends('adminLTE')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Fiche d'utilisateur</div>
            <div class="panel-body">
                <p>Nom : {{ $user->nom }}</p>
                <p>Prénom : {{ $user->prenom }}</p>
                <p>Email : {{ $user->email }}</p>
                <p>Classe : {{ $classe->Niveau }} {{ $classe->Libelle }}</p>
                @if($user->admin == 1)
                    Administrateur
                @endif
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@stop