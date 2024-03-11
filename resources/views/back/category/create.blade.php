@extends('back.app')

@section('title', 'Dashboard - Creation d\'une categorie ')

@section('dashboard-header')

    <div class="row align-items-center">
      <div class="col">
        <h3 class="page-title mt-5">Ajouter une categorie</h3>
      </div>
    </div>

@endsection

@section('dashboard-content')

    <div class="row">
        <div class="col-lg-12">
          <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="row formtype">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Nom de la categorie</label>
                  <input
                    class="form-control"
                    type="text"
                    name="name"
                    />
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Description</label>
                  <textarea
                    class="form-control"
                    rows="5"
                    id="comment"
                    name="description"
                  ></textarea>
                </div>
              </div>

              <div class="col-md-4">
                    <div class="form-group">
                        <label>Activation</label>
                        <select class="form-control" id="sel2" name="isActive">
                            <option value="1">Activer</option>
                            <option value="0">Ne pas activer</option>
                        </select>
                    </div>
                </div>
            </div>
    		<button type="submit" class="btn btn-primary buttonedit1">
              Enregistrer
          </button>
          </form>
    </div>



@endsection
