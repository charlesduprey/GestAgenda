<?php
/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 10/03/2016
 * Time: 19:23
 */
?>

@extends('adminLTE')

@section('content')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Modification d'un utilisateur</div>
            <div class="panel-body">
                <div class="col-sm-12">
                    {!! Form::model($classe, ['route' => ['classe.update', $classe->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                    <div class="form-group {!! $errors->has('intitule') ? 'has-error' : '' !!}">
                        {!! Form::text('intitule', null, ['class' => 'form-control', 'placeholder' => 'Intitulé']) !!}
                        {!! $errors->first('intitule', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@stop