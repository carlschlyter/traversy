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

    echo $person1->getName() . '<br><br>';

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
    echo $music1->getSong() . '<br><br>';

    $music2 = new music;
    $music2->setArtist('The Beatles');    
    $music2->setSong('Blackbird');
    echo $music2->getArtist() . ' - ';
    echo $music2->getSong() . '<br><br>';

    $music3 = new music;
    $music3->setArtist('Luciano Pavarotti');
    $music3->setSong('Che gelida manina');
    echo $music3->getArtist() . ' - ';
    echo $music3->getSong() . '<br><br>';   

    $jazzMusic = new music;
    $jazzMusic->setArtist('Nils Landgren');
    $jazzMusic->setSong('Wonderful world');
    echo $jazzMusic->getArtist() . ' - ';
    echo $jazzMusic->getSong() . '<br><br>';

    class movies{
        private $title;
        private $actor;
        private $actress;
        
        function setTitle($title){
            $this->title = $title;
        }

        function setActor($actor){
            $this->actor = $actor;
        }

        function setActress($actress){
            $this->actress = $actress;
        }

        function getTitle(){
            return $this->title;
        }

        function getActor(){
            return $this->actor;
        }

        function getActress(){
            return $this->actress;
        }        

    }

    $oldMovies = new movies;
    $oldMovies->setTitle('Gone with the wind');
    $oldMovies->setActor('Clark Gable');
    $oldMovies->setActress('Vivien Leigh');
    echo $oldMovies->getTitle() . ' - ';
    echo $oldMovies->getActor() . ' - ';
    echo $oldMovies->getActress() . '<br><br>';    


    $newMovies = new movies;
    $newMovies->setTitle('A star is born');
    $newMovies->setActor('Bradley Cooper');
    $newMovies->setActress('Lady Gaga');
    echo $newMovies->getTitle() . ' - ';
    echo $newMovies->getActor() . ' - ';
    echo $newMovies->getActress();

    

?>