$(document).ready(function() {
    $("#basic-url-ht").keyup(function() { //on récupére le texte du bas et lui assigne l'action keyup
    var textht = $("#basic-url-ht").val();// on créee une var ds laquelle on insére le texte du bas
    $("#textht").text(textht);// on récupére l'élement paragraphe du haut et on demande à l'input de se placer au-dessus de l'img soit ds le p.
    //alert(textht);
    })
    $("#basic-url-bas").keyup(function() {
    var textbas = $("#basic-url-bas").val();
    $("#textbas").html(textbas);
    //alert(textbas);
    })
    $("#inputGroupSelect03").on('change', function()  { // On appel l'id de la classe select, et on attribue une action change pr changer la valeur de l'élement img
      //console.log(this);
      var valeur = $('#inputGroupSelect03 :selected').text(); // on créer une variable à laquelle on attribut son id  ainsi que l'action choisir
      $('#idimg img').attr('src', 'img/'+valeur); // on récupere l'id de la div puis l'id de l'img, à laquelle on attribut sa source et on concaténe : la var valeur avec son chemin.
    });

});
