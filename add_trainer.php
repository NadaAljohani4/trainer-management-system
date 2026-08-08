<?php

include "db.php";

if(isset($_POST['save'])){

$name = $_POST['name'];
$nationalId = $_POST['nationalId'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$workType = $_POST['workType'];
$workName = $_POST['workName'];
$qualification = $_POST['qualification'];

$hasTraining = $_POST['hasTraining'];
$trainingHours = $_POST['trainingHours'];

$hasTOT = $_POST['hasTOT'];
$totHours = $_POST['totHours'];

$certificateSource = $_POST['certificateSource'];
$certificateLink = $_POST['certificateLink'];

$hasBags = $_POST['hasBags'];
$bags = $_POST['bags'];

$bagAuthority = $_POST['bagAuthority'];

$fields = $_POST['fields'];
$organizations = $_POST['organizations'];
$programs = $_POST['programs'];

$sql = "INSERT INTO trainers (
name,
nationalId,
phone,
email,
workType,
workName,
qualification,
hasTraining,
trainingHours,
hasTOT,
totHours,
certificateSource,
certificateLink,
hasBags,
bags,
bagAuthority,
fields,
organizations,
programs
)

VALUES(
'$name',
'$nationalId',
'$phone',
'$email',
'$workType',
'$workName',
'$qualification',
'$hasTraining',
'$trainingHours',
'$hasTOT',
'$totHours',
'$certificateSource',
'$certificateLink',
'$hasBags',
'$bags',
'$bagAuthority',
'$fields',
'$organizations',
'$programs'
)";

mysqli_query($conn, $sql);

header("Location:index.html");
exit();

}

?>

<!DOCTYPE html>
<html lang="ar">

<head>
<meta charset="UTF-8">
<title>إضافة مدرب</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>إضافة مدرب جديد</h1>
<p>إدخال بيانات المدربين داخل النظام</p>
</header>

<div class="container">

<div class="result-card">

<form method="POST">

<h3>المعلومات الأساسية</h3>

<input type="text" name="name" placeholder="اسم المدرب/ة" required>

<input type="text" name="nationalId" placeholder="السجل المدني">

<input type="text" name="phone" placeholder="رقم الجوال">

<input type="email" name="email" placeholder="البريد الإلكتروني">

<h3>الوظيفة والمؤهل</h3>

<input type="text" name="workType" placeholder="جهة العمل">

<input type="text" name="workName" placeholder="اسم جهة العمل">

<input type="text" name="qualification" placeholder="المؤهل العلمي">

<h3>التدريب والشهادات</h3>

<input type="text" name="hasTraining" placeholder="هل سبق لك التدريب">

<input type="text" name="trainingHours" placeholder="عدد الساعات التدريبية المقدمة كمدرب">

<input type="text" name="hasTOT" placeholder="هل لديك شهادة تدريب مدربين">

<input type="text" name="totHours" placeholder="عدد ساعات شهادة تدريب المدربين لديك">

<input type="text" name="certificateSource" placeholder="مصدر الشهادة أو رخصة التدريب">
    
<input type="text" name="certificateLink" placeholder="رابط الشهادة">

<h3>الخبرات</h3>

<input type="text" name="hasBags" placeholder="هل سبق لك إعداد حقائب تدريبية محكمة">

<input type="text" name="bags" placeholder="اذكر حقائبك المحكمة">

<input type="text" name="bagAuthority" placeholder="جهة تحكيم واعتماد الحقيبة التدريبية">

<input type="text" name="fields" placeholder="المجالات التي سبق التدريب فيها">

<input type="text" name="organizations" placeholder="الجهات التي تعاونت معها سابقًا">

<input type="text" name="programs" placeholder="البرامج التي بإمكانك تقديمها خلال الفترة القادمة">

<button type="submit" name="save">
حفظ المدرب
</button>
    
<a href="index.html">
<button type="button">
العودة للرئيسية
</button>
</a>
    
</form>

</div>

</div>

</body>
</html>