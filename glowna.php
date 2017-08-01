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
        echo "<title>$this->tytul</title>\n";
    }
    
    public function wyswietlZnaki() {
        echo '<meta charset="UTF-8" />'."\n";
    }
    
    public function wyswietlOpis() {
        echo "<meta name=\"description\" content=\"$this->opis\"/>\n";
    }
    
    public function wyswietlLinki() {
?>
    <link rel="stylesheet" type="text/css" href="css/stylee.css" />
    <link rel="stylesheet" type="text/css" href="css/fontello/css/fontello.css" />
    <link href='https://fonts.googleapis.com/css?family=Vidaloka' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="js/timer.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
<?php
    }
    
    public function wyswietlExplorer() {
        echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>'."\n";
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
    
    public function wyswietlHead() {
        $this->wyswietlZnaki();
        $this->wyswietlTytul();
        $this->wyswietlOpis();
        $this->wyswietlExplorer();
        $this->wyswietlLinki();
        $this->wyswietlJS();
    }
    
    public function wyswietlNaglowek(){
        ?>
        <div id="czapka">
			<div id="czas">
				<div id="kalendarz">
					NASTĘPNE GRAND PRIX NA MONZY ZACZNIE SIĘ ZA...
					<div id="odliczanie"></div>
				</div>
			</div>
			<div id="socjale">
				<div id="fb" class="soc">
					<a href="https://www.facebook.com/AutodromoNazMonza" target="_blank" title="facebook">
					<i class="icon-facebook-squared"></i></a></div>
				<div id="yt" class="soc">
					<a href="https://www.youtube.com/user/AutodromoMonza" target="_blank" title="youtube">
					<i class="icon-youtube-squared"></i></a></div>
				<div id="tw" class="soc">
					<a href="https://twitter.com/Autodromo_Monza" target="_blank" title="twitter">
					<i class="icon-twitter-squared"></i></a></div>
				<div id="inst" class="soc">
					<a href="https://instagram.com/autodromonazionale_monza/" target="_blank" title="instagram">
					<i class="icon-instagram"></i></a></div>
				<div class="czysc"></div>
			</div>
			<div class="czysc"></div>
		</div>
                <div id="glowa">
			<div id="logo">
			<a href="monza-home"><img alt="" src="images/male-logo3.png" title="powrót do strony głównej"></a>
			</div>
			<div id="tytul">Historia<br />Toru Monza</div>
			<div id="headr">
				<img alt="" src="images/headfarina1.png">
			</div>
		</div>
    <?php
    }
        
    
    
    public function wyswietlContent() {

        
    }
    
    
}

