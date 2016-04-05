<?php
/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 10/03/2016
 * Time: 19:22
 */
?>

@extends('adminLTE')

@section('content')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Fiche d'une classe</div>
            <div class="panel-body">
                <p>intitule : {{ $classe->intitule }}</p>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@stop
