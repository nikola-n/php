<?php

//data types: resources (stream)

require 'directoryreader.php';

$images = directoryReader('images');

if ( ! $images) {
    die('Could not load files.');
}

//$directory = opendir('images');
//
////loop over the files
//while ($imageFile = readdir($directory)) {
//
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
</head>
<body>
<?php foreach ($images as $image): ?>
    <img src="<?php echo $image; ?>" alt="cv" width="500" height="500">
<?php endforeach; ?>
</body>
</html>
