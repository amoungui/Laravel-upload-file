@extends('uploader::app')

@section('contenu')
    <br>
	<div class="col-sm-offset-4 col-sm-4">
		<div class="panel panel-info">
			<div class="panel-heading">Envoi d'une photo</div>
			<div class="panel-body">
				{!! Form::open(['url' => 'upload', 'files' => true]) !!}
					<div class="form-group">
						{!! Form::file('file', ['class' => 'form-control']) !!}
					</div>
					{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection