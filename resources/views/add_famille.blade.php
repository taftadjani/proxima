@extends('layouts.app_with_side_bar')


@section('contentTitle')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">
                        Ajouter une Famille
                    </h4>
                </div>

                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title-box -->
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
                    <h4 class="mt-0 header-title">Fiche Famille</h4>
                    <p class="text-muted m-b-30">Ajouter une Famille</p>
                    <form action="{{ route('Famille.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-lg-6">
                                <label>Code</label>
                                <input class="form-control" type="text" placeholder="Code" name="code" required>
                            </div>

                            <div class="col-lg-6">
                                <label>Libellé</label>
                                <input class="form-control" type="text" name="libelle" placeholder="Libellé" required>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>Taxe par défaut</label>
                                <select class="custom-select" name="taxe">
                                    <option selected="selected" value="-1">Choisir le taxe par
                                        défaut
                                    </option>
                                    @foreach ($taxes as $taxe)
                                    <option value="{{ $taxe->taxe_id }}">{{ $taxe->libelle }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <center>
                            <button type="submit"
                                class="btn btn-outline-success waves-effect waves-light m-t-15">Valider&nbsp;&nbsp;&nbsp;&nbsp;<i
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

<div class="row">
    <div class="col-lg-4" style="width: 100px;"></div>
    <div class="col-9">
        <div class="container-fluid">
            <div class="card m-b-10" style="width: 100%">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Liste des familles</h4>

                                    <table id="mainTable" class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Libellé</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($familles as $famille)
                                            <tr>
                                                <td>{{$famille->code}}</td>
                                                <td>{{$famille->libelle}}</td>
                                            </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

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
<script src="plugins/tiny-editable/mindmup-editabletable.js"></script>
<script src="plugins/tiny-editable/numeric-input-example.js"></script>

<script>
    $('#mainTable').editableTableWidget().find('td:first').focus();
</script>



<!-- dashboard js -->
<script src="pages/dashboard.int.js"></script>



<!-- App js -->
<script src="js/app.js"></script>
@endsection