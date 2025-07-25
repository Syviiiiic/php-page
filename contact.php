<?php 
include 'includes/header.php';
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $stmt = $pdo->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $message]);
    
    echo '<div class="success">Спасибо! Ваше сообщение отправлено.</div>';
}
?>

<main>
    <section class="contact-form">
        <h1>Свяжитесь с нами</h1>
        <form method="POST">
            <div class="form-group">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Сообщение:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Отправить</button>
        </form>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
