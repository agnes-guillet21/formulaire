
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document
        <?php echo $titre_page; ?> 
    </title>
</head>
<body>
        <header>
        include('/images/logo.jpg');

            <p>Bouh</p>
        </header>
        <main>
            <form id="form" method="post">
                <label>
                    Prénom
                    <input type="text" name="firstName" id="firstName" />
                </label>
                <label>
                    Nom
                    <input type="text" name="name" id="name" />
                </label>
                <label>
                    Email
                    <input type="text" name="mail" id="mail" />
                </label>
                <div class="actions-container">
                    <button
                            type="submit"
                            name="submit-button"
                            name="loginBtn"
                            id="loginBtn"
                            class="btn btn-primary"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </main>
        <footer>
    </footer>    
</body>
</html>