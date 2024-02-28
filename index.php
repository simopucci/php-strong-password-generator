<?php
include './functions.php';

// Verifico se è stato inviato un valore per la lunghezza della password
if (isset($_GET['lunghezza']) && is_numeric($_GET['lunghezza'])) {

    // Ottengo la lunghezza della password dalla richiesta GET
    $lunghezza_password = intval($_GET['lunghezza']);

    // Genero la password casuale
    $password_generata = generaPasswordCasuale($lunghezza_password);
} else {
    // Se non è stata fornita una lunghezza valida, imposta una lunghezza predefinita
    $lunghezza_password = 12;
    $password_generata = generaPasswordCasuale($lunghezza_password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore Password Casuale</title>

    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h1>Generatore Password Casuale</h1>
        <form action="" method="GET"  class="my-4">
            Lunghezza della password: <input type="number" name="lunghezza" value="<?php echo $lunghezza_password; ?>">
            <input type="submit" value="Genera Password" class="btn btn-primary">
        </form>
        <?php if (isset($password_generata)): ?>
            <h2>Password Generata:</h2>
            <textarea rows="4" cols="50" class="my-3"><?php echo $password_generata; ?></textarea>
        <?php endif; ?>
    </div>
</body>
</html>