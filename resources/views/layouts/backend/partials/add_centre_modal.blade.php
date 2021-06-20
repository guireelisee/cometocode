<!-- Add Project -->
<div class="modal fade" id="addProjectSidebar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un centre</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gest-centre.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="text-black font-w500">Nom du centre</label>
                        <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Description</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Secteur</label>
                        <select class="mr-sm-2 default-select" id="inlineFormCustomSelect" name="kartier_id">
                            <option selected>Quel secteur/kartier?</option>
                            {{-- @foreach ($centres ?? '' as $item)
                                <option value="{{ $item->id }}">{{ $item->nom }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">longitude</label>
                        <input type="text" class="form-control" name="longitude" placeholder="12.310000">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">latitude</label>
                        <input type="text" class="form-control" name="latitude" placeholder="-1.310000">
                    </div>
                    <div class="form-group">
                        <button type="sumit" class="btn btn-primary btn-block">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
