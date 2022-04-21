@extends('layout')
@section('content')
    <h1>Devis</h1>
    <div>
        <h2></h2>
    </div>
    <?php
    echo 'Nom : ' .$_POST["name"].'<br>';
    echo 'email : ' .$_POST["email"].'<br>';
    echo 'Téléphone : ' .$_POST["phone"].'<br>';
    echo 'Adresse : ' .$_POST["address"].'<br>';
    echo 'Ref : ' .$_POST["ref"].'<br>';
    echo 'Siret : ' .$_POST["siret"].'<br>';
    ?>
    <div>
        <h2>A destination de</h2>
    </div>
    <?php
    echo 'Nom : ' .$_POST["client_name"].'<br>';
    echo 'Adresse : ' .$_POST["client_address"].'<br>';
    echo 'Siret : ' .$_POST["client_siret"].'<br>';
    ?>
    <div>
        <h2>Mission :</h2>
    </div>
    <?php
    echo $_POST["mission"].'<br>';
    ?>
    <div>
        <h2>Tâche :</h2>
    </div>
    <?php
    echo 'Designation : ' .$_POST["designation"].'<br>';
    echo 'Quantité : ' .$_POST["quantité"].'<br>';
    echo 'Prix unitaire : ' .$_POST["prix_unit"].'<br>';
    ?>
    <div>
        <h2>Coordonnées bancaires :</h2>
    </div>
    <?php
    echo 'Titulaire du compte : ' .$_POST["titulaire"].'<br>';
    echo 'Domiciliation : ' .$_POST["domiciliation"].'<br>';
    echo 'RIB : ' .$_POST["rib"].'<br>';
    echo 'IBAN : ' .$_POST["iban"].'<br>';
    echo 'BIC : ' .$_POST["bic"].'<br>';
    ?>
@endsection
