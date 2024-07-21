<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta name="monetag" content="7678694e0081c44cae27253048c9f48a">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divertida Mente 2 - Netflix</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #141414;
            color: white;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
        }
        .navbar .logo {
            font-size: 1.5em;
            font-weight: bold;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .navbar .nav-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .banner {
            position: relative;
            background: url('https://jornalperiscopio.com.br/site/wp-content/uploads/2024/06/CINEMA.jpg') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            align-items: flex-end;
            padding: 20px;
            text-align: center;
            animation: fadeIn 2s ease-in-out;
        }
        .banner-content {
            max-width: 600px;
            width: 100%;
        }
        .banner-title {
            font-size: 3em;
            margin-bottom: 20px;
            animation: slideInLeft 1s ease-in-out;
        }
        .banner-description {
            font-size: 1.2em;
            margin-bottom: 20px;
            animation: slideInRight 1s ease-in-out;
        }
        .section-title {
            margin: 20px;
            font-size: 1.5em;
            text-align: center;
        }
        .movie-row {
            display: flex;
            overflow-x: auto;
            padding: 20px;
            justify-content: center;
        }
        .movie {
            min-width: 150px;
            margin-right: 10px;
            cursor: pointer;
        }
        .movie img {
            width: 100%;
            border-radius: 5px;
            transition: transform 0.3s ease-in-out;
        }
        .movie img:hover {
            transform: scale(1.05);
        }
        .player-container {
            position: relative;
            width: 90%;
            max-width: 800px;
            height: 0;
            padding-bottom: 56.25%;
            border: 2px solid #333;
            background: url('https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2024/06/divertida-mente-2.jpg?w=1200&h=1200&crop=1') no-repeat center center;
            background-size: cover;
            cursor: pointer;
            margin: 40px auto;
        }
        .controls {
            position: absolute;
            bottom: 10px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            box-sizing: border-box;
        }
        .control-button {
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            font-size: 20px;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            margin: 0 5px;
        }
        .control-button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            font-size: 30px;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s;
        }
        .play-button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .timeline {
            flex-grow: 1;
            height: 5px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 2.5px;
            margin: 0 10px;
            cursor: pointer;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideInLeft {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }
        @keyframes slideInRight {
            from { transform: translateX(100%); }
            to { transform: translateX(0); }
        }
        @media (max-width: 599px) {
            .navbar {
                flex-direction: column;
                align-items: center;
            }
            .banner {
                height: 50vh;
            }
            .banner-title {
                font-size: 2em;
            }
            .banner-description {
                font-size: 1em;
            }
            .movie {
                min-width: 120px;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="https://example.com">Cinebox</a>
        </div>
        <div class="nav-links">
            <a href="https://example.com">Início</a>
            <a href="https://example.com">Séries</a>
            <a href="https://example.com">Filmes</a>
                   </div>
    </div>

    <div class="banner">
        <div class="banner-content">
            <h1 class="banner-title">Divertida Mente 2</h1>
            <p class="banner-description">Em "Divertida Mente 2", acompanhamos Riley em novas aventuras emocionais. Descubra como Alegria, Tristeza, Medo, Raiva e Nojinho lidam com novos desafios enquanto Riley cresce.</p>
            <button class="play-button" onclick="window.location.href='https://example.com/play-divertida-mente-2'">
                <i class="fas fa-play"></i>
            </button>
        </div>
    </div>

    <div class="player-container" id="fakePlayer">
        <button class="play-button"></button>
        <div class="controls">
            <button class="control-button" onclick="window.location.href='https://example.com/play'"><i class="fas fa-play"></i></button>
            <button class="control-button" onclick="window.location.href='https://example.com/pause'"><i class="fas fa-pause"></i></button>
            <div class="timeline" onclick="window.location.href='https://example.com/timeline'"></div>
            <button class="control-button" onclick="window.location.href='https://example.com/download'"><i class="fas fa-download"></i></button>
        </div>
    </div>

    <h2 class="section-title">Mais para ver</h2>
    <div class="movie-row slider">
        <div class="movie" onclick="window.location.href='https://example.com/movie1'">
            <img src="https://blog.aricanduva.com.br/wp-content/uploads/2024/01/deadpool.png" alt="Movie 1">
        </div>
        <div class="movie" onclick="window.location.href='https://example.com/movie2'">
            <img src="https://br.web.img3.acsta.net/c_310_420/img/c5/bf/c5bf2536d3514aba2145292f32e07b6a.jpg" alt="Movie 2">
        </div>
        <div class="movie" onclick="window.location.href='https://example.com/movie3'">
            <img src="https://br.web.img3.acsta.net/c_310_420/img/6c/71/6c71afa89fd8ed8999b3e04d8d794a0e.jpg" alt="Movie 3">
        </div>
        <div class="movie" onclick="window.location.href='https://example.com/movie4'">
            <img src="https://br.web.img3.acsta.net/pictures/24/02/06/15/30/1566768.png" alt="Movie 4">
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });

        document.getElementById('fakePlayer').addEventListener('click', function() {
            window.location.href = 'https://example.com';
        });
    </script>
</body>
</html>
