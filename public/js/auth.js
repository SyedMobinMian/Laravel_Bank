const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

// When clicking on the "Sign Up" button, toggle the active class
registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

// When clicking on the "Sign In" button, remove the active class
loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});
