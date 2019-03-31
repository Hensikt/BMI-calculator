<?php
  $gewicht = $_GET["gewicht"];
  $lengte = $_GET["lengte"];
  $leeftijd = $_GET["leeftijd"];
  $geslacht = $_GET["geslacht"];
  if(check($gewicht, $lengte, $leeftijd)){
    BMIcalc($gewicht, $lengte, $leeftijd, $geslacht);
  } else {
    echo "Leeftijd, gewicht en lengte moeten nummers zijn!";
  }

  function BMIcalc($gewicht, $lengte, $leeftijd, $geslacht){
    $centimeter = $lengte / 100;
    $antwoord = $gewicht / ($centimeter * $centimeter);

    echo "Van wat u hebt ingevult bent u een " . $geslacht . ".<br><br>";
    echo "Met een gewicht van " . $gewicht . " kg.<br>";
    echo "Een lengte van " . $lengte . " cm.<br>";
    echo "Een leeftijd van " . $leeftijd . ".<br>";

    if($antwoord < 18.5){
      echo "<p class=conclusie>Je bent veel te licht man, ga eten.</p>";
    } else if($antwoord >= 18.5 && $antwoord <= 24.9){
      echo "<p class=conclusie>Kijk is aan, iemand die zorgt voor zichzelf</p>";
    } else if($antwoord >= 25 && $antwoord <= 29.9){
      echo "<p class=conclusie>Zo jij bent dik</p>";
    } else if($antwoord >= 30 && $antwoord <= 34.9){
      echo "<p class=conclusie>Class 1 obesitas, als ik jou was zou ik naar de dokter gaan.</p>";
    } else if($antwoord >= 35 && $antwoord <= 39.9){
      echo "<p class=conclusie>Class 2 obesitas, damn man ga is sporten.</p>";
    } else if($antwoord >= 40){
      echo "<p class=conclusie>Class 3 obesitas, MAN ZELFS EEN SCHOT KAN JOU NIET MEER VERPLAATSEN.</p>";
    }
  }

  function check($gewicht, $lengte, $leeftijd){
    if(is_numeric($gewicht)){
       if(is_numeric($lengte)){
         if(is_numeric($leeftijd)){
           return true;
         }
       }
    }
    return false;
  }
?>
