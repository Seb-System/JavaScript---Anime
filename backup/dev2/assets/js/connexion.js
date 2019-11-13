new Vue({
  el: '#app',
  data: {
    isForget: false,
    isLogin: true,
  },
  updated: function() {
  }
})

$(document).ready(function(){
       $('#submit').click(function(){

           // C'est ici qu'on récupère les valeurs de tous nos input

           var username = $('#username').val();
           var valeur2 = $('#input2').val();
           var csrf = $('#csrf').val();

               $.ajax({
                  url: "<?php echo base_url(); ?>votre/uri/perso",
                  type: "POST",
                  // On récupère la réponse en JSON
                  dataType: "json",
                  data: {
                       // On envoie les valeur précédemment fournies par le formulaire
                       valeur1: valeur1,
                       valeur2: valeur2,

                       // Le "csrf_token_name" est défini dans le fichier config.php de CI, à vous de le personnaliser
                       "csrf_token_name": csrf
                       },
                  success: function(data){
                       // On récupère le tout et on met à jour la valeur de l input de type "hidden" contenant notre token CSRF
                       $('#csrf').val(data['csrf']);
                       // Puis vous faites ce que vous voulez de vos valeurs retour
                       $('#votreid1').text(data['valeur1']);
                       $('votreid2').text(data['valeur2']);
                  },
                  error: function(data){
                  }

               });
           });
       });
