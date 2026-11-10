
<?php
declare(strict_types=1);
function additionner(float $a, float $b): float
{
 return $a +$b;
}
function diviser(float $a, float $b): float
{
    if($b == 0){
         throw new InvalidArgumentException("Division par zéro impossible");
    }
 return $a /$b;
  
}

function soustraire(float $a, float $b): float
{
 return $a -$b;
}
function multiplier(float $a, float $b): float
{
 return $a *$b;
}
function estPair(int $n): bool
{
 return ($n%2==0)?true:false;
}
function estPositif(float $n): bool
{
 return ($n>0)?true:false;
}
function maximum(float $a, float $b): float
{
 return ($a>$b)?$a:$b;
}
function maximum2(float $a, float $b,float $c): float
{
    $m=maximum($a,$b);
 return ($c>$m)?$c:$m;
}
function estPremier(int $n): bool{
$p=true;

for($i=2;$i<$n;i++){
    if($n%$i==0){
          $p=false;
    }
}
return $p;
}
  function calculerTTC(float $ht, float $tva = 20.0): float{
      return $ht *(1+ $tva /100)  ;
  }
 function calculerRemise(float $prix, float $pourcentage): float{
 $$prixremise=$prix*(1 - $pourcentage/100);
 return round($prixremise, 2);
  }
  function calculerFacture(float $prixUnitaire, int $, float $remise = 0, float $tva
= 20.0): float{
    $totalht=$prixUnitairev * $quantite ;
    $totalremise = calculerremise($totalht, $remise );
    return calculerttc($totalremise, $tva);
}
function formaterPrix(float $montant): string
{
    return number_format($montant, 2, ",", " ") . " MAD";
}
function moyenne(float ...$notes): float
{
    if (count($notes) === 0) {
        return 0.0;
    }
    return array_sum($notes) / count($notes);
}
   function aireCercle(float $rayon): float {
      return round(M_PI * ($rayon ** 2), 2);
   }
   function perimetreCercle(float $rayon): float{
         return round(2 * M_PI * $rayon, 2);
   }
function celsiusVersFahrenheit(float $c): float{
    return $c * 9 / 5 + 32;
}
function fahrenheitVersCelsius(float $f): float
{
    return ($f - 32) * 5 / 9;
}
 function convertirDevise(float $montant, float $taux): float{
         return $montant * $taux;
 }
  function factorielle(int $n): int
{
    if ($n < 0) {
        throw new InvalidArgumentException("La factorielle d'un nombre négatif n'existe pas.");
    }
    
    $resultat = 1;
    for ($i = 1; $i <= $n; $i++) {
        $resultat *= $i;
    }
    return $resultat;
}

function fibonacci(int $n): array
{
    if ($n <= 0) {
        return [];
    }
    if ($n === 1) {
        return;
    }
    
    $suite =;
    for ($i = 2; $i < $n; $i++) {
        $suite[] = $suite[$i - 1] + $suite[$i - 2];
    }
    return $suite;
}

function pgcd(int $a, int $b): int
{
    while ($b !== 0) {
        $reste = $a % $b;
        $a = $b;
        $b = $reste;
    }
    return abs($a);
}


   
 





