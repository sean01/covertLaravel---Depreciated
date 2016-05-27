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


comm.connect(location.hash, {audio: true});


// Index JS

$("#roomName").focus();

	
	// this function just sends you to a url like /room/blah where 'blah' is what was typed in the input
function goToRoom(e) {
	e.preventDefault();

	var roomName = $.trim($('#roomName').val());

	if(!roomName){ return; } 

    window.location.href = '/covert/room/' + roomName;

}

$('form').on('submit', goToRoom);

