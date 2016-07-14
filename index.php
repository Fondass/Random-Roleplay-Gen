<?php

// 7 genres creates 7 arrays of character archetypes
// + 1 array of genres

// 1 array of certain char atributes, not included in genres

// 1 array of scenes, not included in genres


// combined, through the use of randomisers should result in:
// a choice of genre, which instigates a random char generator that takes the chars
// from that genre, takes 3, adds a char atribute to each char, then takes a random scene
// characters should be numbered (ie char 1 etc) or assigned randomly to a person
// there are 3 persons (Fondas, Dandy, guest)



// posible setup:     genre
//         char 1     char 2      char 3
//                    scene



require_once('class_chars.php');
require_once('class_scenes.php');
require_once('class_atributes.php');
require_once('class.genre.php');

echo "<form action='' method='POST'>
      <div><label for='scene'>Genre:
      <select name='genre_select'>
      <option value='' disable selected hidden> please select a genre </option>
      <option value='Fantasy'>Fantasy</option>
      <option value='SciFi'>Sci-Fi</option>
      <option value='InternetCulture'>Internet Culture</option>
      <option value='Steampunk'>Steampunk/pirate</option>
      <option value='Nerds'>Nerds</option>
      <option value='VideogameCulture'>Videogame Culture</option>
      <option value='History'>History / historicall</option></select>
      <input type='submit'>
      </form>";


if (isset($_REQUEST['genre_select']) && $_REQUEST['genre_select'] !== "")
{
    $genre = $_REQUEST['genre_select'];
    showResults($genre);
}

function showResults($genre)
{
        
    $begenrechars1 = $genre;
    $begenrechars2 = $genre;
    $begenrechars3 = $genre;
    
    $showatt1 = showAtributes();
    $showatt2 = showAtributes();
    $showatt3 = showAtributes();
    
    $showscenes = showScenes();
    
    $genrechars1 = $begenrechars1();
    $genrechars2 = $begenrechars2();
    $genrechars3 = $begenrechars3();
    
    if ($genrechars1 !== $genrechars2 && $genrechars2 !== $genrechars3 && $genrechars1 !== $genrechars3)
    {
        if ($showatt1 !== $showatt2 && $showatt2 !== $showatt3 && $showatt1 !== $showatt3)
        {
            echo "<br><br><br> Fondas plays as: ".$showatt1. " " . $genrechars1 . "<br>
                Dandy plays as: "
                . $showatt2. " " . $genrechars2 . "<br> Guest plays as: "
                . $showatt3. " " . $genrechars3 . "<br><br> The scene is: "
                . $showscenes;
        }
        else
        {
            showResults($genre);
        } 
    }
    else
    {
        showResults($genre);
    }
}

function Fantasy()
{
    $fantasy= array();
    
    $fantasy[] = new Fantasy('King');
    $fantasy[] = new Fantasy('Catgirl');
    $fantasy[] = new Fantasy('Rogue');
    $fantasy[] = new Fantasy('Bard');
    $fantasy[] = new Fantasy('Barbarian');
    $fantasy[] = new Fantasy('Adventurer');
    $fantasy[] = new Fantasy('Wood Elf');
    $fantasy[] = new Fantasy('Dark Elf');
    $fantasy[] = new Fantasy('Wizard');
    $fantasy[] = new Fantasy('Overzealous Paladin');
    $fantasy[] = new Fantasy('Bikini plate character');
    $fantasy[] = new Fantasy('Attention seeking and undervalued Healer');
    $fantasy[] = new Fantasy('Half demon half vampire half werewolf');
    $fantasy[] = new Fantasy('member of the undead');
    $fantasy[] = new Fantasy('necromancer');
    $fantasy[] = new Fantasy('Warlock');
    $fantasy[] = new Fantasy('Ring Bearer');
    $fantasy[] = new Fantasy('Lord of Destruction');
    $fantasy[] = new Fantasy('hodor');   
    
    return $fantasy[mt_rand(0, count($fantasy)-1)]->getFantasyResult();
}

function Scifi()
{
    $scifi = array();
    
    $scifi[] = new Scifi('Jar Jar Binks');
    $scifi[] = new Scifi('Captain');
    $scifi[] = new Scifi('fighter pilot');
    $scifi[] = new Scifi('medic');
    $scifi[] = new Scifi('engineer');
    $scifi[] = new Scifi('pacifist heavy gunner');
    $scifi[] = new Scifi('alien mercenary');
    $scifi[] = new Scifi('space marine');
    $scifi[] = new Scifi('smuggler');
    $scifi[] = new Scifi('Wookie');
    $scifi[] = new Scifi('Red shirt');
    $scifi[] = new Scifi('imperial soldier');
    
    return $scifi[mt_rand(0, count($scifi)-1)]->getScifiResult();
}

function InternetCulture()
{
    $intcult = array();
    
    $intcult[] = new Internetculture('i fucked your mom guy');
    $intcult[] = new Internetculture('youtube commenter');
    $intcult[] = new Internetculture('video game journalist');
    $intcult[] = new Internetculture('Brony');
    $intcult[] = new Internetculture('member of the undead');
    $intcult[] = new Internetculture('tumblerette');
    $intcult[] = new Internetculture('apple fanboy');
    $intcult[] = new Internetculture('Linux evangelist');
    $intcult[] = new Internetculture('Meme enthusiast');
    
    return $intcult[mt_rand(0, count($intcult)-1)]->getInternetcultureResult();
}

function Steampunk()
{
    $steampunk = array();
    
    $steampunk[] = new Steampunk('unfortuante adventurer');
    $steampunk[] = new Steampunk('Captain');
    $steampunk[] = new Steampunk('Imperial Soldier');
    $steampunk[] = new Steampunk('member of the undead');
    $steampunk[] = new Steampunk('Englishmen');
    $steampunk[] = new Steampunk('Deckhand');
    $steampunk[] = new Steampunk('Terror from the deep');
    $steampunk[] = new Steampunk('Distinguished businessman/trader');
    $steampunk[] = new Steampunk('High society figure');
    $steampunk[] = new Steampunk('innkeeper');
    $steampunk[] = new Steampunk('peasant');
     
    return $steampunk[mt_rand(0, count($steampunk)-1)]->getSteampunkResult();
}

function VideogameCulture()
{
    $vidgamecult = array();
    
    $vidgamecult[] = new Videogameculture('i fucked you mom guy');
    $vidgamecult[] = new Videogameculture('member of the undead');
    $vidgamecult[] = new Videogameculture('Let\'s Play guy');
    $vidgamecult[] = new Videogameculture('Video Game journalist');
    $vidgamecult[] = new Videogameculture('1337 sp34k3r');
    $vidgamecult[] = new Videogameculture('Raid Leader');
    $vidgamecult[] = new Videogameculture('noob');
    $vidgamecult[] = new Videogameculture('Indie Game developer');
    $vidgamecult[] = new Videogameculture('PC master race');
    $vidgamecult[] = new Videogameculture('Casual');
    $vidgamecult[] = new Videogameculture('Pro Player');
    $vidgamecult[] = new Videogameculture('\"why did we bring this guy again\" guy');
    
    return $vidgamecult[mt_rand(0, count($vidgamecult)-1)]->getVideogameCultureResult();
}

function Nerds()
{
    $nerds = array();
    
    $nerds[] = new Nerds('Otaku(anime nerd)');
    $nerds[] = new Nerds('Larper');
    $nerds[] = new Nerds('DnD Nerd');
    $nerds[] = new Nerds('Comic book nerd');
    $nerds[] = new Nerds('Videogame Nerd');
    $nerds[] = new Nerds('Trading card Nerd');
    $nerds[] = new Nerds('Music Nerd');
    $nerds[] = new Nerds('film Nerd');
    $nerds[] = new Nerds('History Nerd');
    $nerds[] = new Nerds('Programming Nerd');
    $nerds[] = new Nerds('Fake Nerd');
    $nerds[] = new Nerds('Zombie Nerd');
    $nerds[] = new Nerds('Animated TV show Nerd');
    
    return $nerds[mt_rand(0, count($nerds)-1)]->getNerdsResult();
}

function History()
{
    $historicall = array();
    
    $historicall[] = new History('Irishman');
    $historicall[] = new History('Native American');
    $historicall[] = new History('Musketeer');
    $historicall[] = new History('Soviet Submarine operator');
    $historicall[] = new History('Unfortunate adventurer');
    $historicall[] = new History('Caveman');
    $historicall[] = new History('Viking');
    $historicall[] = new History('President of the united states');
    $historicall[] = new History('Knight');
    $historicall[] = new History('King');
    $historicall[] = new History('Pirate');
    $historicall[] = new History('Distinquished Enlishman');
    $historicall[] = new History('Scientist');
    $historicall[] = new History('Assassin');
    $historicall[] = new History('Nazi');
    $historicall[] = new History('Hippy');
    
    return $historicall[mt_rand(0, count($historicall)-1)]->getHistoryResult();
}

function showAtributes()
{
    $atributes = array();
    
    $atributes[] = new Atribute('Stupidly friendly');
    $atributes[] = new Atribute('Overzealous');
    $atributes[] = new Atribute('Burly');
    $atributes[] = new Atribute('Brooding');
    $atributes[] = new Atribute('Power Hungry');
    $atributes[] = new Atribute('Depressed');
    $atributes[] = new Atribute('maniacal');
    $atributes[] = new Atribute('Crazy');
    $atributes[] = new Atribute('Oveconfident');
    $atributes[] = new Atribute('Dashing');
    $atributes[] = new Atribute('Overdramatic');
    $atributes[] = new Atribute('Hysterical');
    $atributes[] = new Atribute('Geeky');
    $atributes[] = new Atribute('Hispter');
    $atributes[] = new Atribute('Drunken');
    $atributes[] = new Atribute('Perverted');
    $atributes[] = new Atribute('Self-righteous');
    $atributes[] = new Atribute('over-excited');
    $atributes[] = new Atribute('Lazy stoner');
    $atributes[] = new Atribute('Smelly');
    $atributes[] = new Atribute('Menacing');
    $atributes[] = new Atribute('missunderstood');
    $atributes[] = new Atribute('Bossy');
    $atributes[] = new Atribute('Overconfident');
    $atributes[] = new Atribute('Frightened');
    $atributes[] = new Atribute('Backstabbing');

    return $atributes[mt_rand(0, count($atributes)-1)]->getAtribute();
}



function showScenes()
{
    
    $genre = $_REQUEST['genre_select'];
    
    switch($genre)
    {
        case "Fantasy":
            $scenes[] = new Scene('During a quest gone horribly wrong');
            $scenes[] = new Scene('After defeating the final boss, during the looting phase');
            $scenes[] = new Scene('In a tavern, right before the bar fight');
            $scenes[] = new Scene('Surrounded by a hundred blood-thirsty goblins.');
            $scenes[] = new Scene('On the run from an angry mob with pitchforks.');
            $scenes[] = new Scene('Being send back and forth by 2 quest givers.');
            return $scenes[mt_rand(0, count($scenes)-1)]->getscenes();
            
        case "SciFi":
            $scenes[] = new Scene('Returning from a failed mission to save the world.');
            $scenes[] = new Scene('On the autopsy table of an alien spaceship.'); 
            $scenes[] = new Scene('On an alien planet with no directions.');
            $scenes[] = new Scene('Trying to dismantle a bomb and not knowing which wire to cut.');
            return $scenes[mt_rand(0, count($scenes)-1)]->getscenes();
            
        case "InternetCulture":
            $scenes[] = new Scene('In school recess in Hiroshima, right before it happens.');
            $scenes[] = new Scene('On the run from a horde of zombies.');
            $scenes[] = new Scene('At a Comicon cue right when its announce that its canceled.');
            $scenes[] = new Scene('On a hill with a view, right before the Apocalypse.');
            $scenes[] = new Scene('In a small enclosed space, experiencing a blackout.');
            return $scenes[mt_rand(0, count($scenes)-1)]->getscenes();
            
        case "Steampunk":
            $scenes[] = new Scene('Stranded on a deserted island with a single bottle of water.');
            return $scenes[mt_rand(0, count($scenes)-1)]->getscenes();
            
        case "VideogameCulture":
            $scenes[] = new Scene('Ganking a noob starting area and just not feeling it anymore');
            $scenes[] = new Scene('During a losing PVP match');
            return $scenes[mt_rand(0, count($scenes)-1)]->getscenes();
            
        case"Nerds":
            return $scenes[mt_rand(0, count($scenes)-1)]->getscenes();
            
        case"History":
            $scenes[] = new Scene('Standing at the front of a linebattle, waiting for the first volley to be fired');
            return $scenes[mt_rand(0, count($scenes)-1)]->getscenes();
    }
}



function tester()
{
    for ($i = 0; $i < 50; $i++)
    {
        Debug::writeToLogFile(showScenes());
    }
}
