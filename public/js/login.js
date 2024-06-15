
document.addEventListener("DOMContentLoaded", function () {
    const formLogin = document.getElementById("form__login");
    formLogin.addEventListener("submit", handleSubmit);
});

function handleSubmit(e) {
    e.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const params = "username=" + username + "&password=" + password;


    const xhttp = new XMLHttpRequest();
    xhttp.open('POST', "./ajax/AuthAjax.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.onload = () => {
        let data = JSON.parse(xhttp.response)
        console.log(data);
        // console.log(xhttp.response);
    }
    xhttp.send(params);
};