@extends('layouts.app_with_side_bar')


@section('contentTitle')

@endsection

@section('content')
<form id="form" action="{{ url('/modif_devis') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @foreach($facture as $fact)
    <div class="table-wrapper">
        <div class="card m-b-10" style="width: 100%">
            <div class="card-body">
                <input name="idfacture" id="idfacture" class="form-control" type="text" value="{{$fact->devis_id}}"
                    hidden readOnly />

                <h4 class="mt-0 header-title">Choisir un Client</h4>
                <?php
                                           $cl = DB::table("clients")
                                           ->where("client_id",$fact->client_id)
                                           ->select('clients.*')
                                           ->get();
                                        ?>
                @foreach($cl as $cle)
                <div class="form-group"><label>Nom Client</label>
                    <select class="custom-select" id="client" name="client" required>
                        <option selected="selected" velue="{{$cle->client_id}}" disabled>{{$cle->prenom}} {{$cle->nom}}
                        </option>
                        @foreach($clients as $c)
                        <option value={{$c->client_id}}> {{$c->prenom}} {{$c->nom}}</option>
                        @endforeach
                    </select>
                </div>
                @endforeach

                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <label>Etat</label>
                        <input name="etat" id="etat" class="form-control" type="text" value="En Cours" readOnly />
                    </div>
                    <?php
                                               $y=date('Y')
                                            ?>
                    <div class="col-lg-6">
                        <label>Numéro</label>
                        <input id="numero" name="numero" class="form-control" type="text" value="{{$fact->numero}}"
                            readOnly>
                    </div>
                </div>

                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <div class="form-group"><label>Date Création</label>
                            <div>
                                <div class="input-group"><input name="date_creation" type="text" class="form-control"
                                        value="{{$fact->date_creation}}" id="datepicker-autoclose">

                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group"><label>Date Fermeture</label>
                            <div>
                                <div class="input-group"><input name="date_fermeture" type="text" class="form-control"
                                        value="{{$fact->date_fermeture}}" id="datepicker">
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text"><i
                                                class="mdi mdi-calendar"></i></span></div>
                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">

                        <div class="form-group"><label>Acceptation</label>
                            <div>
                                <div class="input-group">
                                    <select class="form-control" name="accept" id="accept" required>
                                        <option selected="selected" value="{{$fact->acceptation}}" disabled>
                                            {{$fact->acceptation}}</option>
                                        <option value="En attente d'acceptation">En attente d'acceptation</option>
                                        <option value="Accepte">Accepté</option>
                                        <option value="Refusé">Refusé</option>

                                    </select>
                                    <div class="input-group-append bg-custom b-0"></div>
                                </div>


                                <!-- input-group -->
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <div class="form-group"><label>Date Acceptation</label>
                            <div>
                                <div class="input-group">
                                    <input id="date_acceptation" name="date_acceptation" class="form-control"
                                        type="text" value="{{$fact->date_acceptation}}" readOnly>


                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                    </div>
                </div>



















                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <div class="form-group"><label>Date Echéance</label>
                            <div>
                                <div class="input-group"><input name="date_validite" type="text" class="form-control"
                                        value="{{$fact->date_validite}}" id="datepicker-multiple-date">
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text"><i
                                                class="mdi mdi-calendar"></i></span></div>
                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group"><label>Imprimé</label>
                            <div>
                                <div class="input-group">
                                    <select class="form-control" name="imprime" id="imprime" required>
                                        <option value="{{$fact->impression}}" selected disabled>{{$fact->impression}}
                                        </option>
                                        <option value="Jamais">Jamais</option>
                                        <option value="Imprime">Imprimé</option>
                                        <option value="1er rappel">1er rappel</option>
                                        <option value="2eme rappel">2ème rappel</option>
                                        <option value="dernier rappel">Dernier rappel</option>
                                    </select>
                                    <div class="input-group-append bg-custom b-0"></div>
                                </div>

                                <div class="col">
                                    <?php $today=date("Y-n-j");  ?>
                                    <input name="date_impression" id="date_impression" class="form-control" type="text"
                                        value="{{$fact->date_impression}}" readOnly>

                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                    </div>



                </div>
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <div class="form-group"><label>Envoi</label>
                            <div>
                                <div class="input-group">
                                    <select class="form-control" name="envoi" id="envoi" required>
                                        <option value="{{$fact->envoi}}" selected disabled>{{$fact->envoi}}</option>
                                        <option value="Jamais Envoye">Jamais Envoyé</option>
                                        <option value="Courriel">Courriel</option>
                                        <option value="Email">Email</option>
                                        <option value="Remise en main propre">Remise en main propre</option>
                                    </select>
                                    <div class="input-group-append bg-custom b-0"></div>
                                </div>
                                <div class="col">
                                    <input id="date_envoi" name="date_envoi" class="form-control" type="text"
                                        value="{{$fact->date_envoi}}}" readOnly>
                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group"><label>Payée</label>
                            <div>
                                <div class="input-group">
                                    <select class="form-control" name="payee" id="payee" required>

                                        <option value="Non Regle">Non Réglé</option>
                                        <option value="Regle">Réglé</option>
                                    </select>
                                    <div class="input-group-append bg-custom b-0"></div>
                                </div>
                                <div class="col">
                                    <input id="date_payement" name="date_payement" class="form-control" type="text"
                                        value="{{$fact->date_paiement}}" readOnly>
                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                    </div>



                </div>
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <div class="form-group"><label>Paiement par défaut</label>
                            <div>
                                <div class="input-group">
                                    <select class="form-control" id="payement_par_defaut" name="payement_par_defaut"
                                        required>
                                        <option value="{{$fact->paiement}}" selected disabled>{{$fact->paiement}}
                                        </option>
                                        <option value="Espece">Espèce</option>
                                        <option value="Cheque">Chèque</option>
                                        <option value="Virement">Virement</option>
                                        <option value="Carte Bancaire">Carte Bancaire</option>
                                        <option value="Traite">Traite</option>
                                        <option value="Paiement Comptant">Paiement Comptant</option>
                                    </select>
                                    <div class="input-group-append bg-custom b-0"></div>
                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group"><label>Tarif du document</label>
                            <div>
                                <div class="input-group">
                                    <?php
                                                             $tarif = DB::table("tarifs")
                                                             ->where("tarif_id",$fact->tarif_id)
                                                             ->select('tarifs.*')
                                                             ->get();

                                                             $condit = DB::table("condition_paiements")
                                                             ->where("condition_paiement_id",$fact->condition_paiement_id)
                                                             ->select('condition_paiements.*')
                                                             ->get();

                                                             $prod_fact = DB::table("devis_produits")
                                                             ->where("devis_id",$fact->devis_id)
                                                             ->select('devis_produits.*')
                                                             ->get();
                                                          
                                                        ?>
                                    <select class="form-control" id="tarif" name="tarif" required>
                                        @foreach($tarif as $t)
                                        <option value='{{$c->tarif_id}}' selected disabled>{{$t->libelle}}</option>
                                        @foreach($tarifs as $c)
                                        <option value='{{$c->tarif_id}}'> {{$c->libelle}} </option>
                                        @endforeach
                                        @endforeach

                                    </select>
                                    <div class="input-group-append bg-custom b-0"></div>
                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                    </div>



                </div>

                <div class="row" style="margin-bottom: 30px;">


                    <div class="col-lg-6">
                        <label>Remise(%)</label>
                        <div class="col">
                            <input class="form-control" id="remiseTotal" name="remiseTotal" type="text"
                                onkeypress="javascript:NumOnly(this.value)" onpaste="javascript:return false"
                                value="{{$fact->remise_globale}}">
                        </div>


                    </div>


                    <div class="col-lg-6">
                        <div class="form-group"><label>Condition de paiement</label>
                            <div>
                                <div class="input-group">
                                    <select class="form-control" id="condition" name="condition" required>
                                        @foreach($condit as $condit)
                                        <option value='{{$condit->condition_paiement_id}}' selected disabled>
                                            {{$condit->texte}}</option>
                                        @foreach($condition as $c)
                                        <option value='{{$c->condition_paiement_id}}'> {{$c->texte}} </option>
                                        @endforeach
                                        @endforeach
                                    </select>
                                    <div class="input-group-append bg-custom b-0"></div>
                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-6">
                        <label>Observations</label>
                        <textarea name="observation" id="observation" class="form-control" maxlength="225"
                            rows="3">{{$fact->annotation}}</textarea>
                    </div>

                    <div class="col-lg-6">
                        <label>Annotations</label>
                        <textarea name="annotation" id="annotation" class="form-control" maxlength="225"
                            rows="3">{{$fact->observation}}</textarea>
                    </div>
                </div>



            </div>
        </div>

        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Détails <b>Devis</b></h2>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-info add-new" onclick="javascript:ajoutLigne()"><i
                                class="fa fa-plus"></i> Ajouter ligne</button>
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-info add-neww"><i class="fa fa-check"></i> Valider</button>
                    </div>

                </div>
                <br>
                <?php $j=1?>
                <table id="facture_table" name="facture_table" class="table table-bordered">
                    <thead>
                        <tr>

                            <th>Désignation</th>
                            <th>PU HT</th>
                            <th>Qté</th>
                            <th>remise%</th>
                            <th>Activité</th>
                            <th>Total HT</th>
                            <th>Actions</th>

                        </tr>

                        @foreach($prod_fact as $pf)

                        <?php     $product = DB::table("produits")
                                                             ->where("produit_id",$pf->produit_id)
                                                             ->select('produits.*')
                                                             ->get(); 
                                                             
                                                             ?>



                        <tr>



                            <td>




                                <select name='prodj{{$j}}' id='prodj{{$j}}' class="form-control "
                                    onchange="javascript:hij('{{$j}}')" required>
                                    @foreach($product as $cc)
                                    <option selected="selected" value="{{$cc->produit_id}}" disabled>
                                        {{$cc->designation}}</option>
                                    @foreach($produits as $c)
                                    <option value='{{$c->produit_id}}'> {{$c->designation}}</option>
                                    @endforeach

                                </select>

                                <input class="form-control" id="id_prod_fact{{$j}}" name="id_prod_fact{{$j}}"
                                    type="text" value="{{$pf->devis_produit_id}}" hidden>


                            </td>


                            <td>
                                <input id='puj{{$j}}' name='puj{{$j}}' class="form-control" type="text"
                                    value="{{$cc->prix_vente}}" readOnly>
                            </td>
                            <td>
                                <input id='qtej{{$j}}' name='qtej{{$j}}' class="form-control" type="text"
                                    onkeypress="javascript:NumOnly(this.value)" onpaste="javascript:return false"
                                    onkeyup="javascript:calculHtj('{{$j}}')" value="{{$pf->quantite}}">
                            </td>
                            <td>
                                <input id="remisej{{$j}}" name="remisej{{$j}}" class="form-control" type="text"
                                    onkeypress="javascript:NumOnly(this.value)" onpaste="javascript:return false"
                                    onkeyup="javascript:calculRemisej('{{$j}}')" value="{{$pf->remise}}">
                            </td>
                            <td>

                                <select name='activitej{{$j}}' id='activitej{{$j}}' class="form-control " required>
                                    <option selected="selected" value="{{$cc->activite}}" disabled>{{$pf->activite}}
                                    </option>

                                    <option value='marchandise'> marchandise</option>
                                    <option value='service'> service</option>

                                </select>
                            </td>
                            <td>
                                <?php
                                                        $t=$cc->prix_vente * $pf->quantite;
                                                        $r=$t-(($t * $pf->remise)/100);
                                                    ?>
                                <input id="totalHTj{{$j}}" name="totalHT{{$j}}" class="form-control" type="text"
                                    value="{{$r}}" readOnly>
                            </td>
                            <td>
                                <a target="_self" class="add" title="Add" data-toggle="tooltip"><i
                                        class="material-icons">&#xE03B;</i></a>
                                <a target="_self" class="edit" title="Edit" data-toggle="tooltip"><i
                                        class="material-icons">&#xE254;</i></a>
                                <a target="_self" class="delete" title="Delete"><i
                                        class="material-icons">&#xE872;</i></a>
                            </td>
                            <?php $j=$j+1; ?>
                            @endforeach

                        </tr>
                        @endforeach
                    </thead>
                    <tbody>

                    </tbody>
                </table>

                <input id="nblp" name="nblp" class="form-control" type="text" value="<?php echo count($prod_fact) ?>"
                    hidden>

                <table id="fact" name="fact" class="table table-bordered">
                    <thead>
                        <tr>



                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <center>

                </center>

            </div>
        </div>
    </div>
    <input class="form-control" id="nblignes" name="nblignes" type="text" value="0" hidden>
    @endforeach
</form>
<!-- container fluid -->
@endsection



@section('scriptrender')

<script type="text/javascript">
    var total=0;
        var nbl=1;
         function ajoutLigne(){
         
            var table = document.getElementById("fact");
            var i = table.rows.length; 
           
            var row = table.insertRow(i);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);
          //  var element2 = document.createElement("select");

          
               
           // cell1.appendChild(element2); 
           cell1.innerHTML = "<select name='prod"+i+"' id='prod"+i+"' class='form-control ' onchange='javascript:hi("+i+")' required ><option selected='selected' disabled>Choisir un produit</option>@foreach($produits as $c)<option id='{{$c->produit_id}}' value='{{$c->produit_id}}' > {{$c->designation}}</option>@endforeach </select>";
            cell2.innerHTML = " <input id='pu"+i+"' name='pu"+i+"' class='form-control' type='text' readOnly>";
            cell3.innerHTML = " <input id='qte"+i+"'  name='qte"+i+"' class='form-control' type='text'  onkeypress='javascript:NumOnly(this.value)' onpaste='javascript:return false' onkeyup='javascript:calculHt("+i+")' required>"
            cell4.innerHTML = " <input id='remise"+i+"' name='remise"+i+"' class='form-control'  type='text'  onkeypress='javascript:NumOnly(this.value)' onpaste='javascript:return false' onkeyup='javascript:calculRemise("+i+")' required>";
            cell5.innerHTML = " <select name='activite"+i+"' id='activite"+i+"' class='form-control ' required > <option selected='selected' disabled>Choisir une activité</option> <option  value='marchandise' > marchandise</option> <option  value='service' > service</option>;</select> ";
            cell6.innerHTML = " <input id='totalHT"+i+"' name='totalHT"+i+"' class='form-control' type='text' readOnly  >";
            cell7.innerHTML = "<a  target='_self' class='add' title='Add' data-toggle='tooltip'><i class='material-icons'>&#xE03B;</i></a> <a  target='_self' class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a><a  target='_self' class='delete' title='Delete'><i class='material-icons'>&#xE872;</i></a>";
            
            document.getElementById('nblignes').value="";
           document.getElementById('nblignes').value=i;
            
           }
    
                                                    
            
         

           function NumOnly(val)
        {
        	var i,nbp,code=window.event.keyCode
        	if(((code==46) && (val.indexOf('.')!=-1)) || ((code<48 && code!=46) || (code>57)))
        	{
               window.event.returnValue=false
        	}
        }
        
        function hij(num){ 
          
            document.getElementById("puj"+num).value="";
             document.getElementById("qtej"+num).value="";
             document.getElementById("remisej"+num).value="";
             document.getElementById("totalHTj"+num).value="";
             document.getElementById("activitej"+num).value="";
           var produit_id= document.getElementById("prodj"+num).selectedIndex;
            

             $.ajax({
           
            type:"GET",
            url:"{{url('getInfo')}}?produit_id="+produit_id,
            success:function(res){               
            
                   
                
              
               $.each(res,function(data,key){
                  
                    
                    $("#puj"+num).val(data);
                });
                
                
                 
             
            }
         });

          
         }







        function hi(num){ 
          if(num==0){
             document.getElementById("pu").value="";
             document.getElementById("qte").value="";
             document.getElementById("remise").value="";
             document.getElementById("totalHT").value="";
             document.getElementById("activite").value="";
           var produit_id= document.getElementById("prod").selectedIndex;
            

             $.ajax({
           
            type:"GET",
            url:"{{url('getInfo')}}?produit_id="+produit_id,
            success:function(res){               
            
                   
                
              
               $.each(res,function(data,key){
                  
                    
                    $("#pu").val(data);
                });
                
                
                 
             
            }
         });
          } else{
            document.getElementById("pu"+num).value="";
             document.getElementById("qte"+num).value="";
             document.getElementById("remise"+num).value="";
             document.getElementById("totalHT"+num).value="";
             document.getElementById("activite"+num).value="";
           var produit_id= document.getElementById("prod"+num).selectedIndex;
            

             $.ajax({
           
            type:"GET",
            url:"{{url('getInfo')}}?produit_id="+produit_id,
            success:function(res){               
            
                   
                
              
               $.each(res,function(data,key){
                  
                    
                    $("#pu"+num).val(data);
                });
                
                
                 
             
            }
         });

          }
         }

         function calculHt(num) {
            
       
           if(num==0){
             if(document.getElementById("qte").value.length==0){
               
                document.getElementById("totalHT").value=0;
             }
             else{
             var pu=parseInt( document.getElementById("pu").value);
             var qte=parseInt( document.getElementById("qte").value);
             var remise=parseInt( document.getElementById("remise").value);
            
            document.getElementById("totalHT").value=pu*qte;}
             }
             
             if(num!=0){
                if(document.getElementById("qte"+num).value.length==0){
               
               document.getElementById("totalHT"+num).value=0;
            }
            else{
            var pu=parseInt( document.getElementById("pu"+num).value);
            var qte=parseInt( document.getElementById("qte"+num).value);
            var remise=parseInt( document.getElementById("remise"+num).value);
         
           document.getElementById("totalHT"+num).value=pu*qte;}
             }
           
}
        function calculRemise(num){
            var remise,total;
            if(num==0){
                total=parseInt( document.getElementById("totalHT").value);
            if(document.getElementById("qte").value.length==0){
               
               document.getElementById("totalHT").value=0;
            }
            if(document.getElementById("remise").value.length==0){
             //   document.getElementById("totalHT").value=total;
              //remise=0;
              var pu=parseInt( document.getElementById("pu").value);
             var qte=parseInt( document.getElementById("qte").value);
             document.getElementById("totalHT").value=pu*qte;
            }
            else{
               
                remise=parseInt( document.getElementById("remise").value);
                document.getElementById("totalHT").value=total-((total*remise)/100);
            }
            }
            if(num!=0){
                total=parseInt( document.getElementById("totalHT"+num).value);
            if(document.getElementById("qte"+num).value.length==0){
               
               document.getElementById("totalHT"+num).value=0;
            }
            if(document.getElementById("remise"+num).value.length==0){
             //   document.getElementById("totalHT").value=total;
              //remise=0;
              var pu=parseInt( document.getElementById("pu"+num).value);
             var qte=parseInt( document.getElementById("qte"+num).value);
             document.getElementById("totalHT"+num).value=pu*qte;
            }
            else{
               
                remise=parseInt( document.getElementById("remise"+num).value);
                document.getElementById("totalHT"+num).value=total-((total*remise)/100);
            }
            }
            
            
            

        }



        function calculHtj(num) {
            
    
                 if(document.getElementById("qtej"+num).value.length==0){
                
                document.getElementById("totalHTj"+num).value=0;
             }
             else{
             var pu=parseInt( document.getElementById("puj"+num).value);
             var qte=parseInt( document.getElementById("qtej"+num).value);
             var remise=parseInt( document.getElementById("remisej"+num).value);
          
            document.getElementById("totalHTj"+num).value=pu*qte;}
              
            
 }
         function calculRemisej(num){
             var remise,total;
             if(num==0){
                 total=parseInt( document.getElementById("totalHT").value);
             if(document.getElementById("qte").value.length==0){
                
                document.getElementById("totalHT").value=0;
             }
             if(document.getElementById("remise").value.length==0){
              //   document.getElementById("totalHT").value=total;
               //remise=0;
               var pu=parseInt( document.getElementById("pu").value);
              var qte=parseInt( document.getElementById("qte").value);
              document.getElementById("totalHT").value=pu*qte;
             }
             else{
                
                 remise=parseInt( document.getElementById("remise").value);
                 document.getElementById("totalHT").value=total-((total*remise)/100);
             }
             }
             if(num!=0){
                 total=parseInt( document.getElementById("totalHTj"+num).value);
             if(document.getElementById("qtej"+num).value.length==0){
                
                document.getElementById("totalHTj"+num).value=0;
             }
             if(document.getElementById("remisej"+num).value.length==0){
              //   document.getElementById("totalHT").value=total;
               //remise=0;
               var pu=parseInt( document.getElementById("puj"+num).value);
              var qte=parseInt( document.getElementById("qtej"+num).value);
              document.getElementById("totalHTj"+num).value=pu*qte;
             }
             else{
                
                 remise=parseInt( document.getElementById("remisej"+num).value);
                 document.getElementById("totalHTj"+num).value=total-((total*remise)/100);
             }
             }
             
             
             
 
         }

        
</script>

<script type="text/javascript">
    $(document).ready(function() {

            $('#datepicker-multiple-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });
            var actions = $("table td:last-child").html();
            // Append table with add row form on add new button click
            $(".add-new").click(function() {
                $(this).attr("disabled", "disabled");
                var index = $("table tbody tr:last-child").index();
                var row = '<tr>' +
                    '<td><input type="text" class="form-control" name="name" id="name"></td>' +
                    '<td><input type="text" class="form-control" name="department" id="department"></td>' +
                    '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                    '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                    '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                    '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                    '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                    '<td>' + actions + '</td>' +
                    '</tr>';
                $("table").append(row);
                $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                $('[data-toggle="tooltip"]').tooltip();
            });
            // Add row on add button click
            $(document).on("click", ".add", function() {
                var empty = false;
                var input = $(this).parents("tr").find('input[type="text"]');
                input.each(function() {
                    if (!$(this).val()) {
                        $(this).addClass("error");
                        empty = true;
                    } else {
                        $(this).removeClass("error");
                    }
                });
                $(this).parents("tr").find(".error").first().focus();
                if (!empty) {
                    input.each(function() {
                        $(this).parent("td").html($(this).val());
                    });
                    $(this).parents("tr").find(".add, .edit").toggle();
                    $(".add-new").removeAttr("disabled");
                }
            });
            // Edit row on edit button click
            $(document).on("click", ".edit", function() {
                $(this).parents("tr").find("td:not(:last-child)").each(function() {
                    $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
                });
                $(this).parents("tr").find(".add, .edit").toggle();
                $(".add-new").attr("disabled", "disabled");
            });
            // Delete row on delete button click
            $(document).on("click", ".delete", function() {
                $(this).parents("tr").remove();
                $(".add-new").removeAttr("disabled");


            });

           
     

       

      
 
 
</script>




<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://code.jquery.com/ui/3.3.1/jquery-ui.js"></script>


<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
<!-- Plugins js -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
<!-- Plugins Init js -->
<script src="pages/form-advanced.js"></script>
<!-- App js -->


<!-- jQuery  -->
<!--<script src="js/jquery.min.js"></script>-->

<script src="js/bootstrap.bundle.min.js"></script>

<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>


<!-- dashboard js -->
<!-- App js -->
<script src="js/app.js"></script>
@endsection