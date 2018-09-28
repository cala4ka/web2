<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?
require_once 'functions.php';
$fileName = 'list.json';
$fileData = file_get_contents($fileName);
$list = json_decode($fileData, true);
?>

<table border="1">
<thead>
<tr>
    <th>Title</th>
    <th>Author (first name)</th>
    <th>Author (last name)</th>
    <th>Year</th>
    <th>Pages</th>
    
</tr>
</thead>
    <tbody>
    <?
    foreach ($list as $carti) {?>
        <tr>
            <td><?=formatName($carti['title']);?></td>
            <td><?=formatName($carti['author_fn']);?></td>
            <td><?=formatName($carti['author_ln']);?></td>
            <td><?=$carti['year'];?></td>
            <td><?=$carti['nr_page'];?></td>

        </tr>
    <?}
    ?>
</tbody>
</table>
<button><a href="new.php">ADD</a></button>
</body>
</html>