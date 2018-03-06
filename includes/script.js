$(document).ready(function() {

    //Récuperer le texte du haut :
    $("#basic-url-ht").keyup(function() { //on récupére le texte du haut et lui assigne l'action keyup
        var textht = $("#basic-url-ht").val(); // on créee une var ds laquelle on insére le texte du haut
        $("#textht").text(textht); // on récupére l'élement paragraphe du haut et on demande à l'input de se placer au-dessus de l'img soit ds le p.
    });

    //Récuperer le texte du bas :
    $("#basic-url-bas").keyup(function() { //on récupére le texte du bas et lui assigne l'action keyup
        var textbas = $("#basic-url-bas").val(); // on créee une var ds laquelle on insére le texte du bas
        $("#textbas").html(textbas); // on récupére l'élement paragraphe du bas et on demande à l'input de se placer au-dessus de l'img soit ds le p.
        //alert(textbas);
    });

    //Récuperer la liste des images :
    $("#inputGroupSelect03").on('change', function()  { // On appel l'id de la classe select, et on attribue une action change pr changer la valeur de l'élement img
      //console.log(this);
        var valeur = $('#inputGroupSelect03 :selected').text(); // on créer une variable à laquelle on attribut son id  ainsi que l'action choisir
        //console.log(valeur);
        $('#idimg img').attr('src', 'img/'+valeur); // on récupere l'id de la div puis l'id de l'img, à laquelle on attribut sa source et on concaténe : la var valeur avec son chemin.
        var imghide = $('#inputGroupSelect03 :selected').text(); // on créee une nvlle var afin de changer la valeur du champ imghide par la var:valeur qui stocke le nom de l'img sélectionnée
        $("#basic-img-hide").attr('value', imghide); // On attribue la liste des img à la valeur de l'input qui est cachée soit la var créee .
    });



    //Grisser le bouton valide meme :
    //$('')



});
