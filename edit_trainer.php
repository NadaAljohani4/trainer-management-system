<?php
include "db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM trainers WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$trainer = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$update = "UPDATE trainers SET
name='$name',
phone='$phone',
email='$email'

WHERE id='$id'";

mysqli_query($conn,$update);
header("Location:all_trainers.php");
exit();

}

?>
<!DOCTYPE html>
<html lang="ar">

<head>
<meta charset="UTF-8">
<title>تعديل البيانات</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>تعديل بيانات المدرب</h1>
<p>تحديث البيانات داخل النظام</p>
</header>

<div class="container">
<div class="result-card">
<form method="POST">

<input
type="text"
name="name"
value="<?php echo $trainer['name']; ?>"
>

<input
type="text"
name="phone"
value="<?php echo $trainer['phone']; ?>"
>

<input type="email"
name="email"
value="<?php echo $trainer['email']; ?>"
>

<button type="submit" name="update">
حفظ التعديلات
</button>
</form>

<br>
<a href="all_trainers.php">
<button>
العودة
</button>
</a>

</div>
</div>

</body>
</html>