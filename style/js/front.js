$(document).ready(function(){
    $(".acceptcookies").click(function(){
      $(".cookiealert").fadeOut();
      // Setze Cookie
      var d = new Date();
      d.setTime(d.getTime() + (365*24*60*60*1000)); // Ablaufdatum in einem Jahr
      var expires = "expires="+ d.toUTCString();
      document.cookie = "cookieconsent=accepted;" + expires + ";path=/";
    });
    
    // Prüfe, ob der Cookie bereits gesetzt ist
    var cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)cookieconsent\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    if (cookieValue !== "accepted"){
      $(".cookiealert").fadeIn();
    }
  });