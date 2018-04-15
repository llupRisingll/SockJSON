var conn = new WebSocket('ws://{0}:8080'.format(window.location.hostname));

conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(e.data);
};

conn.onerror = function(e){
    console.log("Fatal Error: "+ e)
};

conn.onclose = function(e){
    console.log("Disconnected "+ e);
}