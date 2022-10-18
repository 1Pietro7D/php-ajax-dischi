<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>PHP DISCHI</title>
</head>
<body>
    <?php include __DIR__ . '/../data/data.php'; //alla faccia che dir ti semplificava la vita XD beh basta ti ricordi che dir non ha "/" davanti
    // var_dump($disks) ?>

  <main>
    <?php foreach($disks["response"] as $disk) { ?>
        <p> <?= $disk['title'] ?></p>
    <?php } ?>
  </main>
</body>
</html>