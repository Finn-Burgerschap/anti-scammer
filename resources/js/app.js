import './bootstrap';

const button = document.getElementById('fake-button');

function moveButton() {
    const screenWidth = window.innerWidth;
    const screenHeight = window.innerHeight;

    const randomX = Math.random() * (screenWidth - button.clientWidth);
    const randomY = Math.random() * (screenHeight - button.clientHeight);

    button.style.position = 'fixed';
    button.style.left = randomX + 'px';
    button.style.top = randomY + 'px';
}
