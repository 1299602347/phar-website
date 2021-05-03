window.onload = function() {
    var sUserAgent = navigator.userAgent;
    if (sUserAgent.indexOf('Android') > -1 || sUserAgent.indexOf('iPhone') > -1 || sUserAgent.indexOf('iPad') > -1 || sUserAgent.indexOf('iPod') > -1 || sUserAgent.indexOf('Symbian') > -1) {
        alert("即将跳转至手机界面");
        window.location.href = "http://royenheart.com/wp-content/themes/phar-mc/index-phone.php" ;
    } else {}
}
