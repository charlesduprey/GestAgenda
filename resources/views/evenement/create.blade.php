@extends('adminLTE')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Création d'un évènement</div>
            <div class="panel-body">
                <div class="col-sm-12">
                    {!! Form::open(['url' => 'evenement', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::select('typeevent', ['Contrôle' => 'Contrôle','cours' => 'Cours'], null, ['class' => 'form-control', 'placeholder' => 'Type événement']) !!}
                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::date('date', null, ['class' => 'form-control', 'placeholder' => 'Date']) !!}
                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::time('horaireDeb', null,['class' => 'form-control', 'placeholder' => 'Horaire de début']) !!}
                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::time('horaireFin', null, ['class' => 'form-control', 'placeholder' => 'Horaire de fin']) !!}
                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <?php
                        $classes = DB::table('classe')->select('Niveau', 'Libelle')->get();
                        $libelleClasse = array('Sélectionner la classe');
                        foreach ($classes as $classe)
                                 array_push($libelleClasse, $classe->Niveau . ' ' . $classe->Libelle)
                        ?>

                        {!! Form::select('id_classe', $libelleClasse, null, ['class' => 'form-control']) !!}
                        {!! $errors->first('id', '<small class="help-block">:message</small>') !!}
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