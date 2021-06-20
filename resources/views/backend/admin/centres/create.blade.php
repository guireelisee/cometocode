@extends('layouts.app2')

@section('styles')


@endsection

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <span>Datatable > Gestion des Centres de Collecte et de Tri</span>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <div class="col-xl col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Nouveau centre</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('gest-centre.store') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col-sm">
                                        <h4>Nom</h4>
                                        <input type="text" class="form-control" name="nom" placeholder="Nom du centre">
                                    </div>
                                    <div class="col-sm mt-2 mt-sm-0">
                                        <h4>Secteur</h4>
                                        <select class="mr-sm-2 default-select" id="inlineFormCustomSelect" name="kartier_id">
                                            <option selected disabled>--Choisir le secteur--</option>
                                            @foreach ($secteurs as $secteur)
                                            <option value="{{ $secteur->id }}">{{ $secteur->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm mt-2 mt-sm-0">
                                        <h4>Description</h4>
                                        <input type="text" class="form-control" name="description" placeholder="Description">
                                    </div>
                                    <div class="col-sm">
                                        <h4>Longitude</h4>
                                        <input type="text" class="form-control" name="longitude" placeholder="Longitude: 2.1329" name="longitude">
                                    </div>
                                    <div class="col-sm">
                                        <h4>Latitude</h4>
                                        <input type="text" class="form-control" name="latitude" placeholder="Lattitue: 1.0922" name="latitude">
                                    </div>
                                </div>
                                <div class="text-right mt-4">
                                    <a class="btn btn-secondary" href="{{ route('gest-centre.index') }}">Retour</a>

                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
@section('scripts')

@endsection
