
<section id="contact" class="section-card">

    <div class="section-heading">
        <span class="section-icon">
            <i class="fas fa-envelope"></i>
        </span>

        <div>
            <h2>Contactez-moi</h2>
            <p>Vous avez un projet ou une opportunité ? N'hésitez pas à me contacter.</p>
        </div>
    </div>

    
<?php if (isset($_GET['contact'])): ?>

    <?php if ($_GET['contact'] === 'success'): ?>

        <p class="form-feedback success">
            <i class="fas fa-check-circle"></i>
            Votre message a été envoyé avec succès.
        </p>

    <?php elseif ($_GET['contact'] === 'invalid_email'): ?>

        <p class="form-feedback error">
            Veuillez saisir une adresse e-mail valide.
        </p>

    <?php elseif ($_GET['contact'] === 'too_long'): ?>

        <p class="form-feedback error">
            Certains champs dépassent la longueur autorisée.
        </p>

    <?php else: ?>

        <p class="form-feedback error">
            Une erreur est survenue. Veuillez vérifier vos informations et réessayer.
        </p>

    <?php endif; ?>

<?php endif; ?>


    <div class="contact-container">

        <!-- Informations de contact -->
        <div class="contact-info">

            <h3>Mes coordonnées</h3>

            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <div>
                    <h4>Email</h4>
                    <a href="mailto:chamkhiwafa391@gmail.com">
                        chamkhiwafa391@gmail.com
                    </a>
                </div>
            </div>

            <div class="contact-item">
                <i class="fas fa-phone"></i>
                <div>
                    <h4>Téléphone</h4>
                    <a href="tel:+21624486466">
                        +216 24 486 466
                    </a>
                </div>
            </div>

            <div class="contact-item">
                <i class="fas fa-phone"></i>
                <div>
                    <h4>Téléphone secondaire</h4>
                    <a href="tel:+21620599538">
                        +216 20 599 538
                    </a>
                </div>
            </div>

            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <h4>Localisation</h4>
                    <p>Kalla Sghira, Sousse, Tunisie</p>
                </div>
            </div>

        </div>

        <!-- Formulaire de contact -->
        <div class="contact-form-container">

            <h3>Envoyer un message</h3>

            <form action="backend/send_message.php"
                  method="POST"
                  class="contact-form">

                <div class="form-group">
                    <label for="name">Nom complet</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Votre nom"
                        required
                        maxlength="100">
                </div>

                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="exemple@email.com"
                        required
                        maxlength="150">
                </div>

                <div class="form-group">
                    <label for="subject">Sujet</label>
                    <input
                        type="text"
                        id="subject"
                        name="subject"
                        placeholder="Objet de votre message"
                        required
                        maxlength="150">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea
                        id="message"
                        name="message"
                        rows="6"
                        placeholder="Écrivez votre message ici..."
                        required
                        maxlength="5000"></textarea>
                </div>

                <button type="submit" class="btn-primary">
                    <i class="fas fa-paper-plane"></i>
                    Envoyer le message
                </button>

            </form>

        </div>

    </div>

</section>
