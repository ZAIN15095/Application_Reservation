<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Confirmation </title>
    <meta content-type="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form method='POST' action="index.php">
    <div class="container">
    <h1>Confirmation des réservations</h1>
    Votre demande a bien été enregistrée.
    Merci de bien vouloir verser <?php echo $reservation->getPrice() ?> euros sur le compte 000-000000-00.<br />
<<<<<<< HEAD

        <div class="btn-group">
            <input type='submit' value="Retour à la page d'accueil" class="btn btn-primary" name='cancel'>
        </div>
=======
    <input type='submit' value="Retour à la page d'accueil" class="button" name='cancel'>
>>>>>>> 26d8b5f468fd98f386b686e9ab8dc2afd5b71f84
    </div>
</form>
</body>
</html>
