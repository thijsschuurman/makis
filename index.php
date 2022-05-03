<!DOCTYPE html>
<html>
<body>

<h1>PHP oefenpagina</h1>

<?php
// $ is de variable, alle variables die ish overeenkomen met "color" worden de kleur die toegewezen is 
// In PHP, a variable starts with the $ sign, followed by the name of the variable: 
$color = "red";
$COLOR = "yellow";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $color . "<br>";
?>

<?php
$txt = "all dit";
echo "I love $txt!";
?>

<?php
//een getal keer een getal doen gaat met "*"
$x = 50;
$y = 4;
echo $x + $y * $x;
?>

<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
// dus in plaats van function gebruiken we die niet

echo "<p>deze moet dan wel $x x beter zijn</p>";


myTest();

echo "<p>Variable x outside function is: $x</p>";
?>




<h1>SBMG 4x duurder</h1>
<?php

$x = "vier";

echo "<p>Ewa sahbi alles rustig?
Met mij niet mohim
Ik ga meteen uitleggen wat is gebeurd saphey?
Broer, nu ik ben rustig in de stad
Chick komt naar mij toe, zegt tegen mij mijn bril is nep
Ah-ah-ah-ah a vieze kehba
Broer m'n hoofd was hayek heet broer, hayek-hayek heet broer (Stijco)
Hayek heet, na3na3 thee shit, fock niet met mij a sah
Broer zeg tegen deze kehba, broer
Zeg a vieze kehba, vieze bo-izan
Deze bril is $x keer duurder dan je vader z'n sub-base
Sirt kowed, sirt kowed, trrrrr
$x keer duurder, de mijne is $x keer duurder
$x keer duurder, de mijne is $x keer duurder
$x keer, $x keer, $x keer duurder
$x keer duurder, de mijne is $x keer duurder
Je ex is leuk, maar ik ben leuker
Mannen laten me geen keuze
Ren naar binnen in de Jimmy
Vertrek pas als ik ben met Monica Geuze
Elke keer als ik d'r zie krijg ik kriebels in m'n buik, ik zweer 't ze jeuken
Zou d'r never disrespecten, maar ben een homo als ik zeg dat ik haar niet wil neu*
Chawa barkie voor een chain
Bel me en we komen Quick
Ik heb die Roley om m'n wrist
Dat is $x keer duurder dan je whip
Doe een shout out naar m'n ex
Ze ziet me flexen in die clips
Ik hoor ze heeft een nieuwe guy
Dus ik fix een nieuwe bitch
$x keer duurder, de mijne is $x keer duurder
$x keer duurder, de mijne is $x keer duurder
$x keer, $x keer, $x keer duurder
$x keer duurder, de mijne is $x keer duurder
Dit is $x keer duurder dan je trui
En $x keer duurder dan je hemd
Je kan het vragen aan je vriend
Want ik ben 10 keer duurder dan die vent
Dit is $x keer duurder dan je denkt, de waarde op m'n huid is duurder dan een mens
We rijden langs je in een Benz, we geven fully gas en tanken bij de grens
Tijd tikt, watch
Ik heb een hele domme klok
Je moet niet vragen wat 't kost
Want echte mannen geven props
$x keer, $x keer
Dit is $x keer duurder dan normaal
Zomaar doe je interessant
Je dacht je was de man, maar jij hebt niet gehaald
$x keer duurder, de mijne is $x keer duurder
$x keer duurder, de mijne is $x keer duurder
$x keer, $x keer, $x keer duurder
$x keer duurder, de mijne is $x keer duurder
Zeg die mannen het is over
Jouw bitch wil met me roken
Ze heeft de sleutel van m'n huis, de sleutel van m'n Porsche, de sleutel van m'n Rover
Echt waar we rijden groter, veel goud fock je koper
Ik ben geen tovenaar, maar blijf 't uitgeven, shit net alsof ik tover
Ja de bodem of de goot, hoe jij het ook wil noemen is waar ik vandaan kwam
We geven uit op hoog niveau, beter blijf je thuis, ik weet niet of je aankan
Je nieuwe mattie is een flapdrol (sukkel)
Echt hij houdt het nog geen dag vol (ey)
Ik heb niks meer aan je liefde
Ik hoef geen vriendin
Nee, ik wil heel m'n zak vol
Wie is de baas van de VIP?
Wie is die nigger met die bitch?
Wie is die nigger met die saus?
Waarom is die nigger zo lit?
Pull up in a brand new car
Pull up in a brand new whip
$x keer duurder dat ben ik
$x keer duurder dat ben ik
$x keer duurder, de mijne is $x keer duurder
$x keer duurder, de mijne is $x keer duurder
$x keer, $x keer, $x keer duurder
$x keer duurder, de mijne is $x keer duurder</p>"
?>

</body>
</html>