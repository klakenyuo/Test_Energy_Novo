 @extends('layout')

 @section('body')
    <div class="col-md-9 min-vh-100 offset-md-3 flex-column p-md-5 p-3" style="background-color: #EEF9F0 !important   ;background:url('bg_right.png') right bottom no-repeat, url('bg_bottom.png') center bottom no-repeat ;" >
        <div class="d-flex justify-content-between w-md-100">
            <div class="w-md-50">
                <h3 class="fw-md-bolder">Bonjour <br> Rone !</h3>
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
        <div class="d-flex mt-3 text-white col-md-6   justify-content-between">
            <!-- chiffre d affaire -->
            <div class="bg-cblue rounded-circle px-md-2 py-4 flex-column  align-items-center text-center">
               <span class="fs-6">Chiffre d’affaire mensuel</span><br>
                <span class="fw-md-bolder fs-4 ">134 890€</span>
            </div>
            <div class="bg-cred rounded-circle mx-3 px-md-2 py-4 flex-column justify-content-center align-items-center text-center">
                <span>Nombre total de clients</span><br>
                 <span class="fw-md-bolder fs-4 ">1230</span>
             </div>
             <div class="bg-cgreen rounded-circle px-md-2 py-4  flex-column  align-items-center text-center">
                <span>En attente de paiement</span><br>
                 <span class="fw-md-bolder fs-4 ">42</span>
             </div>
        </div>
        <div class="flex-column bg-white shadow p-4 col-md-5 mt-4 fs-5">
            <div class="d-flex justify-content-between border-bottom border-secondary align-items-center py-3 ">
                <!-- <i class="fa fa-wrench text-danger"></i> -->
                <img src="tool1.png" alt="">
                <span class="fw-md-bolder fs-5 text-left">Dossiers avant installation</span>
                <img src="eye.png" alt="">
            </div>
            <div class="d-flex justify-content-between border-bottom border-secondary align-items-center py-3 ">
                <img src="tool2.png" alt="">
                <!-- <i class="fa fa-wrench text-success"></i> -->
                <span class="fw-md-bolder fs-5">Dossiers après installation</span>
                <img src="eye.png" alt="">
                </div>
            <div class="d-flex justify-content-between align-items-center py-3 ">
                <img src="calendar.png" alt="">
                <span class="fw-md-bolder fs-5 text-left">Agenda</span>
                <img src="eye.png" alt="">
            </div>
        </div>
    </div> 
@endsection