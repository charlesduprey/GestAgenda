@extends('adminLTE')

@section('contenu')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">Accueil</div>
					<div class="panel-body">
						<div class="col-md-10">
							Vous êtes connecté !
						</div>
						<div class="col-md-2">
							<a href="{{ url('/page1') }}"><button  class="btn btn-primary">OK</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection