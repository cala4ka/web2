<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?
error_reporting(E_ALL);
$fileName = 'list.json';
if(!empty($_POST['title']) && !empty($_POST['author'])){
    $fileData = file_get_contents($fileName);
    $list = json_decode($fileData, true);
    $newElement = [
        "title" => trim($_POST['title']),
        "author_fn" => trim($_POST['author_fn']),
        "author_ln" => trim($_POST['author_ln']),
        "year" => trim($_POST['year']),
        "nr_page" => trim($_POST['nr_page'])
    ];
    $list[] = $newElement;
    file_put_contents($fileName, json_encode($list));
}
?>


</body>
</html>