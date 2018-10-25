<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?

class Users{
    public $comments = [];
    public $group = "Admin";
    public $user = "user1";
    protected $id = 2;
    private $password = 1111;

    public function Comments(){
        return $this->comments;
    }

    public function AddComments($id, $comment, $id_user){
        //echo 'Comment';
        $this->id = $id;
        $this->comment = $comment;
        $this->id_user = $id_user;
        array_push($this->comments, $this);
        return $this->comments;
    }
}

class Moder extends Users{
    public function delCom(){
        return $this->comments;
    }
}


$object = new Users();
$object->comments[0]->id = 1;
$object->comments[0]->comment = 'Comentariu 1';
$object->comments[0]->id_user = 1;

echo '<hr/>Users = ' . $object->user;
echo '<hr/>Id_Users = ' . $object->group;
echo '<hr/>Comment = ' . $object->comments[0]->comment;

$object->comments = $object->AddComments(2, 'Comentariu 2', 2);
if (isset($_GET['trimis']) == 2) {
    $object->AddComments(3, 'Comentariu 3', 3);
}
?>

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Comment</th>
        <th>Id_User</th>
    </tr>
    </thead>
    <tbody>
    <?
    echo '<hr/><hr>user1 = ' . $object->comments[0]->id_user;
    foreach ($object->comments as $comm) {?>
<tr>
    <td><?=$comm->id;?></td>
    <td><?=$comm->comment;?></td>
    <td><?=$comm->id_user;?></td>
</tr>
<?}
?>
</tbody>
</table>

</body>
</html>