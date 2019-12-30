<?php
Route::get('/', function () {
  
    return view('login');
});
Route::post('/loginVerif', 'WelcomeController@loginVerif');//->name('loginVerif')
Route::get('/index', 'WelcomeController@index');


// Route::get('/', function () {
//     return view('layouts.app');
// });

// Route::get('/appWithSideBar', function () {
//     return view('layouts.app_with_side_bar');
// });

// Route::get('/app', function () {
//     return view('layouts.app');
// });




// Route::get('/add_avoir', function () {
//     return view('add_avoir');
// });


// Route::get('/add_client', function () {
//     return view('add_client');
// });



// Route::get('/list_client', function () {
//     return view('list_client');
// });





Route::get('/modify_fournisseur', 'FournisseurController@edit');
Route::get('/modify_fournisseur/{id}', 'FournisseurController@update');
Route::get('/delete_fournisseur/{id}', 'FournisseurController@destroy');


Route::get('/modify_client', 'ClientController@edit');
Route::get('/update_client/{id}', 'ClientController@update');
Route::get('/delete_client/{id}', 'ClientController@destroy');

Route::get('/ajout_produit', 'ProduitController@create');
Route::get('/modify_produit', 'ProduitController@edit');
Route::get('/modify_produit/{id}', 'ProduitController@update');
Route::get('/delete_produit/{id}', 'ProduitController@destroy');
Route::get('/liste_produits', 'ProduitController@index');
Route::get('/ajout_famille', 'FamilleController@create')->name('ajout_famille');

Route::get('/factures', 'WelcomeController@index');
Route::get('/ajout_client', 'ClientController@create');
Route::get('/liste_clients', 'ClientController@index');
Route::get('/ajout_fournisseur', 'FournisseurController@create');
Route::get('/liste_fournisseurs', 'FournisseurController@index');

Route::get('/ajout_devis', 'DevisController@ajout_devis');
Route::get('/liste_devis', 'DevisController@liste_devis');
Route::get('/ajout_bl', 'Bon_livraisonController@ajout_bl');
Route::get('/liste_bl', 'Bon_livraisonController@liste_bl');
Route::get('/getInfo', 'FactureController@getInfo')->name('getInfo');
Route::post('/create_facture', 'FactureController@create');
Route::post('/create_avoir', 'AvoirController@create');
Route::post('/verif_delete', 'FactureController@verif_delete');
Route::post('/create_bl', 'Bon_livraisonController@create');
Route::get('/extras', 'FactureController@show');
Route::post('/create_devis', 'DevisController@create');
Route::post('/create_bl', 'Bon_livraisonController@create');
Route::get('/extrasDevis', 'DevisController@show');
Route::get('/extrasBl', 'Bon_livraisonController@show');
Route::get('/extrasAvoir', 'AvoirController@show');

Route::get('/quantiteStock', 'FactureController@quantiteStock')->name('quantiteStock');
Route::get('/produits', 'FactureController@produits')->name('produits');
Route::get('/ajout_avoir', 'AvoirController@ajout_avoir')->name('ajout_avoir');;
Route::get('/liste_avoirs', 'AvoirController@liste_avoirs');
Route::get('/ajout_factures', 'FactureController@ajout_factures')->name('ajout_factures');
Route::get('/liste_factures', 'FactureController@liste_factures');

Route::get('/facture_edit', 'FactureController@facture_edit');
Route::get('/code', 'FactureController@code');
Route::get('/code_edit', 'FactureController@code_edit');
Route::get('/code_edit_devis', 'DevisController@code_edit_devis');
Route::get('/code_edit_bl', 'Bon_livraisonController@code_edit_bl');
Route::get('/code_edit_av', 'AvoirController@code_edit_av');
Route::get('/code_delete_devis', 'DevisController@code_delete_devis');
Route::get('/code_delete_av', 'AvoirController@code_delete_av');
Route::get('/code_delete_bl', 'Bon_livraisonController@code_delete_bl');

Route::post('/verif_edit', 'FactureController@verif_edit');

Route::post('/modif_facture', 'FactureController@update');
Route::get('/facture_delete', 'FactureController@facture_delete');



Route::post('/verif_edit_devis', 'DevisController@verif_edit_devis');
Route::post('/verif_edit_av', 'AvoirController@verif_edit_av');
Route::post('/verif_edit_bl', 'Bon_livraisonController@verif_edit_bl');
Route::post('/verif_delete_devis', 'DevisController@verif_delete_devis');
Route::post('/verif_delete_bl', 'Bon_livraisonController@verif_delete_bl');
Route::post('/verif_delete_av', 'AvoirController@verif_delete_av');
Route::post('/modif_devis', 'DevisController@update');
Route::post('/modif_avoir', 'AvoirController@update');
Route::post('/modif_bl', 'Bon_livraisonController@update');
Route::get('/devis_delete', 'DevisController@devis_delete');





Route::resource('Client', 'ClientController');
Route::resource('Fournisseur', 'FournisseurController');
Route::resource('Facture', 'FactureController');
Route::resource('Devis', 'DevisController');
Route::resource('Bon_livraison', 'Bon_livraisonController');
Route::resource('Avoir', 'AvoirController');
Route::resource('Produit', 'ProduitController');
Route::resource('Famille', 'FamilleController');