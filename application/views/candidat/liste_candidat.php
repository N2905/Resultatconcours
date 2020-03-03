<form method="post" action="<?php echo base_url('Candidat/recherche');?>">
  <legend>Liste des Candidats</legend>
  <div class="cont-rechercher">
   <div class="input-group col-lg-5">
    <input type="text" placeholder="Réchercher..."  class="form-control"  style="text-align:right" name="motcher">
    <span class="input-group-btn">
      <button class="btn btn-success" type="submit">Réchercher</button>
    </span>
  </div>
</div>
</form>
<a href="<?php echo base_url('Candidat/ajout')?>"><button class="btn btn-primary" style="text-align: left">Nouveau</button></a>
<div class="table-responsive">
 <table align="center" class="table table-bordered">

 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Nom</th>
 			<th>Prenom</th>
 			<!-- <th>Année obtention bacc</th> -->
 			<!-- <th>Date de naissance</th> -->
 			<!-- <th>Lieu de naissance</th> -->
 			<th>Cin</th>
 			<!-- <th>Fait à</th> -->
 			<!-- <th>Le</th> -->
 			<!-- <th>Numéro bacc</th> -->
 			<th>Email</th>
 			<th>Sexe</th>
 			<!-- <th>Indication</th> -->
 			<th>Serie</th>
 			<th>Telephone</th>
 			<th>Nationalite</th>
 			<!-- <th>Pays</th> -->
 			<!-- <th>Ville</th> -->
 			<!-- <th>Code postale</th> -->
 			<!-- <th>Année accademique</th> -->
 			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
    <?php if(count($data) > 0){?>
     <?php foreach ($data as $cand) {?>

       <tr>
        <td><?php echo $cand->cand_id;?></td>
        <td><?php echo $cand->nom_cand;?></td>
        <td><?php echo $cand->prenom_cand;?></td>
        <!-- <td><?php echo $cand->cand_anne_bac;?></td>  -->
        <!-- <td><?php echo $cand->cand_date_naiss;?></td>  -->
        <!-- <td><?php echo $cand->cand_lieu_naiss;?></td>  -->
        <td><?php echo $cand->cin_cand;?></td>
        <!-- <td><?php echo $cand->cand_lieu_cin;?></td>  -->
        <!-- <td><?php echo $cand->cand_du_cin;?></td>  -->
        <!-- <td><?php echo $cand->cand_num_bac;?></td>  -->
        <td><?php echo $cand->email_cand;?></td>
        <td><?php echo $cand->cand_sexe;?></td>
        <!-- <td><?php echo $cand->cand_indication;?></td> -->
        <td><?php echo $cand->cand_serie;?></td>
        <td><?php echo $cand->tel_cand;?></td>
        <td><?php echo $cand->cand_nationalite;?></td>
        <!-- <td><?php echo $cand->cand_pays;?></td> -->
        <!-- <td><?php echo $cand->cand_ville;?></td> -->
        <!-- <td><?php echo $cand->cand_codepostale;?></td> -->
        <!-- <td><?php echo $cand->anne_acc;?></td> -->

        <td>
         <a href="<?=base_url('Candidat/editer/' .$cand->cand_id);?>"><span class="glyphicon glyphicon-pencil btn btn-primary"></span></a>
         <a href="<?=base_url('Candidat/delete/' .$cand->cand_id);?>"><span class="glyphicon glyphicon-remove btn btn-danger btn btn-danger"></span></a>
       </td>
     </tr>
   <?php }?>
 <?php }?>

</tbody>
</table>
</div>
