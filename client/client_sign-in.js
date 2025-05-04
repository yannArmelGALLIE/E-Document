const signInForm = document.getElementById("signInForm");
const errorMessage = document.getElementById("error");

signInForm.addEventListener("submit", (e) => {
    const numCni = document.getElementById("num-cni").value.trim();
    const password = document.getElementById("password").value.trim();

    if( !numCni || !password) {
        e.preventDefault();
        errorMessage.classList.add("error");
        errorMessage.innerText = "Tous les champs doivent être remplis";
    }
})

