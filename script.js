// Exemplo simples: contador de carrinho
let cartCount = 0;
document.querySelectorAll('.product button').forEach(btn => {
  btn.addEventListener('click', () => {
    cartCount++;
    document.querySelector('header .icons span:last-child').textContent = `Cart (${cartCount})`;
  });
});
