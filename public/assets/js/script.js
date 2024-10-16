document.getElementById('loginForm'),addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = "Rizki"
    const correctPassword = "Rizki"

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === correctUsername && password === correctPassword){
        alert('Login Berhasil');
        window.location.href = 'index.blade.php';
    }else{
        alert('Aduhh passwordmu salah!!');
    }
})