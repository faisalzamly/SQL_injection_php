<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'web2';

$conn = mysqli_connect($host, $username, $password, $dbname);// or (die('Failed'));
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
   
$query = "SELECT * from profile";
$result = mysqli_query($conn,$query);
if($result===FALSE)
    echo "error". "<br/>" . mysqli_error($con);
else
    echo "done";
if(!file_exists('images')){
    mkdir('images');
}
$name = '';
$email = '';
$password = '';
$gender = 1;
$errors = [];

if (isset($_POST['send'])) {
    $img_name = ''; 

    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    if ($_POST['email'] == '') {
        $errors[] = 'Enter email ';
    }
    if ($_POST['password'] == '') {
        $errors[] = 'Password Can NOT be empty';
    }
    if ($_POST['name'] == '') {
        $errors[] = 'name Can NOT be empty';
    }
    if($_POST['image'] !=null){
        $errors[] = 'image Can NOT be empty';
    }elseif($_FILES['image']['size'] > 1024*1024) {
        $errors[] = 'Image size must be less than 1 MB';
    }
    else {
        $ext =  pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $img_name = date('Y-m-dH-i-s') . md5($_FILES['image']['name']) .'.' . $ext;
    }
    if(count($errors) == 0){
        if(!move_uploaded_file($_FILES['image']['tmp_name'], getcwd() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $img_name)){
            $errors[] = 'image Can NOT be empty';
        }
    }



$pass=md5($password)
    if(count($errors) > 0) {
        echo "<ul class='text-danger'>";
        foreach($errors as $error){
            echo "<li>" . $error . "</li>";
        }
        echo '</ul>';
    }else{
            
   
        $stmt = $conn->prepare("INSERT INTO profile (Name, Password,gender, Email,Image)
        VALUES (?, ?, ?, ?,'$img_name' )");
        $stmt->bind_param("ssis", $name, $pass,$gender, $email);
       
        $stmt->execute();
        $stmt->close();
        $conn->close();
        
    
    }}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input value="<?php echo $name  ?>" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input value="<?php echo $email  ?>" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" value="<?php echo $password  ?>" type="text" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="form-check">
                <input name="gender" value="1" checked="checked" class="form-check-input" type="radio" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input name="gender" value="2" class="form-check-input" type="radio" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>




            <div class="mb-3">
                <label for="formFileDisabled" class="form-label">Image</label>
                <input name="image" class="form-control" type="file" id="formFileDisabled">
            </div>

            <button name="send" type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>