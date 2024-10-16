const API_URI = "http://localhost:8000/api";
const API_ENDPOINTS = {
    STUDENT_AUTH: "/students/authenticate"
};


const mainForm = document.getElementById("mainForm");
const btnLogIn = document.getElementById("btnLogIn");
const txtEmail = document.getElementById("txtEmail");
const txtPassword = document.getElementById("txtPassword");

document.addEventListener("submit", (event) => { event.preventDefault(); })
document.addEventListener("click", btnLogInClicked);

async function btnLogInClicked() {
    if(!mainForm.checkValidity()) {
        return;
    }

    const email = txtEmail.value;
    const password = txtPassword.value;

    try {
        const res = await fetch(API_URI + API_ENDPOINTS.STUDENT_AUTH, {
            method: "POST",
            body: JSON.stringify({
                "email": email,
                "password": password
            }),
            redirect: "manual"
        });

        const resBody = await res.json();

        if (res.ok) {
            document.location.href = "Menu.html";
        } else if (res.status === 401) {
            alert(resBody.message);
        } else {
            alert("Error: " + resBody.message);
        }
    } catch (error) {
        alert(error);
    }
}