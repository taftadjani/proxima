@extends('layouts.app_with_side_bar')


@section('contentTitle')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">
                        Liste des Clients/Prospects
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
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nom & Prenom</th>
                            <th>Ville</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Civilite</th>
                            <th>Fax</th>
                            <th>Delete</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->nom }} {{ $client->prenom }}</td>
                            <td>
                                @foreach ($villes as $ville)
                                @if ($ville->ville_id == $client->ville_id)
                                {{ $ville->nom}}
                                @endif
                                @endforeach
                            </td>
                            <td>{{ $client-> email}}</td>
                            <td>{{ $client-> telephone}}</td>
                            <td>
                                @foreach ($civilites as $civilite)
                                @if ($civilite->civilite_id == $client->civilite_id)
                                {{ $civilite->libelle }}
                                @endif
                                @endforeach
                            </td>
                            <td>{{ $client->fax }}</td>
                            <td>

                                <a href="{{ url('delete_client') }}/{{ $client->client_id }}" class="text-danger " target="_self">
                                    <div class="text-center py-md-1 px-md-1 font-weight-bold font-italic">Delete
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('modify_client') }}?id={{ $client->client_id }}" class="text-warning "
                                    target="_self">
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
<!--Morris Chart-->
<script src="morris/morris.min.js"></script>
<script src="raphael/raphael.min.js"></script>
<!-- dashboard js -->
<script src="pages/dashboard.int.js"></script>
<!-- App js -->
<script src="js/app.js"></script>
@endsection