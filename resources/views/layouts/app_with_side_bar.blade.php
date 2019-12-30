@extends('layouts.app')

@section('sideBar')
<div class="sidebar-inner slimscrollleft">
    <div id="sidebar-menu">
        <ul>
            <li class="menu-title">Main</li>
            <li><a target="_self" href="{{ url('/index') }}" class="waves-effect"><i class="dripicons-home"></i>
                    <span>Tableau de bord <span class="badge badge-success badge-pill float-right"></span></span></a>
            </li>

            <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i
                        class="dripicons-document"></i> <span>Clients </span><span class="menu-arrow float-right"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/ajout_client') }}" target="_self">Ajouter un client/prospect</a></li>
                    <li><a href="{{ url('/liste_clients') }}" target="_self">Liste des Clients</a></li>
                </ul>
            </li>

            <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i
                        class="dripicons-document"></i> <span>Fournisseurs </span><span
                        class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/ajout_fournisseur') }}" target="_self">Ajouter un Fournisseur</a></li>
                    <li><a href="{{ url('/liste_fournisseurs') }}" target="_self">Liste des Fournisseurs</a></li>
                </ul>
            </li>

            <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i
                        class="dripicons-document"></i> <span>Factures </span><span class="menu-arrow float-right"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/ajout_factures') }}" target="_self">Ajouter une facture</a></li>
                    <li><a href="{{ url('/liste_factures') }}" target="_self">Liste des Factures</a></li>

                </ul>
            </li>

            <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i
                        class="dripicons-document"></i> <span>Devis</span><span class="menu-arrow float-right"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/ajout_devis') }}" target="_self">Ajouter un Devis</a></li>
                    <li><a href="{{ url('/liste_devis') }}" target="_self">Liste des devis</a></li>

                </ul>
            </li>

            <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i
                        class="dripicons-document"></i> <span>Bons de livraison </span><span
                        class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/ajout_bl') }}" target="_self">Ajouter un BL</a></li>
                    <li><a href="{{ url('/liste_bl') }}" target="_self">Liste des BL</a></li>

                </ul>
            </li>

            <li class="has_sub"><a target="_self" href="javascript:void(0);" class="waves-effect"><i
                        class="dripicons-document"></i> <span>Avoirs </span><span class="menu-arrow float-right"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/ajout_avoir') }}" target="_self">Ajouter un avoir</a></li>
                    <li><a href="{{ url('/liste_avoirs') }}" target="_self">Liste des avoirs</a></li>

                </ul>
            </li>



            <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i>
                    <span>Gestion des produits </span><span class="menu-arrow float-right"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/ajout_produit') }}" target="_self">Ajouter un Produit</a></li>
                    <li><a href="{{ url('/liste_produits') }}" target="_self">Liste des Produits</a></li>
                    <li><a href="{{ url('/ajout_famille') }}" target="_self">Ajouter une Famille</a></li>
                </ul>
            </li>

            <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i>
                    <span>Gestion de stocks </span><span class="menu-arrow float-right"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/ajout_stock') }}" target="_self">Ajouter un stock</a></li>
                    <li><a href="{{ url('/liste_stock') }}" target="_self">Liste des Stocks</a></li>
                    <li><a href="{{ url('/gest_commandes') }}" target="_self">Gestion commande fournisseurs</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <div class="clearfix"></div>
</div>
@endsection