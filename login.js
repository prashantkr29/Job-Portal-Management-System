// Connect to mysql database

var mysql = require('mysql');
var express = require("express");


var app = express();
app.use("/css",express.static("css"));

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: '12345',
  database: "jobportal"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});

app.get("/",function(req,res){
    res.sendFile(__dirname + "/login.html")
})


//Set app port
app.listen(5000);



