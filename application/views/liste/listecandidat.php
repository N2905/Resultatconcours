<?php  
 ?>
 <legend>Liste candidat</legend>
 <div class="table-responsive">
 	<table class="table table-bordered">
 		<thead>
 			<tr>
 				<th>Nom</th>
 				<th>Prenom</th>
 				<th>Email</th>
 				<th>Telepone</th>
 				<th>Année accademique</th>
 				<th>Centre d'examen</th>
 				<th>Parcours</th>
 				<th>Action</th> 
 			</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($datalistes as $candidat){ ?>
 			<tr>
 			 
 				<td><?php echo $candidat->nom_cand;?></td>
 				<td><?php echo $candidat->prenom_cand;?></td>
 				<td><?php echo $candidat->email_cand;?></td>
 				<td><?php echo $candidat->tel_cand;?></td>
 				<td><?php echo $candidat->anne_acc;?></td>
 				<td><?php echo $candidat->centre_lieu;?></td>
 				<td><?php echo $candidat->parc_nom;?></td>
 				<td>
 					<a href="<?=base_url('Candidat/editer/' .$candidat->cand_id );?>"><span class="glyphicon glyphicon-edit btn-info btn btn-primary"></span></a>
 				    <a href="<?=base_url('Candidat/delete/' .$candidat->cand_id);?>"><span class="glyphicon glyphicon-minus btn btn-default btn btn-danger"></span></a>
 				</td>
 			</tr>
 	  
 		<?php } ?>
 		</tbody>
 	</table>
 </div>