<html>
<head>
	<title>BaseDate</title>
</head>
<body>
	<? 
	require_once 'functions.php';
	error_reporting(E_ALL);
	$connection = mysqli_connect('localhost', 'root', '', 'bd');
	
	if(mysqli_connect_errno() !== 0){
		die('Database error');
	}
if (mysqli_connect()){
		echo "Succes";
		}else{
		echo "error $sql." .mysqli_error($mysqli_connect_errno);
		}
	$result = mysqli_query($connection, 'SELECT * FROM Books');
		
	$sql = "INSERT INTO Books (Title, Author_fn, Author_ln, Year, Page) 
			VALUES ('$Title', '$Author_fn', '$Author_ln', '$Year', '$Page')";
	
	?>

	<table border="1">
	<thead>
		<tr>
			<th>Title</th>
			<th>The author first name</th>
			<th>The author last name</th>
			<th>Year</th>	
			<th>Page</th>			
		</tr>
	</thead>
	<tbody>
	<?
	while ($book = mysqli_fetch_assoc($result)) {?>
			<tr>
				<td><?=formatName($book['Title']);?></td>
				<td><?=formatName($book['Author_fn']);?></td>
				<td><?=formatName($book['Author_ln']);?></td>
				<td><?=$book['Year'];?></td>
				<td><?=$book['Page'];?></td>			
			</tr>	
	<?}?>

	</tbody>
	</table>
</body>
</html>