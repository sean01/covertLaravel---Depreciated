var comm = new Icecomm('QqwJhSuaHZgnL9nEH8usMffMBX5nEq2Al3K9RnWxqNhgVx5LO');



comm.on('local', function(options) {
  document.querySelector('.localVideo').src = options.stream;
});

comm.on('connected', function(peer) {
    document.querySelector('.video-c').appendChild(peer.getVideo());
    console.log('peer', peer);
    console.log('peer.getVideo()',peer.getVideo());
});


comm.on('disconnect', function(options) {
    document.getElementById(options.callerID).remove();
});


comm.connect(location.hash, {audio: false});


// Index JS

$("#roomName").focus();
$("form").submit(false);

function goToRoom(){

	console.log("goToRoom"); 
	
	var roomName = $.trim($("#roomName").val());
	
	console.log(roomName); 
	
	if(roomName.length <= 0 )
		return;
	
	$("#roomContainer").fadeOut('slow');
		
	window.location = "/" + roomName;
}

$('#submitButton').click( goToRoom );

$('#roomName').keypress(function(e){
	if (e.keyCode === 13) goToRoom();
});


window.onresize = verticalCenter;