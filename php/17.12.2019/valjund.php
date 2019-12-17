<?php

function table($andmed, $pealkirjad) {
    echo "<table>";
        echo "<thead>";
        echo "<tr>";
        foreach ($pealkirjad as $pealkiri){
            echo "<th>".$pealkiri."</th>";
        }
        echo "</tr>";
        echo "</thead>";

        echo "<tbody>";

        foreach ($andmed as $tabeliRida) {
            echo "<tr>";
            foreach ($tabeliRida as $value) {
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
    echo "</table>";
}

// otsingu vorm
function otsinguVorm(){
    echo "<form action=\"\" method=\"get\">
		<input type=\"text\" name=\"otsi\">
		<input type=\"submit\" value=\"Otsi\"> 
	</form>";
}

// andmete lisamise vorm
function lisaAndmedVorm(){
    echo
    '<form action="" method="get">
      Eesnimi <input type="text" name="enimi">
      Perenimi <input type="text" name="pnimi">
      Kontakt <input type="text" name="kontakt">
      <input type="submit" value="Salvesta">
    </form>
  ';
}