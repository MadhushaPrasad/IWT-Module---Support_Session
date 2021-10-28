const text = document.getElementById('count').textContent;

if (text === '1') {
    document.getElementById('count').innerHTML = "Hello! Simple IF-ELSE";
} else {
    document.getElementById('count').innerHTML = "Hello! Text Value is incorrect,It has'nt number 1";
}