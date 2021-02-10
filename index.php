<p>1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
</p>
<?php
echo $vardas = 'Josh';
echo '<br>';
echo $pavarde = 'Hartnett';
echo '<br>';
echo 'Trumpesnis stringas yra : ';
echo strlen($vardas) <= strlen($pavarde) ? $vardas : $pavarde;
echo '<br>';
?>
<p>2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
</p>
<?php
$vardas2 = 'Mark';
$pavarde2 = 'Wahlberg';

Echo (strtoupper($vardas2).' '.strtolower($pavarde2));
?>

<p>3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
</p>
<?php

echo $vardas3 = 'Leonardas';
echo ' ';
echo $pavarde3 = 'Pobedonoscevas';
echo'<br>';
echo "Inicialai $vardas3[0]. $pavarde3[0].";
echo'<br>';
?>

<p>4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
</p>

<?php

echo $vardas4 = 'Charlie';
echo ' ';
echo $pavarde4 = 'Hunnam';
echo '<br>';

$papildomasStringas = substr($vardas4, -3) . substr($pavarde4, -3); 
echo $papildomasStringas;
echo '<br>';
?>

<p> 5.Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.
</p>

<?php
echo $pavadinimas = "An American in Paris";
echo'<br>';
echo str_ireplace("a", "*", $pavadinimas);
echo'<br>';
?>

<p>6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.
</p>

<?php
echo $pavadinimas2 = "An American in Paris";
echo '<br>';
$mazosiosa = substr_count($pavadinimas2, 'a');
$didziosiosA = substr_count($pavadinimas2, 'A');
$sumaAa = $mazosiosa + $didziosiosA;
echo "pavadinime yra ( $sumaAa ) A,a raides.";
echo '<br>';
?>

<p>Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
</p>

<?php
echo '<br>';
$filmas1 = 'An American in Paris';
$filmas2 = "Breakfast at Tiffany's";
$filmas3 = "2001: A Space Odyssey";
$filmas4 = "It's a Wonderful Life";
$balses = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");
$filmoPriebalses1 = str_replace($balses, "", $filmas1);
$filmoPriebalses2 = str_replace($balses, "", $filmas2);
$filmoPriebalses3 = str_replace($balses, "", $filmas3);
$filmoPriebalses4 = str_replace($balses, "", $filmas4);

echo $filmoPriebalses1;
echo '<br>';
echo $filmoPriebalses2;
echo '<br>';
echo $filmoPriebalses3;
echo '<br>';
echo $filmoPriebalses4;
echo '<br>';
?>

<p>8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.
</p>
<?php

echo $stringas = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo '<br>';
$stringasSplit = explode(' ', $stringas);
  foreach ($stringasSplit as $split) {
    if (is_numeric($split)) {
      echo "Epizodo numeris : $split" . '<br><br>';
    }
  }

  ?>

  <p> 9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
</p>

<?php
Echo '<br>';

$komedija = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$komedijaZodziuKiekis = 0;
$komedijaSplit = explode(' ', $komedija);

$komedija2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$komedija2ZodziuKiekis = 0;
$komedija2Split = explode(' ', $komedija2);

foreach ($komedijaSplit as $split) {
    if (strlen($split) <= 5) {
        $komedijaZodziuKiekis++;
    }
  }

  foreach ($komedija2Split as $split2) {
    if (mb_strlen($split2, 'UTF-8') <= 5) {
      $komedija2ZodziuKiekis++;
    }
  }
  echo "Angliskas pavadinimas: $komedija" . '<br>';
  echo "Skaicius zodziu, kurie yra trumpesni, arba lygus 5 simboliams: $komedijaZodziuKiekis" . '<br>';
  echo '<br><br>';
  echo "Lietuviskas filmo pavadinimas: $komedija2" . '<br>';
  echo "Skaicius zodziu, kurie yra trumpesni, arba lygus 5 simboliams: $komedija2ZodziuKiekis" . '<br>';

  ?>

  <p>10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
</p>

<?php

$raidynas = 'q w e r t y u i o p a s d f g h j k l z x c v b n m';
$raidynasArr = explode(' ', $raidynas);
$randomRaides = '';
for ($i = 0; $i < 3; $i++) {
    $randomRaides .= $raidynasArr[rand(0, (count($raidynasArr) - 1))];
}
echo $randomRaides;
echo '<br><br>';

























