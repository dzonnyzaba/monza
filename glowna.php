<?php

class Glowna{
    protected $zawartosc;
    protected $tytul;
    protected $opis;
    protected $menu;
    public function __construct($zaw) {
        $this->zawartosc = $zaw;
        $this->tytul = "Tor Monza - strona główna";
        $this->opis = "Tor wyścigowy we Włoszech - Monza";
        $this->menu = array(
            "Home" => "monza-home",
            "O torze" => "o-torze-monza",
            "Układ toru" => "uklad-toru",
            "Galeria" => "galeria-foto",
            "Dojazd" => "dojazd-do-toru"
        );
    }
    
    public function wyswietlTytul(){
        echo "<title>$this->tytul</title>";
    }
    
    public function wyswietlZnaki() {
        echo '<meta charset="UTF-8">';
    }
    
    public function wyswietlOpis() {
        echo "<meta name=\"description\" content=\"$this->opis\"/>";
    }
    
    public function wyswietlLinki() {
?>
    <link rel="stylesheet" type="text/css" href="stylee.css" />
    <link rel="stylesheet" type="text/css" href="fontello/css/fontello.css" />
    <link href='https://fonts.googleapis.com/css?family=Vidaloka' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="timer.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
<?php
    }
    
    public function wyswietlExplorer() {
        echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>';
    }
    
    public function wyswietlJS() {
?>
	<script type="text/javascript">
	$(document).ready(function() {
		pokazOdliczanie();
		$('#suwak').hide();
		$('#ok').click(function(){
			$('#kukiz').css('display','none');
		});
		$('#przycisk').click(function(){
			$('#suwak').animate({width: 'toggle'},1000);
			$('#przycisk p').toggle(1000);
		});
	});
	</script>
<?php
    }
    
    public function wyswietlHeader() {
        $this->wyswietlZnaki();
        $this->wyswietlTytul();
        $this->wyswietlOpis();
        $this->wyswietlExplorer();
        $this->wyswietlLinki();
        $this->wyswietlJS();
    }
    
    
}

