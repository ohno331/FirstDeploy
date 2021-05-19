function Switch() {
    var hoge = document.getElementsByName('maker');
    if (hoge[0].checked) {
        // 現金が選択されたら下記を実行します
        document.getElementById('pla').style.display = "";
        document.getElementById('kureka').style.display = "none";
    } else if (hoge[1].checked) {
        // クレカが選択されたら下記を実行します
        document.getElementById('pla').style.display = "none";
        document.getElementById('kureka').style.display = "";
    } else {
        document.getElementById('pla').style.display = "none";
        document.getElementById('kureka').style.display = "none";
    }
}
window.addEventListener('load', Switch());
