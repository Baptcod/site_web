const form = document.getElementById("contactForm");
const confirmation = document.getElementById("confirmation");
const erreur = document.getElementById("errorMessage");

form.addEventListener("submit", (e) => {
    e.preventDefault();

    const nom = document.getElementById("nom").value.trim();
    const email = document.getElementById("email").value.trim();

    // On cache les messages
    confirmation.classList.add("hidden");
    erreur.classList.add("hidden");

    // Vérification simple
    if (nom !== "" && email !== "") {
        confirmation.classList.remove("hidden");
    } else {
        erreur.classList.remove("hidden");
    }
});
