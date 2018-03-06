<?php
$startdate = '03/05/2018 11:59:59 PM';
$expdate = '03/30/2018 11:59:59 AM';
?>
<style>
#bloc-progressbar{text-align:center;background-color: #f5f5f5;border-radius: 4px;-webkit-box-shadow: inset 0 6px 11px rgba(0,0,0,.1);box-shadow: inset 0 6px 11px rgba(0,0,0,.1);width:100%;}
#progressbar{-webkit-transition: width 3s, height 4s;transition: width 3s, height 4s;display:none;height:40px; background: linear-gradient(to left, #1FACD0 20%,#D75048 90%);font-family:sans-serif; width:100%;border: 0px; padding: 6px 0;color: white;border-radius: 4px;font-style: italic;text-align: center;}
#countdown{position: absolute;color: #E3E3E3;right: 0;left: 0;margin-top: 6px;font-size: 22px; 
	-webkit-transition: color 8s;transition: color 8s;
}
@media screen and (max-width: 560px) {
	#countdown{font-size: 16px;}
	#progressbar{height:19px;}
}
</style>
<div id="bloc-progressbar">
	<span id="countdown"></span>
	<div id="progressbar">
	</div>
</div>
<script>
	var end = new Date('<?php print $expdate;?>');
    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer, initialDistance, ratio;

	$(document).ready(function(){

		var now = new Date('<?php print $startdate;?>');
        	initialDistance = end - now;
		timer = setInterval(showRemaining, 1000);
		setTimeout(function(){
			$('#progressbar').fadeIn();
		},1000);
	});
	
    function showRemaining() {

	var texts = {"en" : {day : "day",days : "days",hour : "hour",hours : "hours",min : "min", sec : "sec",left : "to go",},"fr" : {day : "jour",days : "jours",hour : "heure",hours : "heures",min : "min", sec : "sec",left : "restant",},"de" : {day : "Tag",days : "Tage",hour : "Stude",hours : "Studen",min : "Min", sec : "Sek",left : "loss geht's",},"it" : {day : "day",days : "days",hour : "hour",hours : "hours",min : "min", sec : "sec",left : "to go",}};
	texts = texts[lang];
        var now = new Date();
        var distance = end - now;
	ratio = (distance * 100)/initialDistance;

	$('#progressbar').css({width:ratio+'%'});
	
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'Expir&eacute;!';
			$('#countdown').css({color:'#7E949C'});
			$('#progressbar').css({width:'0%'});

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

		var strday = days > 1 ? texts.days : texts.day;

		if(days>0){
			document.getElementById('countdown').innerHTML = ''+ days + ' '+strday+' ';
		}else{
			document.getElementById('countdown').innerHTML = '';
		}
		
		if(hours>0){
			document.getElementById('countdown').innerHTML += hours + ' '+texts.hours+' ';
		}else{
			document.getElementById('countdown').innerHTML += '';
		}
        document.getElementById('countdown').innerHTML += minutes + ' '+texts.min+' ';
        document.getElementById('countdown').innerHTML += seconds + ' '+texts.sec+' ';
        document.getElementById('countdown').innerHTML += texts.left;

		var _blocProgbarWidthTotal = $('#progressbar').parent().width();
		var _blocProgbarWidth = $('#progressbar').width();
		var ratio = (_blocProgbarWidth*100)/ _blocProgbarWidthTotal;
		
		if(	ratio	<	50	){
			$('#countdown').css({color:'#7E949C'});
		}
			
			
		
		
    }
</script>

