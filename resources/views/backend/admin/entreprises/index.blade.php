@extends('layouts.app2')

@section('styles')
     <!-- Datatable -->
     <link href="{{asset('backend/assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
     {{-- <!-- Custom Stylesheet -->
         <link href="{{asset('backend/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet"> --}}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                {{-- <h4>Hi, welcome back!</h4> --}}
                <span>Datatable|Gestion entreprises</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Gestion entreprise</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Ajouter</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Toutes les entreprises</h4>
                    <a class="text-right" href="{{ route('gest-societe.create') }}">Nouveau</a>
                </div>
                <div class="card-body text-center">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>nom</th>
                                    <th>Description</th>
                                    {{-- <th>CCT</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($entreprises as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nom }}</td>
                                    <td>{{ $item->description }}</td>
                                    {{-- <td>{{ $item-> }}</td> --}}
                                    <td>
                                        <div class="text-center">
                                            <a href="{{ route('gest-societe.edit', $item->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="{{ route('gest-societe.destroy', $item->id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
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
