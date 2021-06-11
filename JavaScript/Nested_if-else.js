const text02 = document.getElementById('nestedIf').textContent;

if (text02 === '1') {
    document.getElementById('nestedIf').innerHTML = "Hello! Nested IF-ELSE";
} else if (text02 === '2') {
    document.getElementById('nestedIf').innerHTML = "Hello! Text Value is 2";
} else if (text02 === '3') {
    document.getElementById('nestedIf').innerHTML = "Hello! Text Value is 3";
} else {
    document.getElementById('nestedIf').innerHTML = "Hello! Text Value does not match";
}