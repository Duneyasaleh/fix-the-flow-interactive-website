// login card remove
let loginCard = document.querySelector('.login-card-homepage');
let loginButton = document.querySelector('.login-button-card');

loginButton.addEventListener('click', showHiddenLoginCard);

function showHiddenLoginCard(){
loginCard.classList.toggle('login-card-homepage-show');
}