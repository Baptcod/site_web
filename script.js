const contactForm = document.getElementById("contactForm");
const confirmation = document.getElementById("confirmation");
const erreur = document.getElementById("erreur"); 

contactForm.addEventListener("submit", (e) => {
    e.preventDefault();
    
    const nom = document.getElementById("nom").value;
    const email = document.getElementById("email").value;
    
    confirmation.classList.add("hidden");
    erreur.classList.add("hidden");
    
    if (nom && email) {
        confirmation.classList.remove("hidden");
        confirmation.classList.add("show");
    } else {
        erreur.classList.remove("hidden");
        erreur.classList.add("show");
    }
});