var app = require('express')();

var server = require('http').Server(app);

var io = require('socket.io')(server);



server.listen(3000);


io.on('connection', function(socket){

  console.log('connected');

  socket.on('chat.message', function(message){

    console.log(message);

    io.emit('chat.message', message);

  });


  socket.on('removeitem', function(message){

    console.log(message);

    io.emit('removeitem', message);


  });



  socket.on('updateitem', function(message){

    console.log(message);

    io.emit('updateitem', message);

  });



});
