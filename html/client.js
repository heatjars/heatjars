/*Written by Dizzle/heatjars*/
var conn = new WebSocket('ws://'+this.document.location.hostname+':8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    var msgStuff = JSON.parse(e.data);
    document.getElementById('iCM').innerHTML = document.getElementById('iCM').innerHTML+"<br>"+msgStuff.user+": "+ msgStuff.msg;
};
/*oputting messages into JSON format ahah*/
document.getElementById('msg').addEventListener('click', function() {
    var msg = '{"user":"'+document.getElementById('user').value+'","msg":"'+document.getElementById('message').value+'"}'; 
    var msgStuff = JSON.parse(msg);
    document.getElementById('iCM').innerHTML = document.getElementById('iCM').innerHTML+"<br>"+msgStuff.user+": "+ msgStuff.msg;
    conn.send(msg);
});
