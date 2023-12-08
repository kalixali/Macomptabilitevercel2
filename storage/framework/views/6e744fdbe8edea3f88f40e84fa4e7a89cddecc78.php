<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ma Comptabilité</title>
    
    <link href="/bootstrap-5.2.3/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mstyl.css">
    <!-- <link rel="stylesheet" type="text/css" href="app.css"> -->
    <!-- <script src="htmx.min.js"></script> -->
    
  </head>
  <body>
    <h1>MA COMPTABILITE</h1>

    <nav class="navbar" style="background-color: #e3f2fd;">

    
    <ul class="nav nav-tabs" id="myTab" role="tablist">

      <li class="nav-item dropdown" role="presentation">
        <button class="nav-link dropdown-toggle" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">ENTREPRISE</button>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo e(url('/entreprise')); ?>">Entreprise</a></li>
          
        </ul>
        
      </li>

      <li class="nav-item dropdown" role="presentation" >
        <button class="nav-link dropdown-toggle" data-bs-toggle="tab" id="home-tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><a class="dropdown-item" href="<?php echo e(url('/loadchart1')); ?>">TABLEAU DE BORD</a></button>
        
      </li>

      <li class="nav-item dropdown" role="presentation">
        <button class="nav-link dropdown-toggle" data-bs-toggle="tab" id="home-tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">COMPTABILITE</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo e(url('/plancpte')); ?>">Plan comptable</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/codesjournaux')); ?>">Codes Journaux</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/journal')); ?>">Journal</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/grdlivre')); ?>">Grand livre</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/Balance')); ?>">Balance</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/cpteresultat')); ?>">Compte de resultat</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/bilan')); ?>">Bilan</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown" role="presentation">
        <button class="nav-link dropdown-toggle" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">GESTION DE STOCKS</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo e(url('/produit')); ?>">Produits</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/fournisseurs')); ?>">Fournisseurs</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/clients')); ?>">Clients</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/achats')); ?>">Achats</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/ventes')); ?>">Ventes</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/entstock')); ?>">Entrées en stock</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/sortistock')); ?>">Sorties de stock</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/stockactu')); ?>">Stock actuel</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown" role="presentation">
        <button class="nav-link dropdown-toggle" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">PAIE</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo e(url('/employes')); ?>">Employés</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/salaire')); ?>">Calcul - Salaire</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/bulletin')); ?>">Bulletin</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/cotsocpat')); ?>">Cotisations Sociales - Employeur</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/cotficpat')); ?>">Cotisations Fiscales - Employeur</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/comptasalaire')); ?>">Comptabiliser - La paie</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/comptapatron')); ?>">Comptabiliser - Les charges patronales</a></li>
          </ul>
      </li>
      
    </ul>
    
    </nav>
    <div class="d-flex align-items-start">
      <div class="accordion w-25" id="accordionExample">

      <div class="accordion-item">
      <a class="nav-link" href="<?php echo e(url('/loadchart1')); ?>">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            
              TABLEAU DE BORD
            
            </button>
          </h2>
          </a>
      </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              COMPTABILITE
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">


              <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(url('/codesjournaux')); ?>">CODES JOURNAUX</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(url('/journal')); ?>">JOURNAL</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/grdlivre')); ?>">GRD LIVRE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/Balance')); ?>">BALANCE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/cpteresultat')); ?>">COMPTE DE RESULTAT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/bilan')); ?>">BILAN</a>
                </li>
              </ul>

          </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              GESTION DE STOCKS
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">

              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(url('/produit')); ?>">PRODUITS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(url('/fournisseurs')); ?>">FOURNISSEURS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(url('/clients')); ?>">CLIENTS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(url('/achats')); ?>">ACHATS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(url('/achatscan')); ?>">ACHATS/SCAN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/ventes')); ?>">VENTES</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(url('/ventescan')); ?>">VENTES/SCAN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(url('/entstock')); ?>">ENTREES EN STOCK</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/sortistock')); ?>">SORTIES DE STOCK</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/stockactu')); ?>">STOCK ACTUEL</a>
                </li>
              </ul>
                
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              PAIE
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(url('/employes')); ?>">EMPLOYES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/salaire')); ?>">CALCUL - SALAIRE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/bulletin')); ?>">BULLETIN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/cotsocpat')); ?>">COTISATIONS SOCIALES - EMPLOYEUR</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/cotficpat')); ?>">COTISATIONS FISCALES - EMPLOYEUR</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/comptasalaire')); ?>">COMPTABILISER LA PAIE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/comptapatron')); ?>">COMPTABILISER LES CHARGES PATRONALES</a>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      
        
        <?php echo $__env->yieldContent('content'); ?>
      
    </div>
    <script src="jquery-3.6.3.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="bootstrap-5.2.3/js/bootstrap.min.js"></script>
   
  </body>
</html><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/layout.blade.php ENDPATH**/ ?>