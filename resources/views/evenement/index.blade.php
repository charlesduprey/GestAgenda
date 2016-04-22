@extends('adminLTE')

@section('contenu')
    <br>
    <div class="col-sm-offset-1 col-sm-9">
        @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
        @endif
        <div class="panel panel-primary *">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des événements</h3>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Type de l'événement</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Horaire début</th>
                    <th>Horaire Fin</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($evenement as $evenement)
                    <tr>
                        <td>{!! $evenement->id !!}</td>
                        <td class="text-primary"><strong>{!! $evenement->typeevent !!}</strong></td>
                        <td class="text-primary"><strong>{!! $evenement->description !!}</strong></td>
                        <td class="text-primary"><strong>{!! $evenement->date !!}</strong></td>
                        <td class="text-primary"><strong>{!! $evenement->horaireDeb !!}</strong></td>
                        <td class="text-primary"><strong>{!! $evenement->horaireFin !!}</strong></td>
                        <td>{!! link_to_route('evenement.show', 'Voir', [$evenement->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                        <td>{!! link_to_route('evenement.edit', 'Modifier', [$evenement->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['evenement.destroy', $evenement->id]]) !!}
                            {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {!! link_to_route('evenement.create', 'Ajouter un evenement', [], ['class' => 'btn btn-info pull-right']) !!}
        {!! $links !!}
    </div>
@stop