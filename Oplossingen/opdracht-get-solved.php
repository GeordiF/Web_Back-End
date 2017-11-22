<?php

$artikels = array(

						array ('titel' => 'Eerste concert in minder dan uur uitverkocht: Lil’ Kleine kondigt extra show aan',
								'datum' => '12 oktober 2017 ',
								'inhoud' => 'De 7500 tickets voor de show van Lil’ Kleine in de Lotto Arena vlogen vorige week in minder dan een uur allemaal de deur uit. En ook de wachtlijst loopt intussen vol. Maar er is goed nieuws voor z’n fans: de jonge Nederlandse rapper kondigt vandaag een extra show op 30 april 2018 aan.
                                
Met ‘Alleen’ pakt Lil’ Kleine het helemaal anders aan. Dit keer brengt hij namelijk voor het eerst geen gastartiesten mee. Al kunnen fans zich wel verwachten aan een muzikale rollercoaster én een visueel spektakel. Bij onze Noorderburen waren de tickets voor zijn elf shows ook in een mum van tijd uitverkocht.

Verschillende nummers van ‘Alleen’ scheren ook bij ons hoge toppen in de hitlijsten. Zijn nummer ‘Krantenwijk’ staat intussen al 14 weken lang in de Ultratop en behoort tot de populairste nummers van het moment op iTunes en Spotify. Met maar liefst 130 miljoen streams is hij trouwens de meest beluisterde Nederlandse artiest op Spotify ooit. Ook op sociale media is Lil’ Kleine geliefd. Met 900.000 volgers op Instagram en in totaal zo’n 2.000.000 fans op andere kanalen, is hij één van de grootste social influencers van de Benelux.

De ticketverkoop start vanavond om 20.00 uur via www.lotto-arena.be.',
                               
								'afbeelding' => 'img/kleine.jpg',
								'afbeeldingBeschrijving' => 'mottigen tak',
								),

						array ('titel' => 'De herfst is naar goede traditie niet alleen het seizoen van de vallende bladeren en wollen sjaals, maar ook dat van de volgesnotterde zakdoekjes en liters kippensoep.',
								'datum' => '12 oktober 2017',
								'inhoud' => ' De herfst is naar goede traditie niet alleen het seizoen van de vallende bladeren en wollen sjaals, maar ook dat van de volgesnotterde zakdoekjes en liters kippensoep. Ieder jaar opnieuw worden we weer geveld door vervelende kwaaltjes, of dat nu de griep of een stevige verkoudheid is. Neem nu al je voorzorgen, en wedden dat jij dit jaar de dans wél ontspringt?
Vóór je ziek bent
Het grootste probleem ligt niet bij jezelf, maar de anderen. Misschien heeft je collega wel een verkoudheid te pakken, of heeft die man naast je op de trein heimelijk de griep. Probeer dan maar eens om zelf niét ziek te worden met al die bacteriën rondom je. Al zijn er een paar dingen die je kan doen:
- Was je handen zo vaak mogelijk. En dat is niet gewoon je handen snel onder de kraan steken. Was je handen minstens 20 seconden lang met zeep en water, en vergeet zeker het plekje tussen je vingers en onder je nagels niet. Blijf ook zo veel mogelijk met je handen weg van je neus, mond en gezicht in het algemeen.
- Ontsmet je werkplek. En je eettafel, kookeiland, de deurknoppen, afstandsbediening van de televisie, je laptop en telefoon. Bacteriën kruipen overal en kunnen maar liefst 24 uur op een plek overleven, dus zorg dat je alles goed schoonmaakt en dat je op verplaatsing desinfecterende doekjes bij je hebt.
- Verzorg jezelf. Je lichaam is er een kéi in om je te beschermen tegen ziektes, zeker als je er zelf voor zorgt dat je immuunsysteem in topconditie is. Dat doe je door goed te eten (veel fruit en groenten) en voldoende te rusten. Vergeet ook je dagelijkse portie beweging niet, en beperk dat avondlijke glaasje wijn tot een minimum.
Wat als je je nu al niet zo best voelt?
Probeer anderen te beschermen, en hoest of nies zo veel mogelijk in de holte van je elleboog in plaats van je handen. Ook nu geldt trouwens dat je je handen best wast nadat je je mond of neus aangeraakt hebt, zelfs al was het maar met een zakdoekje.
Wat doe je beter niet?
- Deel geen eten, drank, bekertjes of andere voorwerpen met anderen.
- Ben je weer beter? Vergeet dan zeker niet om je tandenborstel weg te gooien. Zorg er ook voor dat je de tandenborstel van de zieke gescheiden houdt van de andere tandenborstels.
- Deel geen kussen of deken met de zieke. Het is beter dat jullie deze periode apart slapen. Wanneer hij of zij beter is, was dan alle lakens voor jullie terug samen in bed kruipen.
- Zorg ervoor dat kinderen hun speelgoed niet uitlenen aan anderen als ze ziek zijn. Toch gebeurd? Zorg er dan voor dat je de speeltjes goed ontsmet.',
								'afbeelding' => 'img/ziek.jpg',
								'afbeeldingBeschrijving' => 'warm aankleden',
								),

						array ('titel' => 'Hier moet je naartoe: het allereerste Disneyrestaurant',
								'datum' => '12 oktober 2017 ',
								'inhoud' => ' Als kind was het onze grootste ambitie: prinses worden. De eerlijkheid gebiedt ons te zeggen dat dat niet helemaal gelukt is, dus nemen we maar genoegen met the next best thing: eten zoals het een echte Disneyprinses betaamt. In een heus ‘Belle en het Beest’-restaurant.
                                
“Come as a beauty, leave as a beast,” zo luidt de leuze van het gloednieuwe pop-uprestaurant in het Londense Vault Theater. Nog tot en met 14 januari waan je jezelf Belle in een waar sprookjeskasteel.
                                
                                Op het kasteel, dat voor het event de toepasselijke naam ‘Beauty and the Feast’ kreeg, word je hartelijk ontvangen door petemoei Fairy Liquid, en kan je genieten van enkele sprookjesachtige cocktails die je innerlijke beest loslaten. Tijdens het eten kan je genieten van film- en dansvoorstellingen, terwijl het keukenpersoneel - net zoals bij Belle - hun uiterste best doet om het jou naar je zin te maken. En na het eten kan je uiteraard net als onze favoriete Disneypersonages je benen losgooien op de immense dansvloer.
                                
Tickets kosten 40 euro als je er snel bij bent, later zullen de prijzen stijgen tot 50 à 60 euro. Zeg nu zelf, het perfecte excuus om er een weekendje Londen aan te breien, toch?',
								'afbeelding' => 'img/disney.jpg',
								'afbeeldingBeschrijving' => 'Belle en het beest',
								),
					);


$enkelArtikel = false;
$geenArtikel = false; 


	if ( isset ( $_GET['id'] ) )
	{
		$id = $_GET['id'];

		if ( array_key_exists( $id , $artikels ) )
		{
			$artikels 			= 	array( $artikels[$id] );
			$enkelArtikel	=	true;
		}
		else
		{
			$geenArtikel	=	true;
		}		
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

	<?php if ( $geenArtikel ): ?>
		<title>Oplossing get: deel1 - Het artikel met id <?php echo $id ?> bestaat niet</title>
	<?php else: ?>
		<title>Oplossing get: deel1. Artikel: <?php echo $artikels[0]['titel'] ?></title>
	<?php endif ?>
    
    <style>
    
        body {
            
            font-family: sans-serif; 
            color: black; 
            background-color: #f7f9d1; 
        }
        
        .artikelContainer {
            
            width: 1024px; 
            margin-left: auto;
            margin-right: auto; 
            
        }
        
        img {
            
            max-width: 100%
            
        }
        
        .meerdere
		{
			float:left;
			width:288px;
			margin:16px;
			padding:16px;
			box-sizing:border-box;
			background-color:#dfe0c7;
            
        }
        
        .enkel {
            
            width: auto;
            margin: 5em; 
            padding: 2em;
            box-sizing: border-box; 
            background-color: #dfe0c7; 
            
        }
        
    </style>
</head>
<body>
   
<?php if(!$geenArtikel): ?>
<div class="artikelContainer"> 
<?php  foreach ($artikels as $id => $artikel): ?> 
 
<article class="<?php echo (!$enkelArtikel) ? 'meerdere' : 'enkel'?>" >
      
   <h1><?php echo $artikel['titel']; ?></h1>
   
   <p><?php echo $artikel['datum']; ?></p>
     
   <img src="<?php echo $artikel['afbeelding']; ?>" alt="<?php echo $artikel['afbeeldingomschrijving']; ?>">
   
   <p><?php echo(!$enkelArtikel) ? (substr($artikel['inhoud'], 0, 50) . '...') : $artikel['inhoud']; ?></p>
   
   <?php if ( !$enkelArtikel ): ?>
						<a href="opdracht-get-solved.php?id=<?php echo $id ?>">Lees meer</a>
				<?php endif ?>  
    </article>
   
<?php endforeach ?> 
 
    </div>  
<?php else: ?>
    <p>Het artikel met je gekozen id, namelijk <?php echo $id . " " ?> bestaat niet.</p>
<?php endif ?>

    
</body>
</html>