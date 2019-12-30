@extends('layouts.app_with_side_bar')

@section('contentTitle')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">
                        Ajouter des Clients/Prospects
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-4" style="width: 100px;"></div>
    <div class="col-9">
        <div class="container-fluid">
            <div class="card m-b-10" style="width: 100%">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Fiche Client</h4>
                    <p class="text-muted m-b-30">Ajouter un client ou un prospect</p>
                    <form action="Client" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Statut</label>
                            <select class="custom-select" name="status">
                                <option selected="selected">Choisir un status</option>
                                @foreach ($statuses as $status)
                                <option value="{{ $status->status_id }}">{{ $status->libelle }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Civilité</label>
                            <select class="custom-select" name="civilite">
                                <option selected="selected">Choisir une civilité</option>
                                @foreach ($civilites as $civilite)
                                <option value="{{ $civilite->civilite_id }}">
                                    {{ $civilite->libelle}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input">Raison sociale</label>
                            <input class="form-control" type="text" placeholder="Raison sociale" id="example-text-input"
                                name="raison_sociale">
                        </div>
                        <div class="form-group">
                            <label>Nom</label>
                            <input class="form-control" type="text" placeholder="Nom" name="nom">
                        </div>
                        <div class="form-group">
                            <label>Prénom</label>
                            <input class="form-control" type="text" placeholder="prénom" name="prenom">
                        </div>
                        <div class="form-group">
                            <label>Adresse</label>
                            <input class="form-control" type="text" placeholder="Adresse" name="adresse">
                        </div>


                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-lg-6">
                                <label>Téléphone</label>
                                <input class="form-control" type="text" placeholder="telephone" name="telephone">
                            </div>

                            <div class="col-lg-6">
                                <label>Email</label>
                                <input class="form-control" type="text" placeholder="email" name="email">
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>Code Postal</label>
                                <input class="form-control" type="text" placeholder="Code postal" name="code_postal">
                            </div>

                            <div class="col-lg-6">
                                <label>Ville</label>
                                <select class="custom-select" name="ville">
                                    <option selected="selected">Choisir une Ville</option>
                                    @foreach ($villes as $ville)
                                    <option value="{{ $ville->ville_id }}">{{ $ville->nom}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>ICE</label>
                                <input class="form-control" type="text" placeholder="ICE" name="ice">
                            </div>

                            <div class="col-lg-6">
                                <label>IF</label>
                                <input class="form-control" type="text" placeholder="IF" name="if">
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>Patente</label>
                                <input class="form-control" type="text" placeholder="Patente" name="patente">
                            </div>

                            <div class="col-lg-6">
                                <label>CNSS</label>
                                <input class="form-control" type="text" placeholder="CNSS" name="cnss">
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>RC</label>
                                <input class="form-control" type="text" placeholder="RC" name="rc">
                            </div>

                            <div class="col-lg-6">
                                <label>Siret</label>
                                <input class="form-control" type="text" placeholder="Siret" name="siret">
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>Code APE</label>
                                <input class="form-control" type="text" placeholder="Code APE" name="code_ape">
                            </div>

                            <div class="col-lg-6">
                                <label>TVA Intra.</label>
                                <input class="form-control" type="text" placeholder="TVA Intra" name="tva_intra">
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <h4 class="mt-0 header-title">Adresse de Livraison</h4>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label for="example-text-input">Raison sociale</label>
                                <input class="form-control" type="text" placeholder="Raison sociale"
                                    id="example-text-input" name="raison_sociale_adr_livraison">
                            </div>

                            <div class="col-lg-6">
                                <label>Adresse 1</label>
                                <input class="form-control" type="text" placeholder="Adresse 1"
                                    name="adresse_1_livraison">
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>Adresse 2</label>
                                <input class="form-control" type="text" placeholder="Adresse 2"
                                    name="adresse_2_livraison">
                            </div>

                            <div class="col-lg-6">
                                <label>Code Postal</label>
                                <input class="form-control" type="text" placeholder="Code postal"
                                    name="code_postal_adr_livraison">
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">

                            <div class="col-lg-6">
                                <label>Pays</label>
                                <select class="custom-select" name="pays_adr_livraison">
                                    <option selected="selected">Choisir un Pays</option>
                                    @foreach ($payses as $pays)
                                    <option value="{{ $pays->pays_id }}">{{ $pays->nom}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>Ville</label>
                                <input class="form-control" type="text" placeholder="Ville" name="ville_adr_livraison">
                            </div>


                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <h4 class="mt-0 header-title">Adresse Transporteur</h4>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>Raison sociale</label>
                                <input class="form-control" type="text" placeholder="Raison sociale"
                                    name="raison_sociale_adr_transporteur">
                            </div>

                            <div class="col-lg-6">
                                <label>Adresse 1</label>
                                <input class="form-control" type="text" placeholder="Adresse 1"
                                    name="adresse_1_transporteur">
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>Adresse 2</label>
                                <input class="form-control" type="text" placeholder="Adresse 2"
                                    name="adresse_2_transporteur">
                            </div>

                            <div class="col-lg-6">
                                <label>Code Postal</label>
                                <input class="form-control" type="text" placeholder="Code postal"
                                    name="code_postal_adr_transporteur">
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>Pays</label>
                                <select class="custom-select" name="pays_adr_transporteur">
                                    <option selected="selected">Choisir un Pays</option>
                                    @foreach ($payses as $pays)
                                    <option value="{{ $pays->pays_id }}">{{ $pays->nom}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>Ville</label>
                                <input class="form-control" type="text" placeholder="Ville"
                                    name="ville_adr_transporteur">
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <h4 class="mt-0 header-title">Rég/Tarifs/TVA</h4>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>Mode de réglement par défaut</label>
                                <select class="custom-select" name="reglement">
                                    <option selected="selected">Choisir un réglement</option>
                                    @foreach ($reglements as $reglement)
                                    <option value="{{ $reglement->mode_reglement_id }}">
                                        {{ $reglement->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <label>Tarif par défaut</label>
                                <select class="custom-select" name="tarif">
                                    <option selected="selected">Choisir un tarif</option>
                                    @foreach ($tarifs as $tarif)
                                    <option value="{{ $tarif->tarif_id }}">{{ $tarif->libelle }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <h4 class="mt-0 header-title">Conditions de paiement</h4>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>Condition de paiement Devis</label>
                                <select class="custom-select" name="condition_paiement">
                                    <option selected="selected">Choisir une condition de
                                        paiement Devis</option>
                                    @foreach ($conditon_paiements as $conditon_paiement)
                                    <option value="{{ $conditon_paiement->conditon_paiement_id }}">
                                        {{ $conditon_paiement->texte }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <label>Condition de paiement Facture</label>
                                <select class="custom-select" name="condition_paiement_facture">
                                    <option selected="selected">Choisir une condition de
                                        paiement Facture</option>
                                    @foreach ($conditon_paiements as $conditon_paiement)
                                    <option value="{{ $conditon_paiement->conditon_paiement_id }}">
                                        {{ $conditon_paiement->texte }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <center>
                            <button type="submit"
                                class="btn btn-outline-success waves-effect waves-light">Valider&nbsp;&nbsp;&nbsp;&nbsp;<i
                                    class="mdi mdi-account-check-outline"></i></button>
                        </center>



                    </form>
                </div>
            </div>

        </div>

        <!-- end col -->

        <!-- end col -->
    </div>
    <div class="col-lg-4" style="width: 100px;"></div>
</div>
@endsection



@section('scriptrender')

<!-- jQuery  -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/detect.js"></script>
<script src="js/fastclick.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.blockUI.js"></script>
<script src="js/waves.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<!--Morris Chart-->
<script src="morris/morris.min.js"></script>
<script src="raphael/raphael.min.js"></script>
<!-- dashboard js -->
<script src="pages/dashboard.int.js"></script>
<!-- App js -->
<script src="js/app.js"></script>
@endsection