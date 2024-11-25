
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styleindex.css">
  
    </head>
    <body>
    <nav>
        <ul>
            <li>
                <a href="home.php">Home</a>
            </li>
            |
            <li>
                <a href="index.php">Recommend</a>
            </li>
        </ul>
    </nav>

    <h1 class="title-text">Recommend a creative Skill</h1>
    
<form action="./includes/handleforms.php" method="POST"  class="body">
        <label for="name">
            Name
            <input type="text" name="name" id="name" required>
        </label>
        <br>
        <label for="skill">
            Creative Skill
            <input type="text" name="skill" id="skill" required>
        </label>
        <br>
        <label for="email">
            Email
            <input type="email" name="email" id="email" required>
        </label>
        <label for="phone">
            Phone
            <input type="number" name="phone" id="phone" required>
        </label>
        <input type="submit" name="submit" id="submit">
    </form>
    </body>
    </html>