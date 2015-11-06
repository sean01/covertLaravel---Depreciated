var express = require('express');
var app = express();
var server = require('http').Server(app);
app.use(express.static('.'))
server.listen(8000)