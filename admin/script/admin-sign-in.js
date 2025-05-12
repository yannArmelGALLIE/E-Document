const signInForm = document.getElementById("signInForm");
const errorMessage = document.getElementById("error");

signInForm.addEventListener("submit", (e) => {
    const registrationNumber = document.getElementById("registrationNumber").value.trim();
    const password = document.getElementById("password").value.trim();

    if( !registrationNumber || !password) {
        e.preventDefault();
        errorMessage.classList.add("error");
        errorMessage.innerText = "Tous les champs doivent être remplis";
    }
})

