$(document).ready(function() {
    $(".bar").click(function() {
        $(".nav-link").children("span").toggle();
    });
});

function loadPage(name) {
    console.log(name);
}

function getCookie(cName) {
    const name = cName + "=";

    //To remove unwanted chars from the cookie's
    const cDecoded = decodeURIComponent(document.cookie); 

    const cArr = cDecoded.split('; ');

    let res;
    cArr.forEach(val => {
        if (val.substring(0, val.indexOf("=") + 1) === name) {
            res = val.substring(name.length);
        }
    })
    return res
}