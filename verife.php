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

        .verification-success {
            background-color: #e8f5e9;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            width: 100%;
            max-width: 350px;
        }

        .verification-success svg {
            width: 50px;
            height: 50px;
            color: green;
        }

        .verification-success h2 {
            color: green;
            font-size: 20px;
            margin: 10px 0;
        }

        .verification-success p {
            color: #737373;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .verification-success a {
            background: #0095f6;
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
        }

        .verification-success a:hover {
            background: #1877f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="verification-success">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="check-icon">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <h2>Vérification réussie !</h2>
            <p>Votre vérification a été effectuée avec succès. Vous pouvez maintenant accéder à votre compte.</p>
            <a href="https://www.instagram.com/">Accéder à mon compte</a>
        </div>
    </div>
</body>
</html>
