const signUpForm = document.getElementById("signUpForm");
const errorMessage = document.getElementById("error");

signUpForm.addEventListener("submit", (e) => {
    const surname = document.getElementById("surname").value.trim();
    const firstname = document.getElementById("firstname").value.trim();
    const number = document.getElementById("number").value.trim();
    const email = document.getElementById("email").value.trim();
    const numCni = document.getElementById("numCni").value.trim();
    const numNni = document.getElementById("numNni").value.trim();
    const confirmPassword = document.getElementById("confirmPassword").value.trim();
    const password = document.getElementById("password").value.trim();

    if( !surname || !firstname || !number || !email || !numCni || !numNni || !password || !confirmPassword) {
        e.preventDefault();
        errorMessage.classList.add("error");
        errorMessage.innerText = "Tous les champs doivent être remplis";
    } else if (number.length < 10 || number.length > 10) {
        e.preventDefault();
        errorMessage.classList.add("error");
        errorMessage.innerText = "Le numero de téléphone doit compter exactement 10 chiffres";
    } else if (password.length < 8) {
        e.preventDefault();
        errorMessage.classList.add("error");
        errorMessage.innerText = "Le mot de passe doit compter minimum 8 caractères";
    } else if (password !== confirmPassword) {
        e.preventDefault();
        errorMessage.classList.add("error");
        errorMessage.innerText = "Le mot de passe de confirmation doit être identique au mot de passe";
    } else if (!numCni.startsWith("CI")) {
        e.preventDefault();
        errorMessage.classList.add("error");
        errorMessage.innerText = "Le numero de carte nationnal d'identité doit commencer par CI"
    }
})

