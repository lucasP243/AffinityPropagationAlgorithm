<!DOCTYPE html>
<html lang="<?=$_SESSION["lang"]?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$_SESSION["loc"]["title"]?></title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <header>
        <h1><?=$_SESSION["loc"]["title"]?></h1>
        <span class="language"><?=$_SESSION["loc"]["lang"]?> :
            <select onchange="window.location.href = '?lang=' + $(this).children('option:selected').val()">
                <option value="en">English</option>
                <option value="fr">Français</option>
            </select>
        </span>
    </header>
    
    <div id="page_body">
        <div id="plotgraph">
        
        </div>

        <nav>
            <ul>
                <li>
                    <span><?=$_SESSION["loc"]["points"]?></span>
                    <div>

                    </div>
                </li>
                <li>
                    <button><?=$_SESSION["loc"]["run_algorithm"]?></button>
                </li>
            </ul>
        </nav>
    </div>

    <script type="text/javascript" src="vendors/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="vendors/p5.min.js"></script>
    <script type="text/javascript" src="js/plotsketch.js"></script>
</body>
</html>