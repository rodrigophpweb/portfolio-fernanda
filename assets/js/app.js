let pay = document.getElementById('btn-pay');
let product = document.getElementById('product');

pay.addEventListener('click', function () {
   alert('Você comprou o produto ' + product.innerHTML);
});

