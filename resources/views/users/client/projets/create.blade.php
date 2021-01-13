@extends('layouts.menuHomes')
@section('content')
<div class="col-12 col-md-11">
  <div class="p-md-4">
    <div class="d-md-flex justify-content-between align-items-center">
      <h2>Publier un projet</h2>
    </div>
    <div class="pt-md-5">
      <div class="p-4">
        <div class="card mx-auto shadow " style="width: 30rem;">
            <!--img src="images/projet.jpg" class="card-img-top img-fluid" alt="..."-->
            <div class="card-body">
              <form method="POST" action="{{ route('projects.store') }}">
                @csrf
                <div class="form-group">
                  <label>Titre du projet</label>
                  <input type="text" name="title" class="form-control border-left-0 border-right-0 border-top-0 border-primary bg-light" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label >Description du projet</label>
                  <textarea class="form-control" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label>Budget</label>
                  <select name="budget" class="form-control">
                    <option value="- 500">- 500 €</option>
                    <option value="500 à 1000">500 à 1000 €</option>
                    <option value="1000 à 10000">1000 à 10000 €</option>
                    <option value="+ 10000">+ 10000 €</option>
                  </select>

                  <input type="hidden" name="user_id" value="{{ \Auth::user()->id }}">
                </div>
                <button type="submit" class="btn btn-primary w-100 rounded-pill">Publier le projet</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
