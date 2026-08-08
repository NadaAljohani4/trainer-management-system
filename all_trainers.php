<?php

include "db.php";

$sql = "SELECT * FROM trainers ORDER BY id ASC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="ar">

<head>

<meta charset="UTF-8">

<title>جميع المدربين</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<header>

<h1>جميع المدربين</h1>

<p>استعراض جميع المدربين المسجلين</p>

</header>

<div class="container">

<a href="add_trainer.php">
<button>إضافة مدرب</button>
</a>

<a href="index.html">
<button>
العودة للرئيسية
</button>
</a>

<br><br>

<?php

while($trainer = mysqli_fetch_assoc($result)){

?>

<div class="result-card">

<h2>

<?php echo $trainer['name']; ?>

</h2>

<div class="row">
<span class="label">رقم الجوال:</span>
<span class="value"><?php echo $trainer['phone']; ?></span>
</div>

<div class="row">
<span class="label">السجل المدني:</span>
<span class="value"><?php echo $trainer['nationalId']; ?></span>
</div>

<a href="edit_trainer.php?id=<?php echo $trainer['id']; ?>">
<button>
تعديل البيانات
</button>
</a>

</div>

<br>

<?php

}

?>

</div>

</body>

</html>