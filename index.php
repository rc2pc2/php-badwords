<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Badwords</title>
    </head>
    <body>
        <form action="./server.php" method="get">
            <label for="user-paragraph">Insert a paragraph</label>
            <textarea name="userParagraph" id="user-paragraph" cols="30" rows="10"></textarea>

            <label for="user-badword">
                Insert a badword to ban
            </label>
            <input type="text" name="userBadword" id="user-badword">

            <input type="submit" value="Send">
        </form>

    </body>
</html>