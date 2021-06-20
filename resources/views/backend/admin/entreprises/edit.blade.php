@extends('layouts.app2')

@section('styles')


@endsection

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                {{-- <h4>Hi, welcome back!</h4> --}}
                <span>Modification</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Gestion entreprise</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <div class="col-xl col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Editer</h4>
                    </div>
                    <form action="{{ route('gest-societe.update', $entreprise->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="col-sm">
                                        <input type="text" class="form-control" name="nom" placeholder="Nom de l'entreprise" value="{{ $entreprise->nom ?? '' }}">
                                    </div>
                                    <div class="col-sm mt-2 mt-sm-0">
                                        <input type="text" class="form-control" name="description" placeholder="Description" value="{{ $entreprise->description ?? '' }}">
                                    </div>
                                    <div class="col-sm mt-2 mt-sm-0">
                                        <select multiple class="mr-sm-2 form-control" id="inlineFormCustomSelect" name="centre_id[]">
                                            <option selected>Quel centre?</option>
                                            @foreach ($centres as $item)
                                            <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                            @endforeach
                                        </select>
                                        {{-- {{ ($item->id==$entreprise->centre_id)?'selected':'' }} --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                        <a class="btn btn-danger" href="{{ route('gest-societe.index') }}">Retour</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
@section('scripts')

@endsection
