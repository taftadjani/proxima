@extends('layouts.app_with_side_bar')


@section('contentTitle')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Ajout des Fournisseurs</h4>
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
                    <h4 class="mt-0 header-title">Fiche Fournisseur</h4>
                    <p class="text-muted m-b-30">Ajouter un fournisseur</p>
                    <form action="Fournisseur" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group"><label for="example-text-input">Raison
                                sociale</label>
                            <input class="form-control" type="text" placeholder="Raison sociale" id="example-text-input"
                                name="raison_sociale">
                        </div>
                        <div class="form-group"><label>Code</label>
                            <input class="form-control" type="text" placeholder="Code" name="code" required>
                        </div>
                        <div class="form-group"><label>Nom</label>
                            <input class="form-control" type="text" placeholder="Nom" name="nom" required>
                        </div>
                        <div class="form-group"><label>Prénom</label>
                            <input class="form-control" type="text" placeholder="prénom" name="prenom" required>
                        </div>
                        <div class="form-group"><label>Adresse</label>
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
                                    <option value="{{ $ville->ville_id }}">{{ $ville->nom}}</option>
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
<script src="plugins/morris/morris.min.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<!-- dashboard js -->
<script src="pages/dashboard.int.js"></script>
<!-- App js -->
<script src="js/app.js"></script>
@endsection