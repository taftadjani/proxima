@extends('layouts.app_with_side_bar')


@section('contentTitle')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Liste des Fournisseurs</h4>
                </div>

            </div>
            <!-- end row -->
        </div>
        <!-- end page-title-box -->
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nom & prénom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Fax</th>
                            <th>Adresse</th>
                            <th>Code Postal</th>
                            <th>Delete</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($fournisseurs as $fournisseur)
                        <tr>
                            <td>{{ $fournisseur->nom }} {{ $fournisseur->prenom }}</td>
                            <td>
                                {{ $fournisseur->email }}
                            </td>
                            <td>{{ $fournisseur->telephone }}</td>
                            <td>{{ $fournisseur->fax }}</td>
                            <td>
                                {{ $fournisseur->adresse }}
                            </td>
                            <td>{{ $fournisseur->code_postal }}</td>
                            <td>

                                <a href="{{ url('delete_fournisseur') }}/{{ $fournisseur->fournisseur_id }}"
                                    class="text-danger " target="_self">
                                    <div class="text-center py-md-1 px-md-1 font-weight-bold font-italic">Delete
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('modify_fournisseur') }}?id={{ $fournisseur->fournisseur_id }}"
                                    class="text-warning " target="_self">
                                    <div class="text-center py-md-1 px-md-1 font-weight-bold font-italic">Modifier
                                    </div>
                                </a>
                            </td>
                        </tr>
                        @endforeach




                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end col -->
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
<!-- Required datatable js -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="plugins/datatables/dataTables.buttons.min.js"></script>
<script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="plugins/datatables/jszip.min.js"></script>
<script src="plugins/datatables/pdfmake.min.js"></script>
<script src="plugins/datatables/vfs_fonts.js"></script>
<script src="plugins/datatables/buttons.html5.min.js"></script>
<script src="plugins/datatables/buttons.print.min.js"></script>
<script src="plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="plugins/datatables/dataTables.responsive.min.js"></script>
<script src="plugins/datatables/responsive.bootstrap4.min.js"></script>
<!-- Datatable init js -->
<script src="pages/datatables.init.js"></script>
<!-- App js -->
<script src="js/app.js"></script>
@endsection