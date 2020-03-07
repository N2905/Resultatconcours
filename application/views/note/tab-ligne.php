<tr>
  <td><?= ($index+1) ?></td>
  <td><?= $candidat->nom_cand ?></td>
  <td><?= $candidat->prenom_cand ?></td>
  <td class="text-center"><?= $candidat->anne_acc ?></td>
  <td class="text-center"><?= $parcours->getParcById($candidat->parc_id)->parc_nom ?></td>
  <td>
    <div class="card">
      <h4 id="avg_<?= $candidat->cand_id; ?>" class="text-center"><?= round($candidat->moyenne,2); ?></h4>
    </div>
  </td>
</tr>
