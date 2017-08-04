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
    
    <link rel="stylesheet" type="text/css" href="css/fontello/css/fontello.css" />
    <link href='https://fonts.googleapis.com/css?family=Vidaloka' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/stylee.css" />
        <?php
    }
    
    public function wyswietlExplorer() {
        echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>'."\n";
        echo '<meta name="viewport" content="width=device-width, initial-scale=1">'."\n";
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
    
    public function wyswietlNawigacje(){
?>
        <div id="lewe">
            <ul>
		<li><a href="monza-home">Home</a></li>
		<li><a href="o-torze-monza">O torze</a></li>
		<li><a href="uklad-toru">Układ toru</a></li>
                <li><a href="historia-toru-monza">Historia</a></li>
		<li><a href="galeria-foto">Galeria</a></li>
		<li><a href="dojazd-do-toru">Dojazd</a></li>
            </ul>
	</div>
<?php
    }
    
    public function wyswietlMain() {
?>
    <div id="centrum">
	<p>Monza to niewielkie miasto i gmina w północnych Włoszech, 
            w regionie Lombardia, w prowincji Monza i Brianza. 
            Potocznie nazwą tą określa się również tor wyścigowy 
            leżący nieopodal tego miasta. Niniejsza strona poświęcona 
            jest właśnie temu obiektowi, który od niemal stu lat zajmuje 
            jedno z ważniejszych miejsc w kalendarzu fana sportów motorowych...</p>
    </div>
<?php
    }
        
        public function wyswietlAside() {
?>
	<div id="prawe">
            <p>
		TO<br>
		MIEJSCE<br>
		CZEKA<br>
		NA<br>
		TWOJĄ<br>
		REKLAMĘ
            </p>
	</div>
	<div class="czysc"></div>
<?php
    }
    
    
    public function wyswietlContent() {
        echo '<div id="brzuch">';
        $this->wyswietlNawigacje();
        $this->wyswietlMain();
        $this->wyswietlAside();
        echo "</div>";
    }
    
    public function wyswietlStopke() {
?>      
        <div id="nogi">Copyright &copy; Strona w sieci od 2015r. Janusz Pałubski.
		 Wszelkie prawa zastrzeżone</div>
	
	<div id="kukiz">
		<div id="kukiz2">
		<div id="ciacha">Ta strona używa ciasteczek. Jeżeli zgadzasz sie na to - to klikaj OK.</div>
		<div id="ok">OK</div>
		</div>
	</div>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/timer.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" ></script>
        
<?php
        }
    
        public function wyswietl() {
            echo "<!DOCTYPE html>\n";
            echo "<html lang=\"pl\">\n";
            echo "<head>\n";
            $this->wyswietlHead();
            echo "</head>\n<body>\n";
            echo "<div id=\"pojemnik\">\n";
            $this->wyswietlNaglowek();
            $this->wyswietlContent();
            $this->wyswietlStopke();
            $this->wyswietlJS();
            echo "</div>";
            echo "</body>\n</html>";
        }
    
}

