<style>
    @import url("reset.css");

    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");

    body {
        font-family: "Poppins", sans-serif;
        min-height: 100vh;
        background-image:url('https://images.unsplash.com/photo-1608341089966-92c09e62214f?q=1000&w=3069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
        background-size: cover ;
    }


    /* Login Card */
    .login-card {
        margin-top: 20px;
        width: 350px;
        background: rgba(255, 255, 255, .5);
        padding: 4rem;
        border-radius: 10px;
        position: relative;
    }

    /* Login Card Logo */
    .login-card-logo {
        margin-bottom: 2rem;
    }

    .login-card-logo img {
        width: 60px;
    }
    /* ---------- */

    /* Login Card Standard */
    .login-card-logo,
    .login-card-header,
    .login-card-footer {
        text-align: center;
    }

    .login-card a {
        text-decoration: none;
        color: #35339a;
    }

    .login-card a:hover {
        text-decoration: underline;
    }
    /* ---------- */

    /* Login Card Header */
    .login-card-header {
        margin-bottom: 2rem;
    }

    .login-card-header h1 {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: .5rem;
    }

    .login-card-header h1+div {
        font-size: calc(1rem * .8);
        opacity: .8;
    }
    /* ---------- */

    /* Login Card Form */
    .login-card-form {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .login-card-form .form-item {
        position: relative;
    }

    .login-card-form .form-item .form-item-icon {
        position: absolute;
        top: .82rem;
        left: 1.4rem;
        font-size: 1.3rem;
        opacity: .4;
    }

    .login-card-form .checkbox {
        display: flex;
        align-items: center;
        gap: 7px;
    }

    .login-card-form .form-item-other {
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: calc(1rem * .8);
        margin-bottom: .5rem;
    }
    /* ---------- */

    /* Login Card Footer */
    .login-card-footer {
        margin-top: 1.5rem;
        font-size: calc(1rem * .8);
    }
    /* ---------- */

    /* Login Card Form Elements */
    .login-card input[type="text"],
    .login-card input[type="password"],
    .login-card input[type="email"],
    .login-card input[type="prenom"],
    .login-card input[type="nom"],
    .login-card input[type="date"],
    .login-card input[type="number"],
    .login-card input[type="confirm_password"] {
        border: none;
        outline: none;
        background: rgba(255, 255, 255, .3);
        padding: 1rem 1.5rem;
        padding-left: calc(1rem * 3.5);
        border-radius: 100px;
        width: 100%;
        transition: background .5s;
    }

    .login-card input:focus {
        background: white;
    }

    .login-card input[type="checkbox"] {
        width: 16px;
        height: 16px;
        accent-color: black;
    }

    .login-card button {
        background: black;
        width: 100%;
        color: white;
        padding: 1rem;
        border-radius: 100px;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: background .5s;
    }

    .login-card button:hover {
        background-color: rgba(0, 0, 0, 0.85);
        cursor: pointer;
    }
    /* ---------- */

    /* Login Card Social Buttons */
    .login-card-social {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        text-align: center;
        margin-top: 3rem;
    }

    .login-card-social>div {
        opacity: .8;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: calc(1rem * .8);
    }

    .login-card-social-btns {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
    }

    .login-card-social-btns a {
        display: flex;
        align-items: center;
        justify-content: center;
        color: black;
        width: 50px;
        height: 50px;
        background-color: rgba(255, 255, 255, .6);
        border-radius: 100px;
        transition: all .5s;
    }

    .login-card-social-btns a:hover {
        background-color: white;
        transform: scale(1.1);
    }
    /* ---------- */


    /* Responsive */
    @media (max-width: 768px) {

        body {
            padding: 2rem 0;
        }

        .login-card {
            width: 280px;
            padding: 2rem;
        }

    }

    button {
        border: none;
    }
</style>

    <div class="login-card-container" style="display: flex; flex-direction: column; align-items: center;">
        <div class="login-card">
        <div class="login-card-logo">
            
        </div>
        <div class="login-card-header">
            <h1>Inscription</h1>
            <div>Créez un compte pour pouvoir utiliser la plateforme</div>
        </div>
        <form class="login-card-form" id="inscriptionForm" action="" method="post">
            <div class="form-item">
                <span class="form-item-icon material-symbols-rounded">chevron_right</span>
                <input type="text" id="name" name="name" placeholder="Username"
                 required>
            </div>
            <div class="form-item">
                <span class="form-item-icon material-symbols-rounded">mail</span>
                <input type="email" placeholder="Adresse Mail" id="email" name="email" autofocus>
            </div>
            <div class="form-item">
                <span class="form-item-icon material-symbols-rounded">lock</span>
                <input type="password" id="password" placeholder="Mot de passe" name="password">
            </div>
            <div class="form-item">
                <span class="form-item-icon material-symbols-rounded">lock</span>
                <input type="password" placeholder="Confirmez le mot de passe" id="confirm_password">
            </div>
            <div class="form-item">
                <span class="form-item-icon material-symbols-rounded">chevron_right</span>
                <input type="number" id="age" name="age" placeholder="Age en années">
            </div>
            <div class="form-item-other">                    
            </div>
            <button class ="button" type="button" id="button">Finaliser l'inscription</button>
        </form>
            <div class="login-card-footer">
                <font style="font-size: large;">
                    Vous avez déjà un compte ? <a href="./connexion">Connectez-vous !</a>
                </font>
            </div>
        </div>
    <div class="login-card-social">
        <div style="color:white;">Retour à la page d'accueil</div>
        <div class="login-card-social-btns">
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16"> 
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/> 
                </svg>
            </a>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var form = document.getElementById("inscriptionForm");
        var button = document.getElementById("button");

        button.addEventListener("click", function () {
            console.log('clicked !');
            var inputNom = document.getElementById("name");
            var inputEmail = document.getElementById("email");
            var inputPassword = document.getElementById("password");
            var inputConfirmPassword = document.getElementById("confirm_password");
            var inputAge = document.getElementById("age");

            var erreur = null;
            
            if (!inputNom.value) {
                erreur = "Veuillez renseigner un nom d'utilisateur";
            }

            if (!inputPassword.value) {
                erreur = "Veuillez renseigner un Mot de passe";
            }

            if (!(inputConfirmPassword.value == inputPassword.value)){
                erreur="Vos mots de passe ne correspondent pas";
            }
            
            if (!inputEmail.value) {
                erreur = "Veuillez renseigner un Email";
            }
            
            if (!(/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\s-]+$/.test(inputNom.value))) {
                erreur = "Veuillez renseigner uniquement des lettres dans le username";
            }

            if (!inputAge.value) {
                erreur = "Veuillez renseigner votre age";
            }

            // Si aucune erreur, soumettre le formulaire
            if (!erreur) {
                // Si aucune erreur, soumettre le formulaire
                form.submit();
            } else {
                // S'il y a des erreurs, afficher le message d'erreur dans le bouton
                button.innerText = erreur;
                button.style.background = "rgb(250, 67, 60)";
                setTimeout(function () {
                    button.innerText = "Finaliser l'inscription";
                    button.style.background = "#453091";
                }, 4000);
            }
        });
    });
</script>