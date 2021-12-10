const pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

function match() {
    const email = document.getElementById("email").value;
    const input = document.getElementById("email");
    const submit = document.getElementById("submit");
    const help = document.getElementById("email-help");

    if (pattern.test(email)) {
        input.classList.add("is-primary");
        input.classList.remove("is-danger");
        help.innerHTML = "Email do be Valid tho";
        help.style.color = "#09D1B2";
        submit.disabled = false;
    } else {
        input.classList.add("is-danger");
        input.classList.remove("is-primary")
        help.innerHTML = "Invalid Email Address";
        help.style.color = "#FF0000";
        submit.disabled = true;
    }
}

function verifyName() {
    const name = document.getElementById("name").value;
    const input = document.getElementById("name");
    if (name) {
        input.classList.add("is-primary");
    } else {
        input.classList.remove("is-primary");
    }
}