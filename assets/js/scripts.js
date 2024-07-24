document.getElementById('lightThemeBtn').addEventListener('click', function () {
    document.body.classList.remove('dark-theme');
});

document.getElementById('darkThemeBtn').addEventListener('click', function () {
    document.body.classList.add('dark-theme');
});

// login auth
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.message) {
            alert(data.message);
        } else {
            alert(data.error);
        }
    });
});

// reg auth
document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch('register.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.message) {
            alert(data.message);
        } else {
            alert(data.error);
        }
    });
});





