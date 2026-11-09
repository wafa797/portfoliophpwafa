
document.addEventListener("DOMContentLoaded", function () {

    // 1. Mise à jour automatique de l'année
    const yearElement = document.getElementById("current-year");

    if (yearElement) {
        yearElement.textContent = new Date().getFullYear();
    }

    // 2. Navigation fluide entre les sections
    const navigationLinks = document.querySelectorAll(
        '.navbar-links a[href^="#"]'
    );

    navigationLinks.forEach(function (link) {

        link.addEventListener("click", function (event) {

            const targetId = this.getAttribute("href");
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                event.preventDefault();

                targetSection.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }

        });

    });

    // 3. Activation du lien correspondant à la section visible
    const sections = document.querySelectorAll(
        '.section-card[id]'
    );

    if ("IntersectionObserver" in window) {

        const observer = new IntersectionObserver(
            function (entries) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        const sectionId = entry.target.id;

                        navigationLinks.forEach(function (link) {

                            link.classList.remove("active");

                            if (
                                link.getAttribute("href") ===
                                "#" + sectionId
                            ) {
                                link.classList.add("active");
                            }

                        });

                    }

                });

            },
            {
                rootMargin: "-20% 0px -65% 0px"
            }
        );

        sections.forEach(function (section) {
            observer.observe(section);
        });

    }

    // 4. Vérification du formulaire de contact
    const contactForm = document.querySelector(".contact-form");

    if (contactForm) {

        contactForm.addEventListener("submit", function (event) {

            const name = document.getElementById("name");
            const email = document.getElementById("email");
            const subject = document.getElementById("subject");
            const message = document.getElementById("message");

            if (
                !name.value.trim() ||
                !email.value.trim() ||
                !subject.value.trim() ||
                !message.value.trim()
            ) {
                event.preventDefault();

                alert("Veuillez remplir tous les champs du formulaire.");
                return;
            }

            if (!email.checkValidity()) {
                event.preventDefault();

                alert("Veuillez saisir une adresse e-mail valide.");
                email.focus();
            }

        });

    }

});
