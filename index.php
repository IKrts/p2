<!DOCTYPE html>
<html>

<head>
    <title>Задача14</title>
    <meta charset="utf-8">
    <meta http-equiv="Refresh">
    <meta name="Author" content="I Kritski 2020" lang="ru">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="normalize1.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/0ca06f29a6.js"></script>
    <link href="style8.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            display: flex;
            height: 100vh;
            flex-direction: column;
            max-width: 2000px;
            margin: auto;
        }

        main {
            flex-basis: 0%;
            flex-shrink: 1;
            flex-grow: 1;
            margin: 0;
        }
    </style>
</head>

<body>
    <main>
        <div class="conteiner1">
            <div class="name">Project Name</div>
            <div class="menu1">
                <nav>
                    <li><a href="#" class="menudek">About</a></li>
                    <li><a href="#" class="menudek">Team</a></li>
                    <li><a href="#" class="menudek">News</a></li>
                    <li><a href="#" class="menudek">Contact</a></li>
                </nav>
            </div>
        </div>
        <div class="conteiner2" style="background-image: url(img/jumbotron.jpg);">
            <h1 class="textimg">Landing Page Template </h1>
            <form action="action.php" metod="GET">
                <button class="but1" type="button" href="#post" id="test">Go back to the lesson</button>
            </form>
        </div>
        <h2>Services</h2>
        <div class="inf">
            <div class="inf1">
                <i class="fa fa-tachometer fa-3x" aria-hidden="true" align="center"></i><br>
                <span class="servtext">phoncus ut, imperdiet vel venenatis vitae justo ullam dictum felis eu pede mollis pretium massa</span>
            </div>
            <div class="inf1">
                <i class="fa fa-calendar fa-3x" aria-hidden="true"></i><br>
                <span class="servtext">phoncus ut, imperdiet vel venenatis vitae justo ullam dictum felis eu pede mollis pretium massa</span>
            </div>
            <div class="inf1">
                <i class="fa fa-bar-chart fa-3x" aria-hidden="true"></i><br>
                <span class="servtext">phoncus ut, imperdiet vel venenatis vitae justo ullam dictum felis eu pede mollis pretium massa</span>
            </div>
        </div>
        <div class="conteiner3">
            <h2>Blog</h2>
            <br><br>
            <div class="blog1">
                <h3 class="blogt">Socis natoque magnis dis valem parturient</h3>
                <p class="blogt">01.01.2017</p>
                <p class="blogt">Lenian commodo ligula eget dolor, aenean massa. Cum sociis natoque penatibus et
                    magnis dis parturient montes, nascetur ridiculus mus donec quam felis ultricies nec pllentesque eu.</p>
            </div>
            <div class="blog2">
                <h3 class="blogt">Socis natoque magnis dis valem parturient</h3>
                <p class="blogt">31.12.2016</p>
                <p class="blogt"> Lenian commodo ligula eget dolor, aenean massa. Cum sociis natoque penatibus et
                    magnis dis parturient montes, nascetur ridiculus mus donec quam felis ultricies nec pllentesque eu.</p>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>