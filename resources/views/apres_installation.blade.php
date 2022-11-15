 @extends('layout')

 @section('body')
    <div class="col-md-9 min-vh-100 offset-md-3 flex-column p-md-5 p-3" style="background-color: #EEF9F0 !important   ;background:url('bg_right.png') right bottom no-repeat,url('bg_top.png') left top no-repeat, url('bg_bottom.png') center bottom no-repeat ;" >
        <div class="d-flex justify-content-between w-md-100">
            <div class="w-md-50">
            </div>
            <div class="d-flex w-50 fs-3 justify-content-between align-items-center text-secondary">
                <div class="d-flex border-bottom align-items-center p-0">
                    <input type="text" style="outline: none  !important;" class="search_input form-control bg-transparent border-0" placeholder="Rechercher">
                    <div class="input-group-append">
                      <button class=" border-0 bg-transparent" type="button">
                        <i class="fs-2 fa fa-search text-secondary "></i>
                      </button>
                    </div>
                  </div>
                <i class="fa fa-bell"></i>
                <i class="fa fa-comment "></i>
            </div>
        </div>
        <div class="d-flex bg-white shadow mt-5 justify-content-between p-2 px-5">
            <div class="d-flex align-items-center ">
                <img class="" width="50px" height="50px" src="tool.png" alt="">
                <span class="fs-4 fw-bolder my-3 mx-3">Dossiers clients après installation </span>
            </div>
            <span class="fs-4 fw-bolder my-3">16</span>
        </div>
        <div class="d-flex bg-white shadow mt-2 p-2 px-5 align-items-center ">
            <span class=" my-3 mr-3">Période sélectionnée</span>
            <input  class="mx-3 p-1 border-secondary border text-secondary" type="date" value="2022-09-14">
            <span class="mx-3" >au</span>
            <input class="mx-3 p-1 border-secondary border text-secondary"  type="date" value="2022-09-24">
           <button class="mx-3 btn bg-cred text-white rounded col-2"  type="submit" >voir</button>
        </div>
        <div class="d-flex w-100 mt-2 justify-content-between">
            <div class="d-flex bg-white w-49 justify-content-between shadow   p-2 px-5 align-items-center ">
                <span class="fs-4 fw-bolder my-3">Chiffre d’affaire </span>
                <span class="fs-3 fw-bolder my-3">62 345 € </span>
            </div>
            <div class="d-flex bg-white w-49 justify-content-between shadow    p-2 px-5 align-items-center ">
                <span class="fs-4 fw-bolder my-3">Nombre de clients </span>
                <span class="fs-3 fw-bolder my-3">124 </span>
            </div>
        </div>
        <!-- filtre -->
        <div class="d-flex w-100 mt-2 bg-white p-2 py-4 shadow  ">
            <div class="flex-column d-flex mx-2 w-33">
                <label for="client" class="fs-6 fw-bolder">Nom du client</label>
                <input type="text" class="mt-2 border-0 border-dark border-bottom py-2" placeholder="Prénom et/ou Nom du client">
                <span class="mt-2 border-0 border-dark border-bottom py-2 d-flex justify-content-between align-items-center">Statut CEE <i class="fa fa-chevron-down"></i> </span>
                <span class="mt-2 border-0 border-dark border-bottom py-2 d-flex justify-content-between align-items-center">Pollueur <i class="fa fa-chevron-down"></i></span>
                <span class="mt-2 border-0 border-dark border-bottom py-2 d-flex justify-content-between align-items-center">Reste a charge <i class="fa fa-chevron-down"></i></span>
                <span class="mt-2 border-0 border-dark border-bottom py-2 d-flex justify-content-between align-items-center">Beneficiaire prime CEE <i class="fa fa-chevron-down"></i></span>
            </div>
            <div class="flex-column d-flex mx-2 w-33">
                <label for="client" class="fs-6 fw-bolder">Code Postal</label>
                <input type="text" class="mt-2 border-0 border-dark border-bottom py-2" placeholder="91200">
                <span class="mt-2 border-0 border-dark border-bottom py-2 d-flex justify-content-between align-items-center">Statut MPR <i class="fa fa-chevron-down"></i></span>
                <span class="mt-2 border-0 border-dark border-bottom py-2 d-flex justify-content-between align-items-center">Maison de financement <i class="fa fa-chevron-down"></i></span>
                <span class="mt-2 border-0 border-dark border-bottom py-2 d-flex justify-content-between align-items-center">Periode de Signature <i class="fa fa-chevron-down"></i></span>
                <span class="mt-2 border-0 border-dark border-bottom py-2 d-flex justify-content-between align-items-center"> Beneficiaire prime MPR<i class="fa fa-chevron-down"></i></span>
            </div>
            <div class="flex-column d-flex mx-2 w-33">
                <label for="client" class="fs-6 fw-bolder">Référence du paiement</label>
                <input type="text" class="mt-2 border-0 border-dark border-bottom py-2" placeholder="DXS 990">
                <span class="mt-2 border-0 border-dark border-bottom py-2 d-flex justify-content-between align-items-center">Statut du Client <i class="fa fa-chevron-down"></i></span> 
                <span class="mt-2 border-0 border-dark border-bottom py-2 d-flex justify-content-between align-items-center">Mode de paiement <i class="fa fa-chevron-down"></i></span> 
                <span class="mt-2 border-0 border-dark border-bottom py-2 d-flex justify-content-between align-items-center">Installateur <i class="fa fa-chevron-down"></i></span> 
            </div>
        </div>
        <!-- datatable -->
        <div class="d-flex w-100 mt-2 bg-white px-2  py-4 ">
            <table class="w-100 border-0 text-center text-secondary data_table table-reponsive" style="font-size: 13px !important;">
                <thead class=" fs-6 font-italic border-secondqry border-bottom">
                <tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <th>Date</th>
                    <th>Nom <br> Prénom</th>
                    <th>Téléphone</th>
                    <th>Code postal <br>Ville</th>
                    <th>Installateur</th>
                    <th>TTC</th>
                    <th>Statut</th>
                    <th>Statut financement</th>
                    <th>Statut CEE</th>
                    <th>Statut MPR</th>
                    <th>Rapport</th>
                    <th>Notes</th>
                    <th>Envoyer un mail</th>
                </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td><input type="checkbox" name="" id=""></td>
                    <td>28/09/22</td>
                    <td>Dupuis <br> Richard</td>
                    <td> <i class="fa fa-phone"></i> <br>  06 78 89 88 76</td>
                    <td>75009<br>Paris</td>
                    <td>Romain Pouit</td>
                    <td>10 990,00€ </td>
                    <td class="text-cgreen fw-bold">Prêt pour Installation</td>
                    <td class="text-cred fw-bold">Manque pièces</td>
                    <td class="text-cred fw-bold">AH non signée</td>
                    <td class="text-success fw-bold">Demande de solde effectuée</td>
                    <td class="text-cgreen fw-bold">Confirmé</td>
                    <td><i class="fa fa-pencil text-secondary"></i></td>
                    <td><i class="fa fa-envelope text-secondary"></i></td>
                </tr> 
                <tr class="">
                    <td><input type="checkbox" name="" id=""></td>
                    <td>28/09/22</td>
                    <td>Dupuis <br> Richard</td>
                    <td> <i class="fa fa-phone"></i> <br>  06 78 89 88 76</td>
                    <td>75009<br>Paris</td>
                    <td>Romain Pouit</td>
                    <td>10 990,00€ </td>
                    <td class="text-cblue fw-bold">Fin de traitement</td>
                    <td class="text-cgreen fw-bold">Virement effectué</td>
                    <td class="text-blue fw-bold">Dépôt validé</td>
                    <td class="text-cgreen fw-bold">Solde accepté</td>
                    <td class="text-cgreen fw-bold">Confirmé</td>
                    <td><i class="fa fa-pencil text-secondary"></i></td>
                    <td ><i class="fa fa-envelope text-secondary"></i></td>
                </tr> 
                <tr class="">
                    <td><input type="checkbox" name="" id=""></td>
                    <td>28/09/22</td>
                    <td>Dupuis <br> Richard</td>
                    <td> <i class="fa fa-phone"></i> <br>  06 78 89 88 76</td>
                    <td>75009<br>Paris</td>
                    <td>Romain Pouit</td>
                    <td>10 990,00€ </td>
                    <td class="text-blue fw-bold">Traitment en cours</td>
                    <td class="text-info fw-bold">Attente déblocage de fonds</td>
                    <td class="text-danger fw-bold">Dépôt prêt</td>
                    <td class="text-cred fw-bold">Attente validation</td>
                    <td class="text-cgreen fw-bold">Confirmé</td>
                    <td><i class="fa fa-pencil text-secondary"></i></td>
                    <td ><i class="fa fa-envelope text-secondary"></i></td>
                </tr>
                <tr class="">
                    <td><input type="checkbox" name="" id=""></td>
                    <td>28/09/22</td>
                    <td>Dupuis <br> Richard</td>
                    <td> <i class="fa fa-phone"></i> <br>  06 78 89 88 76</td>
                    <td>75009<br>Paris</td>
                    <td>Romain Pouit</td>
                    <td>10 990,00€ </td>
                    <td class="text-cgreen fw-bold">Prêt pour Installation</td>
                    <td class="text-cred fw-bold">Manque pièces</td>
                    <td class="text-cred fw-bold">AH non signée</td>
                    <td class="text-success fw-bold">Demande de solde effectuée</td>
                    <td class="text-cgreen fw-bold">Confirmé</td>
                    <td><i class="fa fa-pencil text-secondary"></i></td>
                    <td><i class="fa fa-envelope text-secondary"></i></td>
                </tr> 
                <tr class="">
                    <td><input type="checkbox" name="" id=""></td>
                    <td>28/09/22</td>
                    <td>Dupuis <br> Richard</td>
                    <td> <i class="fa fa-phone"></i> <br>  06 78 89 88 76</td>
                    <td>75009<br>Paris</td>
                    <td>Romain Pouit</td>
                    <td>10 990,00€ </td>
                    <td class="text-cblue fw-bold">Fin de traitement</td>
                    <td class="text-cgreen fw-bold">Virement effectué</td>
                    <td class="text-blue fw-bold">Dépôt validé</td>
                    <td class="text-cgreen fw-bold">Solde accepté</td>
                    <td class="text-cgreen fw-bold">Confirmé</td>
                    <td><i class="fa fa-pencil text-secondary"></i></td>
                    <td ><i class="fa fa-envelope text-secondary"></i></td>
                </tr> 
                <tr class="">
                    <td><input type="checkbox" name="" id=""></td>
                    <td>28/09/22</td>
                    <td>Dupuis <br> Richard</td>
                    <td> <i class="fa fa-phone"></i> <br>  06 78 89 88 76</td>
                    <td>75009<br>Paris</td>
                    <td>Romain Pouit</td>
                    <td>10 990,00€ </td>
                    <td class="text-blue fw-bold">Traitment en cours</td>
                    <td class="text-info fw-bold">Attente déblocage de fonds</td>
                    <td class="text-danger fw-bold">Dépôt prêt</td>
                    <td class="text-cred fw-bold">Attente validation</td>
                    <td class="text-cgreen fw-bold">Confirmé</td>
                    <td><i class="fa fa-pencil text-secondary"></i></td>
                    <td ><i class="fa fa-envelope text-secondary"></i></td>
                </tr> 
                <tr class="">
                    <td><input type="checkbox" name="" id=""></td>
                    <td>28/09/22</td>
                    <td>Dupuis <br> Richard</td>
                    <td> <i class="fa fa-phone"></i> <br>  06 78 89 88 76</td>
                    <td>75009<br>Paris</td>
                    <td>Romain Pouit</td>
                    <td>10 990,00€ </td>
                    <td class="text-cblue fw-bold">Fin de traitement</td>
                    <td class="text-cgreen fw-bold">Virement effectué</td>
                    <td class="text-blue fw-bold">Dépôt validé</td>
                    <td class="text-cgreen fw-bold">Solde accepté</td>
                    <td class="text-cgreen fw-bold">Confirmé</td>
                    <td><i class="fa fa-pencil text-secondary"></i></td>
                    <td ><i class="fa fa-envelope text-secondary"></i></td>
                </tr> 
                </tbody>
            </table>
        </div>
        {{-- paginate --}}
        <div class="d-flex mt-3 align-items-center">
            <span class="fs-6 text-dark bg-white p-2">Page suivante</span>
            <button class="p-1 px-2 text-center bg-cred text-white mx-2 fs-6 border-0"><i class="fa fa-chevron-right"></i></button>
        </div>
    </div> 
@endsection