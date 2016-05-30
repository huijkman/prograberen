function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var namen = ["moos","adam","ulla","zico","jakob"];

var naam = getParameterByName('naam').toLowerCase();
var ww = getParameterByName('wachtwoord');

var i = namen.indexOf(naam);

var wachtwoorden = ["Banaan", "Appel", "Mandarijn", "Peer", "Citroen"];

if (ww == wachtwoorden[i]) {
    $('#succes').show();
} else {
    $('#faal').show();
}