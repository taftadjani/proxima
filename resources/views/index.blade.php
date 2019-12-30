@extends('layouts.app_with_side_bar')


@section('contentTitle')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Tableau de bord</h4>
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
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary mini-stat text-white">
            <div class="p-3 mini-stat-desc">
                <div class="clearfix">
                    <h6 class="text-uppercase mt-0 float-left text-white-50">Orders</h6>
                    <h4 class="mb-3 mt-0 float-right">1,587</h4>
                </div>
                <div><span class="badge badge-light text-info">+11% </span><span class="ml-2">From previous
                        period</span></div>
            </div>
            <div class="p-3">
                <div class="float-right"><a target="_self" href="#" class="text-white-50"><i
                            class="mdi mdi-cube-outline h5"></i></a></div>
                <p class="font-14 m-0">Last : 1447</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-info mini-stat text-white">
            <div class="p-3 mini-stat-desc">
                <div class="clearfix">
                    <h6 class="text-uppercase mt-0 float-left text-white-50">Revenue</h6>
                    <h4 class="mb-3 mt-0 float-right">$46,785</h4>
                </div>
                <div><span class="badge badge-light text-danger">-29% </span><span class="ml-2">From previous
                        period</span></div>
            </div>
            <div class="p-3">
                <div class="float-right"><a target="_self" href="#" class="text-white-50"><i
                            class="mdi mdi-buffer h5"></i></a></div>
                <p class="font-14 m-0">Last : $47,596</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-pink mini-stat text-white">
            <div class="p-3 mini-stat-desc">
                <div class="clearfix">
                    <h6 class="text-uppercase mt-0 float-left text-white-50">Average Price</h6>
                    <h4 class="mb-3 mt-0 float-right">15.9</h4>
                </div>
                <div><span class="badge badge-light text-primary">0% </span><span class="ml-2">From previous
                        period</span></div>
            </div>
            <div class="p-3">
                <div class="float-right"><a target="_self" href="#" class="text-white-50"><i
                            class="mdi mdi-tag-text-outline h5"></i></a></div>
                <p class="font-14 m-0">Last : 15.8</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success mini-stat text-white">
            <div class="p-3 mini-stat-desc">
                <div class="clearfix">
                    <h6 class="text-uppercase mt-0 float-left text-white-50">Product Sold</h6>
                    <h4 class="mb-3 mt-0 float-right">1890</h4>
                </div>
                <div><span class="badge badge-light text-info">+89% </span><span class="ml-2">From previous
                        period</span></div>
            </div>
            <div class="p-3">
                <div class="float-right"><a target="_self" href="#" class="text-white-50"><i
                            class="mdi mdi-briefcase-check h5"></i></a></div>
                <p class="font-14 m-0">Last : 1776</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">Derniers documents utilisés :</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Status</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">#14567</th>
                                <td>Michael Mitchell</td>
                                <td>14 Jan</td>
                                <td>$74</td>
                                <td>2</td>
                                <td>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 89%;"
                                            aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>$148</td>
                            </tr>
                            <tr>
                                <th scope="row">#14568</th>
                                <td>Dennis Cervantes</td>
                                <td>15 Jan</td>
                                <td>$72</td>
                                <td>2</td>
                                <td>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 64%;"
                                            aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>$144</td>
                            </tr>
                            <tr>
                                <th scope="row">#14569</th>
                                <td>Bernard Moats</td>
                                <td>16 Jan</td>
                                <td>$86</td>
                                <td>1</td>
                                <td>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>$86</td>
                            </tr>
                            <tr>
                                <th scope="row">#14570</th>
                                <td>Patrick Esquivel</td>
                                <td>17 Jan</td>
                                <td>$59</td>
                                <td>2</td>
                                <td>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 64%;"
                                            aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>$118</td>
                            </tr>
                            <tr>
                                <th scope="row">#14571</th>
                                <td>Michael Barger</td>
                                <td>18 Jan</td>
                                <td>$62</td>
                                <td>2</td>
                                <td>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>$124</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<!-- end row -->
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Chiffres d'affaires HT/TTC - Règlements</h4>
                <div class="row">
                    <div class="col-lg-8">
                        <div id="morris-line-example" class="morris-chart" style="height: 300px"></div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <h5 class="font-14 mb-5">Yearly Sales Report</h5>
                            <div>
                                <h5 class="mb-3">2018 : $19523</h5>
                                <p class="text-muted mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus
                                    qui blanditiis atque quos dolores et</p><a target="_self" href="#"
                                    class="btn btn-primary btn-sm">Read more <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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