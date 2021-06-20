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
                    <a class="text-right" href="{{ route('gest-alerte.create') }}"><button class="btn btn-primary" type="button">Ajouter</button></a>
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
                                    <th>Etat</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($alertes as $alerte) --}}
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            En cours
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                 {{-- @endforeach --}}
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
