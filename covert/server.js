var express = require('express');
var app = express();
var server = require('http').Server(app);
app.use(require('morgan')('tiny'))
app.use(express.static('.'))
server.listen(8000)

console.log('HTTP Server running at http://localhost:8000')
console.log(new Date())