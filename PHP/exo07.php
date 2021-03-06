<h1>Exercice 7</h1>
<p>
    Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
        Poussin : entre 6 et 7 ans
        Pupille : entre 8 et 9 ans
        Minime : entre 10 et 11 ans
        Cadet : à partir de 12 ans
        Si la catégorie n’est pas gérée, merci de le préciser
</p>


<h2>Résultat :</h2>


<?php

    function categorieEnfant($age){
        $resultat = "L'enfant qui a $age appartient à la catégorie ";
        if(0 < $age && $age < 6) {
            $resultat = "L'enfant qui a $age ans est trop jeune pour concourir.";
        }
        else if(6 <= $age && $age < 8) {
            $resultat .= "« Poussin »";
        }
        else if(8 <= $age && $age < 10) {
            $resultat .= "« Pupille »";
        }
        else if(10 <= $age && $age < 12) {
            $resultat .= "« Minime »";
        }
        else if($age >= 12) {
            $resultat .= "« Cadet »";
        }
        else {
            $resultat = "L'age rentré n'est pas valide.";
        }

        return $resultat."<br>";
    }

    echo categorieEnfant(1);

    function categorieEnfantBis($age) {
        $resultat = "L'enfant qui a $age appartient à la catégorie ";
        if($age >= 12) {
            $resultat .= "« Cadet »";
        }
        elseif($age >= 10) {
            $resultat .= "« Minime »";
        }
        elseif($age >= 8) {
            $resultat .= "« Pupille »";
        }
        elseif($age >= 6) {
            $resultat .= "« Poussin »";
        }
        elseif($age >= 0) {
            $resultat = "L'enfant qui a $age ans est trop jeune pour concourir.";
        }
        elseif($age >= 6) {
            $resultat = "L'age rentré n'est pas valide.";
        }

        return $resultat."<br>";
    }

    echo categorieEnfant(7);

?>