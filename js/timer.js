function zeroWiodace(element){
		if(element<10) element="0"+element;
		return element;
	}
	
	function pokazOdliczanie(){
		var rok=2017;
		var miesiac = 9;
		var dzien = 3;
		var dn = "";
		var dzis = new Date();
		var bardzoWaznaData = new Date(rok,miesiac,dzien,14,00);
		var ms_w_dniu = 24*60*60*1000;
		
		var roznica = (bardzoWaznaData.getTime() - dzis.getTime());
		
		var e_zostaloDni = roznica/ms_w_dniu;
		var zostaloDni = Math.floor(e_zostaloDni);
		if(zostaloDni < 2){
			if(zostaloDni == 1){
				dn = "1 DZIEŃ ";
			}
			if(zostaloDni == 0){
				dn = ">>> ";
			}
		}
			else{
				dn = zostaloDni+" DNI ";
			}
		
		
		var e_zostaloGodzin = (e_zostaloDni - zostaloDni)*24;
		var zostaloGodzin = Math.floor(e_zostaloGodzin);
		
		var e_zostaloMinut = ((e_zostaloGodzin - zostaloGodzin)*60);
		var zostaloMinut = Math.floor(e_zostaloMinut);
		
		var e_zostaloSekund = ((e_zostaloMinut - zostaloMinut)*60);
		var zostaloSekund = Math.floor(e_zostaloSekund);
		
		var tekst = "..."+dn+
					zostaloGodzin+':'+zeroWiodace(zostaloMinut)+
					':'+ zeroWiodace(zostaloSekund);
		
		
		if(zostaloDni+zostaloGodzin+zostaloMinut+zostaloSekund <=0){
			document.getElementById("odliczanie").innerHTML= 
				"...Rok";
		}else{
			document.getElementById("odliczanie").innerHTML=tekst;
			setTimeout("pokazOdliczanie()",1000);
		}
	}