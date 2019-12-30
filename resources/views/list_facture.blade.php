@extends('layouts.app_with_side_bar')


@section('contentTitle')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Liste des Factures</h4>
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
                            <th>Numéro</th>
                            <th>client</th>
                            <th>date Création</th>

                            <th>date Paiement</th>
                            <th>Remise globale </th>
                            <th>Impression</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($factures as $fact)
                        <?php
                                         $idp=$fact->client_id;
                                         $client=DB::table('clients')
                                         ->where('client_id', $idp)
                                         ->get();
                                    ?>
                        @foreach($client as $c)
                        <tr id="fact_{{$fact->facture_id}}">
                            <td>{{$fact->numero}}</td>
                            <td>{{$c->prenom}} {{$c->nom}}</td>
                            <td>{{$fact->date_creation}}</td>

                            <td>{{$fact->date_paiement}}</td>
                            <td>{{$fact->remise_globale}}</td>
                            <td>
                                <div class="table-data-feature" style="justify-content: flex-start">

                                    <a class="item" data-toggle="tooltip" data-placement="top"
                                        id="{{$fact->facture_id}}" name="factid"
                                        href='/extras?idFacture={{$fact->facture_id}}&&idClient={{$c->client_id}}'
                                        class="btn btn-xs btn-info pull-right">
                                        <i class="fa fa-file"></i>

                                    </a>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    <a class="item" data-toggle="tooltip" data-placement="top"
                                        id="{{$fact->facture_id}}" name="factid"
                                        href='/code_edit?idFacture={{$fact->facture_id}}&&idClient={{$c->client_id}}'
                                        class="btn btn-xs btn-info pull-right">
                                        <i class="fas fa-pencil-alt"></i>

                                    </a>

                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    <a class="item" data-toggle="tooltip" data-placement="top"
                                        id="{{$fact->facture_id}}" name="factid"
                                        href='/code?idFacture={{$fact->facture_id}}&&idClient={{$c->client_id}}'
                                        class="btn btn-xs btn-info pull-right">
                                        <i class="fa fa-remove" style="font-size:20px"></i>

                                    </a>


                                </div>


                            </td>
                        </tr>
                        @endforeach
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

<script type="text/javascript">
    function codeModif(){
           var j=document.getElementById('code_modif').value;
           window.location.href = "/ajout_factures";
       }
                $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
               
                var roomNumber = $(this).closest('tr').data('id');
                $(".modal-body #idfact").val(roomNumber);

            });
            });
    
       
</script>

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