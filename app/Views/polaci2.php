<?= $this->extend('layout/template'); ?>
 <?= $this->section('content'); ?>
 
 <h1 class="text-center">Die Liste hráčů from Poland</h1>
 <div class="row">
    

   <?php
 
      foreach($hraci as $row) {
   ?>
         <div class="card col-4">
         <div class="card-body">
   <?php
         echo "<h3 class='card-title'>".$row->jmeno."</h3>";
         echo "<p><b>Věk: </b>".$row->vek."</p>";
         echo "<p><b>Číslo na dresu: </b>".$row->cislo."</p>";
         echo "<p><b>Výška </b>".$row->vyska."</p>";
   ?>

         </div>
         </div>
   <?php
         }
   ?>
 

 

 
 
 
   </div>
 
 <?= $this->endSection(); ?> 
