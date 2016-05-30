function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var naam = getParameterByName('naam');
var ww = getParameterByName('wachtwoord');

if (naam=='RnJlZWs=' && ww == 'VmVyd29uZGVyaW5n') {
    $('#succes').show();
} else {
    $('#faal').show();
}