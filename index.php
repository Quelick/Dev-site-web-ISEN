<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation du Parc Animalier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }
        .profile-button, .ticket-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 15px;
            background-color: white;
            color: #007BFF;
            text-decoration: none;
            border-radius: 4px;
            border: 2px solid #007BFF;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }
        .profile-button:hover, .ticket-button:hover {
            background-color: #0056b3;
            color: white;
        }
        .ticket-button {
            top: 60px;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        .section {
            margin: 20px 0;
        }
        .activities {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .activity {
            flex: 1 1 45%;
            padding: 15px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        img {
            max-width: 100%;
            border-radius: 5px;
        }
        .slideshow-container {
            position: relative;
            max-width: 100%;
            background-color: #000;
            border-radius: 8px;
            overflow: hidden;
        }
        .mySlides, .mySlides2 {
            display: none;
        }
        .slideshow-container img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 5px;
        }
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: background-color 0.3s;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            transform: translateY(-50%);
            user-select: none;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }
        .prev {
            left: 10px;
        }
        .next {
            right: 10px;
        }
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }
        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }
    </style>
</head>
<body>
    <header>
        <a href="profil.php" class="profile-button">Mon Profil</a>
        <a href="achat_billet.php" class="ticket-button">Achat de Billet</a>
        <h1>Bienvenue au Parc Animalier</h1>
        <p>Un lieu unique pour découvrir la faune et la flore.</p>
    </header>
    <div class="container">
        <div class="section">
            <h2>À Propos de Nous</h2>
            <p>Le Parc Animalier est un endroit magique où les visiteurs peuvent explorer la nature et découvrir de nombreuses espèces animales dans un cadre préservé. Que vous soyez un amoureux des animaux, un passionné de la nature ou simplement en quête d'une journée de détente, notre parc est fait pour vous.</p>
            <img src="https://www.parcanimalierlabarben.com/wp-content/uploads/2024/09/PLANS-DU-PARC-2024-WEB-FR-1.jpg" alt="Plan du parc" />
        </div>
        
        <div class="section activities">
            <div class="activity">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <a href="animaux.php">
                            <img src="images/girafe.jpg" alt="Image de girafe">
                        </a>
                    </div>
                    <div class="mySlides fade">
                        <a href="animaux.php">
                            <img src="images/rhinoceros.jpg" alt="Image de rhinocéros">
                        </a>
                    </div>
                    <div class="mySlides fade">
                        <a href="animaux.php">
                            <img src="images/cerfs.jpg" alt="Image de cerfs">
                        </a>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
            </div>
            <div class="activity">
                <div class="slideshow-container">
                    <div class="mySlides2 fade">
                        <a href="services.php">
                            <img src="images/boutique.jpg" alt="Image de la boutique">
                        </a>
                    </div>
                    <div class="mySlides2 fade">
                        <a href="services.php">
                            <img src="images/restaurant.jpg" alt="Image du restaurant">
                        </a>
                    </div>
                    <div class="mySlides2 fade">
                        <a href="services.php">
                            <img src="images/train.jpg" alt="Image du train touristique">
                        </a>
                    </div>
                    <div class="mySlides2 fade">
                        <a href="services.php">
                            <img src="images/view.jpg" alt="Vue panoramique">
                        </a>
                    </div>
                    <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides2(1)">&#10095;</a>
                </div>
            </div>
        </div>
        
        <div class="section contact">
            <h2>Contactez-Nous</h2>
            <p>Pour toute question, n'hésitez pas à nous contacter :</p>
            <p>Email : contact@parcanimalier.com</p>
            <p>Téléphone : 01 23 45 67 89</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Parc Animalier. Tous droits réservés.</p>
    </footer>

    <script>
    let slideIndex = 0;
    let slideIndex2 = 0;
    showSlides();
    showSlides2();

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    function plusSlides2(n) {
        showSlides2(slideIndex2 += n);
    }

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex-1].style.display = "block";  
        setTimeout(showSlides, 3000);
    }

    function showSlides2() {
        let i;
        let slides2 = document.getElementsByClassName("mySlides2");
        for (i = 0; i < slides2.length; i++) {
            slides2[i].style.display = "none";  
        }
        slideIndex2++;
        if (slideIndex2 > slides2.length) {slideIndex2 = 1}    
        slides2[slideIndex2-1].style.display = "block";  
        setTimeout(showSlides2, 3000);
    }
    </script>
</body>
</html>
