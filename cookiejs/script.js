document.cookie = 'website=freetuts.net';
document.cookie = 'email=thehalfheart@gmail.com';

var giatri = document.cookie;

cookiearray = giatri.split(';');

var name = "";
var value = "";
for (var i = 0; i < cookiearray.length; i++) {
    name = cookiearray[i].split('=')[0];
    value = cookiearray[i].split('=')[1];

    document.getElementById('result').innerHTML = name + " " + value;
}

