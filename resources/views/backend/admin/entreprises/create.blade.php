@extends('layouts.app2')

@section('styles')


@endsection

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                {{-- <h4>Hi, welcome back!</h4> --}}
                <span>Nouvelle entreprise</span>
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
            <div class="col-xl col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Nouvelle entreprise</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                @csrf
                                <div class="form-row">
                                    <div class="col-sm">
                                        <input type="text" class="form-control" name="nom" placeholder="Nom de l'entreprise">
                                    </div>
                                    <div class="col-sm mt-2 mt-sm-0">
                                        <input type="text" class="form-control" name="description" placeholder="Description">
                                    </div>
                                    <div class="col-sm mt-2 mt-sm-0">
                                        <select class="mr-sm-2 default-select" id="inlineFormCustomSelect">
                                            <option selected>Quel centre?</option>
                                            @foreach ($centres as $item)
                                                <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a class="btn btn-danger" href="{{ route('gest-societe.index') }}">Retour</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
@section('scripts')

@endsection
