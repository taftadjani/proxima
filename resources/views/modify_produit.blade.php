@extends('layouts.app_with_side_bar')


@section('contentTitle')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Modifier le Produit</h4>
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
                    <h4 class="mt-0 header-title">Fiche Produit</h4>
                    <p class="text-muted m-b-30">Modifier un Produit</p>
                    <form action="{{ url('modify_produit')}}/{{ $produit->produit_id }}" method="PUT|PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Désignation</label>
                            <textarea id="textarea" class="form-control" name="designation" maxlength="225"
                                placeholder="Désignation" rows="3">{{ $produit->designation }}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Référence produit</label>
                                <input class="form-control" type="text" placeholder="Référence produit"
                                    name="reference_produit" value='{{ $produit->reference }}' id="example-text-input"
                                    required>
                            </div>
                            <div class="col-lg-6">
                                <label>Quantité en stock</label>
                                <input class="form-control" type="number" name="quantite"
                                    placeholder="Quantité en stock(0 default)" value="{{ $produit->quantite_stock }}"
                                    id="example-text-input">
                            </div>
                        </div>


                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-lg-6">
                                <label>Famille</label>
                                <select class="custom-select" name="famille">
                                    <option value="-1">Choisir une famille</option>
                                    @foreach ($familles as $famille)
                                    @if ($produit->famille_id == $famille->famille_id )

                                    <option value="{{ $famille->famille_id }}" selected="selected">
                                        {{ $famille->libelle }}</option>

                                    @else
                                    <option value="{{ $famille->famille_id }}">{{ $famille->libelle }}</option>

                                    @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <label>Fournisseur</label>
                                <select class="custom-select" name="fournisseur">
                                    <option selected="selected" value="-1">Choisir un fournisseur</option>
                                    @foreach ($fournisseurs as $fournisseur)

                                    @if ($produit->fournisseur_id == $fournisseur->fournisseur_id )


                                    <option value="{{ $fournisseur->fournisseur_id }}" selected="selected">
                                        {{ $fournisseur->nom }} {{ $fournisseur->prenom }}</option>
                                    @else

                                    <option value="{{ $fournisseur->fournisseur_id }}">{{ $fournisseur->nom }}
                                        {{ $fournisseur->prenom }}</option>
                                    @endif

                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>Activité</label>
                                <select class="custom-select" name="activite">
                                    @if ($produit->activite == 'Marchandise')
                                    <option value="noActivity">Choisir une Activité</option>
                                    <option value="Marchandise" selected="selected">Marchandise</option>
                                    <option value="Service">Service</option>
                                    @else
                                    @if ($produit->activite == 'Service')
                                    <option value="noActivity">Choisir une Activité</option>
                                    <option value="Marchandise">Marchandise</option>
                                    <option selected="selected" value="Service">Service</option>
                                    @else
                                    <option selected="selected" value="noActivity">Choisir une Activité</option>
                                    <option value="Marchandise">Marchandise</option>
                                    <option value="Service">Service</option>
                                    @endif

                                    @endif
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>Unité</label>
                                <select class="custom-select" name="unite">
                                    <option selected="selected" value="-1">Choisir l'unité</option>
                                    @foreach ($unites as $unite)
                                    @if ($unite->unite_id == $produit->unite_id)

                                    <option selected="selected" value="{{ $unite->unite_id }}">{{ $unite->libelle }}
                                    </option>
                                    @else
                                    <option value="{{ $unite->unite_id }}">{{ $unite->libelle }}</option>

                                    @endif
                                    @endforeach
                                </select>
                            </div>

                            {{--   --}}
                        </div>




                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-lg-6">
                                <label>Prix D'achat</label>
                                <input class="form-control" type="number" name="prix_achat" placeholder="Prix D'achat"
                                    required value="{{ $produit->prix_achat }}">
                            </div>

                            <div class="col-lg-6">
                                <label>Prix Vente</label>
                                <input class="form-control" type="number" placeholder="Prix Vente"
                                    value="{{ $produit->prix_vente }}" name="prix_vente" required>
                            </div>

                        </div>
                        <div class="row" style="margin-bottom: 30px;">


                            <div class="col-lg-6">
                                <label>Taxe</label>
                                <select class="custom-select" name="taxe">
                                    <option value="-1">Choisir le taxe par defaut
                                    </option>
                                    @foreach ($taxes as $taxe)
                                    @if ($taxe->taxe_id == $produit->taxe_id)

                                    <option selected="selected" value="{{ $taxe->taxe_id }}">{{ $taxe->libelle }}
                                    </option>
                                    @else

                                    <option value="{{ $taxe->taxe_id }}">{{ $taxe->libelle }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>Marge HT </label>
                                <input class="form-control" type="number" placeholder="Marge HT" name="marge_ht"
                                    value="{{ $produit->marge_ht }}">
                            </div>
                        </div>




                        {{-- 


                                                <div class="form-group"><label>Note</label> <textarea id="textarea"
                                                        class="form-control"></textarea></div> --}}

                        <div class="form-group"><label>Photo du produit</label>
                            <div class="row">
                                <div class="col-sm-2 imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Télécharger<input type="file" class="uploadFile img" value="Upload Photo"
                                            name="images" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                </div><!-- col-2 -->
                                {{-- <i class="fa fa-plus imgAdd"></i> --}}
                            </div><!-- row -->
                        </div>


                        <div class="row" style="margin-bottom: 30px;">
                            {{-- <div class="col-lg-6">
                                                        <label>Marge totale en % :</label>
                                                        <input class="form-control" type="text" value="">
                                                    </div> --}}

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


<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('js/modernizr.min.js')}}"></script>
<script src="{{url( 'js/detect.js' )}}"></script>
<script src="{{url('js/fastclick.js')}}"></script>
<script src="{{url('js/jquery.slimscroll.js')}}"></script>
<script src="{{url('js/jquery.blockUI.js')}}"></script>
<script src="{{url('js/waves.js')}}"></script>
<script src="{{url('js/jquery.nicescroll.js')}}"></script>
<script src="{{ url('js/jquery.scrollTo.min.js') }}"></script>




<!-- dashboard js -->
<script src="{{asset('pages/dashboard.int.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>



<script>
    $(document).ready(function() {
            $(".custom-select").select2();
        });
</script>
<!-- App js -->
<script src="{{asset('js/app.js')}}"></script>
<script>
    $(".imgAdd").click(function() {
            $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Télécharger<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
        });
        $(document).on("click", "i.del", function() {
            $(this).parent().remove();
        });
        $(function() {
            $(document).on("change", ".uploadFile", function() {
                var uploadFile = $(this);
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test(files[0].type)) { // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function() { // set image data as background of div
                        //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                        uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+ this.result + ")");
                    }
                }

            });
        });
</script>


@endsection