<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require __DIR__ . '/vendor/autoload.php';
        include_once 'db.php';
        include_once 'user.php';

        $user = new User('https://jsonplaceholder.typicode.com/users/1');

        $emailDomain = $user->getDomain($user->getData());
        $userPersonData = getPersonData($user->getData());

        //Database operations
        $result = $conn->query("SELECT id FROM task.userdomain WHERE domain = '$emailDomain'");
        //if user email domain does not exist then add new one
        if($result->num_rows == 0) {
            $sql = ("INSERT INTO task.userdomain (domain) VALUES ('$emailDomain')");
            if ($conn->query($sql) === TRUE) {
                echo "insert user email domain - ". $emailDomain . "<br>";
              } else {
                echo "Error creating table: " . $conn->error. "<br>";
              }
        //if user email domain exist then increase domain counter
        } else {
            $sql = ("UPDATE task.userdomain SET domaincount = domaincount + 1 WHERE domain = '$emailDomain'");
            if ($conn->query($sql) === TRUE) {
                echo $emailDomain . " - database counter increased". "<br>";
              } else {
                echo "Error creating table: " . $conn->error. "<br>";
              }
        }
        $conn->close();
 
    ?>
    <img src="<?= $userPersonData; ?>"/> 
</body>
</html>