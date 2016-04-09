<?php
/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 10/03/2016
 * Time: 19:21
 */
?>

@extends('adminLTE')

@section('contenu')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
        @endif
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des classes</h3>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($classes as $classe)
                    <tr>
                        <td>{!! $classe->id !!}</td>
                        <td class="text-primary"><strong>{!! $classe->Niveau !!} {!! $classe->Libelle !!}</strong></td>
                        <td>{!! link_to_route('classe.show', 'Voir', [$classe->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                        <td>{!! link_to_route('classe.edit', 'Modifier', [$classe->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['classe.destroy', $classe->id]]) !!}
                            {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {!! link_to_route('classe.create', 'Ajouter une classe', ['Classe' => $classes], ['class' => 'btn btn-info pull-right']) !!}
        {!! $links !!}
    </div>
@stop
