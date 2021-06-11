function re_index() {
    var sUserAgent = navigator.userAgent;
    if (sUserAgent.indexOf('Android') > -1 || sUserAgent.indexOf('iPhone') > -1 || sUserAgent.indexOf('iPad') > -1 || sUserAgent.indexOf('iPod') > -1 || sUserAgent.indexOf('Symbian') > -1) {
        window.location.href = "https://royenheart.com/wp-content/themes/phar-mc/index-phone.php" ;
    } else if (document.documentElement.clientWidth < 990) {
        window.location.href = "https://royenheart.com/wp-content/themes/phar-mc/index-phone.php" ;
    }
}

window.onload = re_index();
window.onresize = function() {
    re_index();
}
