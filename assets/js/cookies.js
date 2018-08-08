$(window).ready(function() {
  if (getCookie('oms_acceptedCookies') == "") {
    $('.cookie-notice button.accept').click(function() {
      $('.cookie-notice').remove();
      setCookie('oms_acceptedCookies', '1', 365);
    });
    $('.cookie-notice button.read-more').click(function() {
      $('.cookie-readmore').css('display', 'block');
    });
    $('.cookie-readmore button.done').click(function() {
      $('.cookie-readmore').css('display', 'none');
    });
  } else {
    $('.cookie-notice').remove();
    $('.cookie-readmore').remove();
  }
});

function setCookie(name, value, expires) {
  var d = new Date();
  d.setTime(d.getTime() + (expires*24*60*60*1000));
  var expiry = "expires="+ d.toUTCString();
  document.cookie = name + "=" + value + ";" + expiry + ";path=/";
}

function getCookie(name) {
  var cname = name + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(cname) == 0) {
      return c.substring(cname.length, c.length);
    }
  }
  return "";
}
