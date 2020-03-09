jQuery(document).ready(function($){
    // DataTable bootstrap
    $('#_useDataTable,[id^=_tabparcours],[id^=_tabcentre],[id^=_tabanne]').DataTable();

    // PREMIER LETTRE MAJUSCULE
    $('._ucfirt').keyup(function(evt){
        var txt = $(this).val();
        // Regex taken from php.js (http://phpjs.org/functions/ucwords:569)
        $(this).val(txt.replace(/^(.)|\s(.)/g, function($1){ return $1.toUpperCase(); }));
    });
    // END
    // NOMBRE SELEMENT
      $('._numberonly').keyup(function(e)                                {
        if (/\D/g.test(this.value))
        {
          // Filter non-digits from input value.
          this.value = this.value.replace(/\D/g, '');
        }
      });
    // END

  // DATE: Date de naissance, Date d'adhésion
       $("#cand_date_naiss,#cand_du_cin,#cand_anne_bac").datepicker({
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

          }
        });// end
    $('#form_cand').submit(function(){
        controleChampVide();
        // submitValidation();
    });

    //MANDEFA SLIDE
    sliderImageAccueil();

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

//
function saveNote(obj) {
    var form = $(obj).parents('[id^=formcand_]');//.substr(9)
    var url  = $(form).attr('action');
    var id_cand = $(form).attr('id').substr(9)
    var data  = $(form).serialize();
    $.ajax({
      'method' : 'POST',
      'url' : url,
      'data' : data,
      'success' : function(contenu){
          $("#avg_"+id_cand).text(contenu);
          $.blockUI({css : {fontFamily : 'arial, "lucida console", sans-serif'}}) ;
          $.blockUI({css : {fontSize : '12px'}}) ;

          $.growlUI( '', 'Modifications enregistrées' );
      }
  })
}

function sliderImageAccueil(){
  $('._slider').slick({
      dots: false,
      infinite: true,
      speed: 2000,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
      {
        breakpoint: 1290,
        settings: {
          slidesToShow: 5,
          dots: true
        }
      },
      {
        breakpoint: 1100,
        settings: {
          slidesToShow: 4,
          dots: true
        }
      },
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 3,
          dots: true
        }
      },
      {
        breakpoint: 700,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: true
        }
      },
      {
        breakpoint: 650,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true
        }
      } 
      ]
    });
}
