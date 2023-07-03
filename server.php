<?php

    $paragraph = $_GET['userParagraph'];

    $badword = $_GET['userBadword'];

    $cleanedParagraph = str_replace($badword, '###', $paragraph);

    // var_dump($cleanedParagraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords results</title>
</head>
<body>
    <h1>
        Badwords
    </h1>

    <h2>
        Original paragraph:
    </h2>
    <p>
        <em>
            "<?php echo $paragraph; ?>"
        </em>
    </p>
    <pre>Original paragraph length:  <?php echo strlen($paragraph); ?></pre>

    <h2>
        Cleaned paragraph:
    </h2>
    <p>
        <em>
            "<?php echo $cleanedParagraph; ?>"
        </em>
    </p>
    <pre>New paragraph length:  <?php echo strlen($cleanedParagraph); ?></pre>

</body>
</html>