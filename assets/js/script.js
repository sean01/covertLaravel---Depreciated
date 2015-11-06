var comm = new Icecomm('QqwJhSuaHZgnL9nEH8usMffMBX5nEq2Al3K9RnWxqNhgVx5LO');

comm.on('local', function(options) {
  localVideo.src = options.stream;
});

comm.on('connected', function(options) {
    document.body.appendChild(options.video);
});


comm.on('disconnect', function(options) {
    document.getElementById(options.callerID).remove();
});

comm.connect('my_room')