@extends('layouts.app_with_side_bar')


@section('contentTitle')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">
                        Modifier des Clients/Prospects
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
                    <form action="{{ url('update_client')}}/{{$client->client_id}}" method="GET">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Statut</label>
                            <select class="custom-select" name="status">
                                <option>Choisir un status </option>
                                @foreach ($statuses as $status)
                                @if ($status->status_id == $client->status_id)
                                <option value="{{ $status->status_id }}" selected="selected"> {{ $status->libelle }}
                                </option>
                                @else
                                <option value="{{ $status->status_id }}">{{ $status->libelle }} </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Civilité</label>
                            <select class="custom-select" name="civilite">
                                <option>Choisir une civilité </option>
                                @foreach ($civilites as $civilite)
                                @if ($civilite->civilite_id == $client->civilite_id)
                                <option value="{{ $civilite->civilite_id }}" selected="selected">
                                    {{ $civilite->libelle }}</option>
                                @else
                                <option value="{{ $civilite->civilite_id }}"> {{ $civilite->libelle }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input">Raison sociale</label>
                            <input class="form-control" type="text" placeholder="Raison sociale" id="example-text-input"
                                name="raison_sociale" value="{{ $client->raison_sociale }}">
                        </div>
                        <div class="form-group">
                            <label>Nom</label>
                            <input class="form-control" type="text" placeholder="Nom" name="nom"
                                value="{{ $client->nom }}" required>
                        </div>
                        <div class="form-group">
                            <label>Prénom</label>
                            <input class="form-control" type="text" placeholder="prénom" value="{{ $client->prenom }}"
                                name="prenom" required>
                        </div>
                        <div class="form-group">
                            <label>Adresse</label>
                            <input class="form-control" type="text" placeholder="Adresse" value="{{ $client->adresse }}"
                                name="adresse">
                        </div>
                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-lg-6">
                                <label>Téléphone</label>
                                <input class="form-control" type="text" placeholder="telephone"
                                    value="{{ $client->telephone }}" name="telephone">
                            </div>

                            <div class="col-lg-6">
                                <label>Email</label>
                                <input class="form-control" type="text" placeholder="email" value="{{ $client->email }}"
                                    name="email">
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>Code Postal</label>
                                <input class="form-control" type="text" placeholder="Code postal" name="code_postal"
                                    value="{{ $client->code_postal }}">
                            </div>

                            <div class="col-lg-6">
                                <label>Ville</label>
                                <select class="custom-select" name="ville">
                                    <option>Choisir une Ville </option>
                                    @foreach ($villes as $ville)
                                    @if ($ville->ville_id == $client->ville_id)
                                    <option value="{{ $ville->ville_id }}" selected="selected"> {{ $ville->nom}}
                                    </option>
                                    @else
                                    <option value="{{ $ville->ville_id }}">{{ $ville->nom}} </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>ICE</label>
                                <input class="form-control" type="text" placeholder="ICE" name="ice"
                                    value="{{ $client->ice }}">
                            </div>

                            {{-- <div class="col-lg-6">
                                                        <label>IF</label>
                                                        <input class="form-control" type="text" placeholder="IF" name="if" value="{{ $client->if }}">
                        </div> --}}
                </div>

                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <label>Patente</label>
                        <input class="form-control" type="text" placeholder="Patente" name="patente"
                            value="{{ $client->patente }}">
                    </div>

                    <div class="col-lg-6">
                        <label>CNSS</label>
                        <input class="form-control" type="text" placeholder="CNSS" name="cnss"
                            value="{{ $client->cnss }}">
                    </div>
                </div>

                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <label>RC</label>
                        <input class="form-control" type="text" placeholder="RC" name="rc" value="{{ $client->rc }}">
                    </div>

                    <div class="col-lg-6">
                        <label>Siret</label>
                        <input class="form-control" type="text" placeholder="Siret" name="siret"
                            value="{{ $client->siret }}">
                    </div>
                </div>

                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <label>Code APE</label>
                        <input class="form-control" type="text" placeholder="Code APE" name="code_ape"
                            value="{{ $client->code_ape }}">
                    </div>

                    <div class="col-lg-6">
                        <label>TVA Intra.</label>
                        <input class="form-control" type="text" placeholder="TVA Intra" name="tva_intra"
                            value="{{ $client->tva_intra }}">
                    </div>
                </div>

                <div class="row" style="margin-bottom: 30px;">
                    <h4 class="mt-0 header-title">Adresse de Livraison</h4>
                </div>

                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <label for="example-text-input">Raison sociale</label>
                        <input class="form-control" type="text" placeholder="Raison sociale" id="example-text-input"
                            name="raison_sociale_adr_livraison"
                            value="{{ $adr_liv==null? '':$adr_liv->raison_sociale}}">
                    </div>

                    <div class="col-lg-6">
                        <label>Adresse 1</label>
                        <input class="form-control" type="text" placeholder="Adresse 1" name="adresse_1_livraison"
                            required value="{{ $adr_liv==null? '':$adr_liv->adresse_1 }}">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <label>Adresse 2</label>
                        <input class="form-control" type="text" placeholder="Adresse 2" name="adresse_2_livraison"
                            value="{{ $adr_liv==null? '':$adr_liv->adresse_2 }}">
                    </div>

                    <div class="col-lg-6">
                        <label>Code Postal</label>
                        <input class="form-control" type="text" placeholder="Code postal"
                            name="code_postal_adr_livraison" value="{{ $adr_liv==null? '':$adr_liv->code_postal }}">
                    </div>
                </div>

                <div class="row" style="margin-bottom: 30px;">

                    <div class="col-lg-6">
                        <label>Ville</label>
                        <select class="custom-select" name="ville_adr_livraison" placeholder="Ville">
                            <option>Selectionner la ville </option>
                            @foreach ($villes as $ville)
                            @if ($adr_liv!=null && $adr_liv->ville_id != null && $ville->ville_id== $adr_liv->ville_id)
                            <option value="{{ $ville->ville_id }}" selected="selected"> {{ $ville->nom}} </option>
                            @else
                            <option value="{{ $ville->ville_id }}">{{ $ville->nom}} </option>
                            @endif
                            @endforeach
                        </select>
                    </div>


                </div>

                <div class="row" style="margin-bottom: 30px;">
                    <h4 class="mt-0 header-title">Adresse Transporteur</h4>
                </div>

                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <label>Raison sociale</label>
                        <input class="form-control" type="text" placeholder="Raison sociale"
                            name="raison_sociale_adr_transporteur"
                            value="{{ $adr_trans==null? '':$adr_trans->raison_sociale }}">
                    </div>

                    <div class="col-lg-6">
                        <label>Adresse 1</label>
                        <input class="form-control" type="text" placeholder="Adresse 1" name="adresse_1_transporteur"
                            value="{{ $adr_trans==null? '':$adr_trans->adresse_1 }}" required>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <label>Adresse 2</label>
                        <input class="form-control" type="text" placeholder="Adresse 2" name="adresse_2_transporteur"
                            value="{{$adr_trans==null? '': $adr_trans->adresse_2 }}">
                    </div>

                    <div class="col-lg-6">
                        <label>Code Postal</label>
                        <input class="form-control" type="text" placeholder="Code postal"
                            name="code_postal_adr_transporteur"
                            value="{{ $adr_trans==null? '':$adr_trans->code_postal }}">
                    </div>
                </div>

                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <label>Ville</label>
                        <select class="custom-select" name="ville_adr_livraison" placeholder="Ville">
                            <option>Selectionner la ville </option>
                            @foreach ($villes as $ville)
                            @if ($adr_trans!=null && $adr_trans->ville_id != null && $ville->ville_id==
                            $adr_trans->ville_id)
                            <option value="{{ $ville->ville_id }}" selected="selected"> {{ $ville->nom}} </option>
                            @else
                            <option value="{{ $ville->ville_id }}">{{ $ville->nom}} </option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row" style="margin-bottom: 30px;">
                    <h4 class="mt-0 header-title">Rég/Tarifs/TVA</h4>
                </div>

                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <label>Mode de réglement par défaut</label>
                        <select class="custom-select" name="reglement">
                            <option>Choisir un réglement </option>
                            @foreach ($reglements as $reglement)
                            @if ($client->mode_reglement_id != null && $client->mode_reglement_id ==
                            $reglement->mode_reglement_id)
                            <option value="{{ $reglement->mode_reglement_id }}" selected="selected">
                                {{ $reglement->libelle }}</option>
                            @else
                            <option value="{{ $reglement->mode_reglement_id }}"> {{ $reglement->libelle }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-6">
                        <label>Tarif par défaut</label>
                        <select class="custom-select" name="tarif">
                            <option>Choisir un tarif
                            </option>
                            @foreach ($tarifs as $tarif)
                            @if ($client->tarif_id != null && $client->tarif_id == $tarif->tarif_id)
                            <option value="{{ $tarif->tarif_id }}" selected="selected"> {{ $tarif->libelle }}</option>
                            @else
                            <option value="{{ $tarif->tarif_id }}"> {{ $tarif->libelle }}</option>
                            @endif
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
                        <select class="custom-select" name="condition_paiement_devis">
                            <option>Choisir une condition de paiement Devis </option>
                            @foreach ($conditon_paiements as $conditon_paiement)
                            @if ($client->conditon_paiement_devis_id != null && $client->conditon_paiement_devis_id ==
                            $conditon_paiement->conditon_paiement_id)
                            <option value="{{ $conditon_paiement->conditon_paiement_id }}" selected="selected">
                                {{ $conditon_paiement->texte }}</option>
                            @else
                            <option value="{{ $conditon_paiement->conditon_paiement_id }}">
                                {{  $conditon_paiement->texte }}</option>
                            @endif
                            @endforeach

                        </select>
                    </div>

                    <div class="col-lg-6">
                        <label>Condition de paiement Facture</label>
                        <select class="custom-select" name="condition_paiement_facture">
                            <option>Choisir une condition de paiement Facture</option>
                            @foreach ($conditon_paiements as $conditon_paiement)
                            @if ($client->conditon_paiement_facture_id != null && $client->conditon_paiement_facture_id
                            == $conditon_paiement->conditon_paiement_id)
                            <option value="{{ $conditon_paiement->conditon_paiement_id }}" selected="selected">
                                {{ $conditon_paiement->texte }}</option>
                            @else
                            <option value="{{ $conditon_paiement->conditon_paiement_id }}">
                                {{  $conditon_paiement->texte }}</option>
                            @endif
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
<script src="{{ url('js/jquery.min.js')}}"></script>
<script src="{{ url('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ url('js/modernizr.min.js')}}"></script>
<script src="{{ url('js/detect.js')}}"></script>
<script src="{{ url('js/fastclick.js')}}"></script>
<script src="{{ url('js/jquery.slimscroll.js')}}"></script>
<script src="{{ url('js/jquery.blockUI.js')}}"></script>
<script src="{{ url('js/waves.js')}}"></script>
<script src="{{ url('js/jquery.nicescroll.js')}}"></script>
<script src="{{ url('js/jquery.scrollTo.min.js')}}"></script>
<!--Morris Chart-->
<script src="{{ url('plugins/morris/morris.min.js')}}"></script>
<script src="{{ url('plugins/raphael/raphael.min.js')}}"></script>
<!-- dashboard js -->
<script src="{{ url('pages/dashboard.int.js')}}"></script>
<!-- App js -->
<script src="{{ url('js/app.js')}}"></script>
@endsection