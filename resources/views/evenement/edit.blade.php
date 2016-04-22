@extends('adminLTE')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Modification d'un évènement</div>
            <div class="panel-body">
                <div class="col-sm-12">
                    {!! Form::model($evenement, ['route' => ['evenement.update', $evenement->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::select('typeevent', ['controle' => 'Controle','cours' => 'Cours'], null, ['class' => 'form-control', 'placeholder' => 'Type événement']) !!}
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
                        {!! Form::text('horaireDeb', null, ['class' => 'form-control', 'placeholder' => 'Horaire de debut']) !!}
                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::text('horaireFin', null, ['class' => 'form-control', 'placeholder' => 'Horaire de fin']) !!}
                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('id_classe') ? 'has-error' : '' !!}">
                        <?php
                        $classes = DB::table('classe')->select('Niveau', 'Libelle')->get();
                        $libelleClasse = array('Sélectionner la classe');
                        foreach ($classes as $classe)
                                 array_push($libelleClasse, $classe->Niveau . ' ' . $classe->Libelle)
                        ?>
                        {!! Form::select('id_classe', $libelleClasse, null, ['class' => 'form-control', 'placeholder' => 'Classe']) !!}
                        {!! $errors->first('id_classe', '<small class="help-block">:message</small>') !!}
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