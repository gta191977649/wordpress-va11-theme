/*
	Sparrow JS
	By Episodes
*/

/////////// 播放特效音 ///////////

function play_sound($name) {
	//alert("test");
    var thissound=document.getElementById($name);
    thissound.play();
}
//Jquery 监听a标签hover事件
(function($){
	//鼠标划过
	$( "a" ).mouseover(
	  function() {

	    play_sound("audio_hover");
	  }
	);
	//鼠标按下
	$( "a" ).click(
	  function() {

	    play_sound("audio_click");
	  }
	);
	

	

}(jQuery));

