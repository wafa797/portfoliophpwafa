
<?php

session_start();

require_once __DIR__ . '/../config/database.php';

// Vérifier la méthode de requête
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php#contact');
    exit;
}

// Récupérer et nettoyer les données
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Vérifier les champs obligatoires
if (
    $name === '' ||
    $email === '' ||
    $subject === '' ||
    $message === ''
) {
    header('Location: ../index.php?contact=error#contact');
    exit;
}

// Vérifier le format de l'adresse e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../index.php?contact=invalid_email#contact');
    exit;
}

// Vérifier les longueurs des champs
if (
    strlen($name) > 100 ||
    strlen($email) > 150 ||
    strlen($subject) > 150 ||
    strlen($message) > 5000
) {
    header('Location: ../index.php?contact=too_long#contact');
    exit;
}

try {

    // Préparer la requête SQL
    $sql = "INSERT INTO messages (name, email, subject, message)
            VALUES (:name, :email, :subject, :message)";

    $stmt = $pdo->prepare($sql);

    // Exécuter la requête
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':subject' => $subject,
        ':message' => $message
    ]);

    // Redirection après l'enregistrement
    header('Location: ../index.php?contact=success#contact');
    exit;

} catch (PDOException $e) {

    error_log("Erreur lors de l'enregistrement du message : " . $e->getMessage());

    header('Location: ../index.php?contact=error#contact');
    exit;

}
