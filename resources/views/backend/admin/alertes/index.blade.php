@php
    use App\Http\Controllers\AlerteController;
    use App\Models\Centre;
    use App\Models\Kartier;
@endphp

@extends('layouts.app2')

@section('styles')
     <!-- Datatable -->
     <link href="{{asset('backend/assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <span>Datatable > Alertes</span>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">alertes disponibles</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom du centre</th>
                                    <th>Secteur du centre</th>
                                    <th>Localisation du centre</th>
                                    <th>Date d'alerte</th>
                                    <th>Etat</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alertes as $alerte)
                                    <tr>
                                        <td>{{$alerte->id}}</td>
                                        <td>{{Centre::find(AlerteController::getAlerteByCentre($alerte->centre_id)->centre_id)->nom}}</td>
                                        <td>{{Kartier::find(Centre::find(AlerteController::getAlerteByCentre($alerte->centre_id)->centre_id)->kartier_id)->nom}}</td>
                                        <td>{{Centre::find(AlerteController::getAlerteByCentre($alerte->centre_id)->centre_id)->latitude . " ". Centre::find(AlerteController::getAlerteByCentre($alerte->centre_id)->centre_id)->longitude}}</td>
                                        <td>{{$alerte->created_at}}</td>
                                        @if ($alerte->etat === 0)
                                        {{-- Validé --}}
                                            <td ><button type="button" class="mt-2 btn btn-primary btn-sm">Vider</button></td>
                                        @else
                                            <td ><button type="button" class="mt-2 btn btn-warning btn-sm">A vider</button></td>
                                            <td>
                                            <div class="d-flex">
                                                <a href="{{ route('updateEtat', ['id'=>$alerte->id]) }}" class="mt-2 btn btn-primary btn-sm"><i class="fa fa-check"></i> Valider</a>
                                            </div>
                                        </td>
                                        @endif
                                    </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
@section('scripts')
    <!-- Datatable -->
    <script src="{{asset('backend/assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('backend/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/plugins-init/datatables.init.js')}}"></script>
    {{-- <script src="{{asset('backend/assets/js/custom.min.js')}}µ
    "></script>
	<script src="{{asset('backend/assets/js/deznav-init.js')}}"></script>
	<script src="{{asset('backend/assets/js/demo.js')}}"></script>
    <script src="{{asset('backend/assets/js/styleSwitcher.js')}}"></script> --}}
@endsection
