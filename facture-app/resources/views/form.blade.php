@extends('layout')
@section('content')
    <form method="post" action="{{ route('devis') }}">
        @csrf
        <div>
            <h2>Mes infos :</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Téléphone">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="address" name="address" placeholder="Adresse">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="ref" name="ref" placeholder="Ref">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="siret" name="siret" placeholder="Siret">
            </div>
        </div>

        <div>
            <h2>Infos client :</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Client_Nom">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="client_address" name="client_address" placeholder="Client_Adresse">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="client_siret" name="client_siret" placeholder="Client_Siret">
            </div>
        </div>

        <div>
            <h2>Mission :</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="mission" name="mission" placeholder="mission">
            </div>
        </div>
        <div>
            <h2>tâche :</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="designation" name="designation" placeholder="designation">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="quantité" name="quantité" placeholder="quantité">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="prix_unit" name="prix_unit" placeholder="Prix_unit">
            </div>
        </div>

        <div>
            <h2>Coordonnées bancaires :</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="titulaire" name="titulaire" placeholder="titulaire">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="domiciliation" name="domiciliation" placeholder="domiciliation">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="rib" name="rib" placeholder="rib">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="iban" name="iban" placeholder="iban">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="bic" name="bic" placeholder="bic">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Voir mon devis</button>
            </div>
        </div>
    </form>
@endsection
