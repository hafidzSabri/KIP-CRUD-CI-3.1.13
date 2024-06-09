function encrypt(){
    var str = document.forms["from"]["txt"].value;
    var enkripsi ="";
    var n=[];
    for(var i=0; i<str.length;i++) {
        n[i] = str.charCodeAt(i)+6;
        enkripsi = enkripsi.concat(String.fromCharCode(n[i]));
    }
    document.getElementById("test").innerHTML = enkripsi;
}

function decrypt(){
    var str = document.forms["from"]["txt"].value;
    var dekripsi ="";
    var n=[];
    for(var i=0; i<str.length;i++) {
        n[i] = str.charCodeAt(i)-6;
        dekripsi = dekripsi.concat(String.fromCharCode(n[i]));
    }
    document.getElementById("test").innerHTML = dekripsi;
}
