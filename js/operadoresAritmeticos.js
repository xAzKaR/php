var subtotal = (13 + 1) * 5;
var frete = 0.5 * (13+1);
var total = subtotal + frete;

var subResultado = document.getElementById('subtotal');
subResultado.textContent = 'SubTotal: R$ ' + subtotal;

var freteResultado = document.getElementById('frete');
freteResultado.textContent = 'Frete: R$ ' + frete;

var totalResultado = document.getElementById('total');
totalResultado.textContent = 'Total: R$ ' + total;