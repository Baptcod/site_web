<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SITEWEB</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#section1">Accueil</a></li>
                <li><a href="#section2">Contactez-moi</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="section1">
            <img src="https://picsum.photos/400/300" alt="Image aléatoire">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni aspernatur ducimus blanditiis reprehenderit placeat inventore, aperiam neque animi fuga iusto aliquam deserunt, assumenda quaerat quos unde ipsa impedit reiciendis doloribus?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex quaerat assumenda tenetur perspiciatis, dolorem officiis ab praesentium unde molestias optio ea pariatur accusamus corrupti quae quos accusantium odio labore qui!</p>
        </section>

        <section id="section2">
            <img src="https://picsum.photos/400/300" alt="Image aléatoire">

            <form id="contactForm">
                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                </div>

                <div>
                    <label for="email">Adresse email :</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <button type="submit">Validez</button>

                <p id="confirmation" class="hidden">Votre demande est bien envoyée !</p>
                <p id="errorMessage" class="hidden">Vos informations ne sont pas correctes</p>
            </form>
        </section>
    </main>

    <footer>
        <p>Page web faite par 
            <?php
            require_once 'config.php';
            try {
                $sql = "SELECT prenom FROM users LIMIT 1";
                $stmt = $pdo->query($sql);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $result ? htmlspecialchars($result['prenom']) : "Auteur";
            } catch (PDOException $e) {
                echo "Auteur";
            }
            ?>
        </p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
