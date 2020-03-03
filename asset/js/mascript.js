jQuery(document).ready(function($){
    // DataTable bootstrap
    $('#tableEtudiant').DataTable();

    // HIDE ENTETE
    // $("#hide_entete").css({'display':'none'});
    // $("#hide_entete_index").css({'display':'none'});

    // PREMIER LETTRE MAJUSCULE
    $('input#prenomag,input#lieucinag,input#prenomcj,input#professioncj,input#adresseag,input#distric,input#poste').keyup(function(evt){
        var txt = $(this).val();
        // Regex taken from php.js (http://phpjs.org/functions/ucwords:569)
        $(this).val(txt.replace(/^(.)|\s(.)/g, function($1){ return $1.toUpperCase(); }));
    });
    // END
    // NOMBRE SELEMENT
      $('input#cinag,input#numerolivredefamille,input#telag,input#imag,input#imcj').keyup(function(e)                                {
        if (/\D/g.test(this.value))
        {
          // Filter non-digits from input value.
          this.value = this.value.replace(/\D/g, '');
        }
      });
    // END

  // DATE: Date de naissance, Date d'adhésion
       $("#dateadhesionag,#datenaissag,#ducinag").datepicker({
         dateFormat: 'yy-mm-dd',
         maxDate: "d"
       });
    // DATE PICKER PREND CONGER

        $("#datedepart").datepicker({
          dateFormat: 'yy-mm-dd',
          minDate: "d",
          onSelect: function (opt) {
            var datedepart = $('#datedepart').datepicker('getDate');//,'+1d'
            datedepart.setDate(datedepart.getDate()+1);
            $("#dateretour").datepicker("option","minDate", datedepart);
          }
        });
        $("#dateretour").datepicker({
          dateFormat: 'yy-mm-dd',
          onSelect: function () {
            calculeJour();
            joursRestant();
          }
        });// end

  // FUNCTION QUI CALCUL LA DIFFERENCE JOURS ENTRE DEUX DATE

      function calculeJour(){
          var datedepart= $("#datedepart").datepicker("getDate");
          var dateretour= $("#dateretour").datepicker("getDate");
          nbjours = (dateretour- datedepart) / (1000 * 60 * 60 * 24);
          var res = $('#nbrjrspris').val(Math.round(nbjours));
          return res;
      }
    // SECTION RESULTAT CALCUL JRS CONGER

     $('#section-res  input[type="number"]').prop('readonly',true);
     $('#section2_per  input[type="text"]').prop('readonly',true);

}); // END LOAD JSQUERY DOM
// CONTROLE CHAMPS
function controleChampVide(){
    var inputs = $('input.required,select.required,textarea.required');
    for(var i=0;i < inputs.length;i++){
        if($(inputs[i]).val()=="" ){
                $(inputs[i]).css({'borderColor':'red'});
                $(inputs[i]).attr({'placeholder':'Ce champ est récquis'});
                //$(inputs[i]).before('<span class="error">Ce champ est requis</span>');
                event.preventDefault();
        }else{
                $(inputs[i]).css({'borderColor':''});
                $(inputs[i]).attr({'placeholder':''});
                // $(inputs[i]).remove().before();
                // event.preventDefault();
        }
    }
}


//VERIFIER TYPE DE CONGER SELECTIONNER
    function verifierTypeConger(){
        var text = $('#codeconger')[0];
        if(text[0].selected){// par défaut
            $('#verif_type_conge').val('no_selectionner');
            $('#nbrjrs_2').val('no_selectionner');
        }else if(text[1].selected){ // maternité
            $('#verif_type_conge').val(text[1].text);
            $('#nbrjrs_2').val(90);
            $('#nbrjrs').val(90);
        }else if(text[2].selected){ // paternité
            $('#verif_type_conge').val(text[2].text);
            $('#nbrjrs_2').val(30);
            $('#nbrjrs').val(30);
        }else if(text[3].selected){ // annuel
            $('#verif_type_conge').val(text[3].text);
            if($('#verify_idprendconger').val()=='new'){
                $('#nbrjrs').val(30);
            }else{
                $('#nbrjrs').val($('#nbrjrs_3').val());
            }
        }
    }

    function submitValidation(){

        // VALIDATION CHAMPS DANS PREND CONGER
        var inputs = $('input[type="number"] ,input[type="text"],select');
        for(var i = 0;i < inputs.length;i++){
            if($(inputs[i]).val() == ''){
                $(inputs[i]).css({'borderColor':'red'});
            }else{
                $(inputs[i]).css({'borderColor':''});
            }
        }
    }

// CALCUL JOURS RESTANT
    function joursRestant(){
        var jours_dispo = $('#nbrjrs').val();
        var jours_pris = $('#nbrjrspris').val();
        var jours_restant = jours_dispo - jours_pris;
        if(jours_restant <= 0 ){
            $('#nbrjrsreste').css({'borderColor':'red'});
            $('#bt-enregistrer').prop('disabled',true);
            $('#nbrjrsreste').val(jours_restant);
        }else{
            $('#nbrjrsreste').css({'borderColor':''});
            $('#bt-enregistrer').prop('disabled',false);
            $('#nbrjrsreste').val(jours_restant);
        }
        // ANNUEL L'AGENT NE DOIT PAS DEPASSER LE 15 jours
        if( $('#verify_idprendconger_exist').val()=='new' && $('#typeconge').val() == 'Annuel' && parseInt(jours_pris) > 15){
            alert('Le nombre de jours de l\'agent ne doit pas être supérieur à 15 jours!');
            $('#nbrjrspris').css({'borderColor':'red'});
            $('#bt-enregistrer').prop('disabled',true);
        }else{
            $('#nbrjrspris').css({'borderColor':''});
            $('#bt-enregistrer').prop('disabled',false);
        }

        // MATERINITE L'AGENT NE DOIT PAS DEPASSER LE 15 jours
        if( $('#verify_idprendconger_exist').val()=='new' && $('#typeconge').val() == 'Maternité' && parseInt(jours_pris) > 90){
            alert('Le nombre de jours de l\'agent ne doit pas être supérieur à 90 jours!');
            $('#nbrjrspris').css({'borderColor':'red'});
            $('#bt-enregistrer').prop('disabled',true);
        }else{
            $('#nbrjrspris').css({'borderColor':''});
            $('#bt-enregistrer').prop('disabled',false);
        }
    }

/* RG4 : Chaque agent n’a pas le droit de consomme plus de  30jours
   dans une année et pour la première demande de congé sa serait 15jours obligatoire.
*/
    /*function controleRG4(anne){
        var anne_now = Date('Y');
        if(anne_now < anne){

        }
    }*/
// CONTROLE PERMISSION
    function joursResantPermission(){
        var verif_max_jour = $('#verif_max_jour'); // JOURS RESTANT VERIF
        var nbrjrsprisper = $('#nbrjrsprisper'); // JOURS PRIS
        var nbjrsresteper = $('#nbjrsresteper');// JOURS RESTANT
        // CALCUL
        var jours_restant = parseInt(verif_max_jour.val()) - parseInt(nbrjrsprisper.val());

        if(parseInt(verif_max_jour.val()) < parseInt(nbrjrsprisper.val())){
            $('#save_permission').prop('disabled',true);
            $('#nbrjrsprisper').css({'borderColor':'red'});
            $('#nbjrsresteper').css({'borderColor':'red'});
            $('span.permission_error').show();
        }else{
            $('#save_permission').prop('disabled',false);
            $('#nbrjrsprisper').css({'borderColor':''});
            $('#nbjrsresteper').css({'borderColor':''});
            $('span.permission_error').hide();
        }
        return nbjrsresteper.val(jours_restant);

    }


    //
    function formatPhone(obj) {
        // var numbers = obj.value.replace(/\D/g, ''),
        // char = { 0: '(', 3: ') ', 6: ' - ' };
        //     obj.value = '';
        //     for (var i = 0; i < numbers.length; i++) {
        //         obj.value += (char[i] || '') + numbers[i];
        // }
    }
