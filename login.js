const loginForm = document.querySelector('.sign-in-htm');
const error = document.getElementById('error');
loginForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;
    if (!username) {
        error.innerHTML = 'Username không được rỗng';
    } else if (!password) {
        error.innerHTML = 'Password không được rỗng';
    } else {
        error.innerHTML = ''
        loginForm.submit();
    }
})

const registerForm = document.querySelector('.sign-up-htm');
registerForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const username = registerForm.username.value;
    const password = registerForm.password.value;
    const cPassword = registerForm.cPassword.value;
    if (!username) {
        error.innerHTML = 'Username không được rỗng';
    } else if (!password) {
        error.innerHTML = 'Password không được rỗng';
    } else if (password !== cPassword) {
        error.innerHTML = 'Nhập lại password không đúng';
    } else {
        registerForm.submit();
    }
})