<?php
$classe = DB::table('classe')->where('id', $evenement->id_classe)->first();
?>
@extends('adminLTE')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Fiche événement</div>
            <div class="panel-body">
                <p>Description : {{ $evenement->description }}</p>
                <p>Date : {{ $evenement->date }}</p>
                <p>Horaire de début : {{ $evenement->horaireDeb }}</p>
                <p>Horaire de fin : {{ $evenement->horaireFin }}</p>
                <p>Classe : {{ $classe->Niveau }} {{ $classe->Libelle }}</p>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@stop