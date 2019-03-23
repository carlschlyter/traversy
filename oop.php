<?php

    class person{
        private $name;
        private $email;
        
        public function setName($name){
            $this->name  = $name;
        }
        
        public function getName(){
            return $this->name;
        }
    
    }

    $person1 = new person;

    $person1->setName('Barbra Streisand');

    echo $person1->getName() . '<br>';

    // $person1->name = 'Barbra Streisand';
    // echo $person1->name;

    // Testar att skapa en egen class

    class music{
        private $artist;
        private $song;
        
        public function setArtist($artist){
            $this->artist = $artist;
        }

        public function setSong($song){
            $this->song = $song;
        } 

        public function getArtist(){
            return $this->artist;
        }

        public function getSong(){
            return $this->song;
        }
    }

    $music1 = new music;
    $music1->setArtist('Elton John');
    echo $music1->getArtist() . ' - ';
    $music1->setSong('Your song');
    echo $music1->getSong() . '<br>';

    $music2 = new music;
    $music2->setArtist('The Beatles');    
    $music2->setSong('Blackbird');
    echo $music2->getArtist() . ' - ';
    echo $music2->getSong() . '<br>';

    $music3 = new music;
    $music3->setArtist('Luciano Pavarotti');
    $music3->setSong('Che gelida manina');
    echo $music3->getArtist() . ' - ';
    echo $music3->getSong();


?>