

let fs = require("fs");   //ফাইল সিস্টেম মডিউলকে add করতে।
let http = require("http");   //server কে handle করতে।

//server তৈরি করতে।
let server = http.createServer(function(req, res){
  if( req.url = "/" ){
    fs.readFile('Home.html', function(error, data){
      res.writeHead(200,{'content-type': 'text/html'});
      res.write(data);
      res.end();
    });
  }
});

server.listen(4040);
console.log("Server Run Success.");

