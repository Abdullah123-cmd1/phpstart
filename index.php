<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?
$server = $_SERVER;

$redirect_url = $server['REDIRECT_URL'];
$urlArray = explode('/',$redirect_url); 
$first = $urlArray[1];
$second = $urlArray[2];
$count = $urlArray[3];
switch ($first) {
    case 'about':
        include 'about.php';        
        break;
    
    case 'contact':
        include 'contact.php';
        break;
    
    case 'query':
        include 'query.php';
        break;    
    
    case 'product':
        include 'product.php';
        break;
    
    default:
        echo "404";
        break;
}

$array = [1,2,5,7];
$array[4]
?>
</body>
</html>