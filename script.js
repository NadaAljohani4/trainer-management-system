function searchTrainer(){

const input = document.getElementById("searchInput").value.trim();
const result = document.getElementById("result");

if(input === ""){
result.innerHTML = "اكتب رقم المدرب أو الهوية أو الاسم أو الجوال";
return;
}

fetch("search.php?search=" + input)

.then(response => response.json())

.then(data => {

if(data.length > 0){

const trainer = data[0];

result.innerHTML = `

<div class="trainer-card">

<h2>اسم المدرب/ة: ${trainer.name}</h2>

<h3>المعلومات الأساسية</h3>

<div class="row">
<span class="label">رقم المدرب:</span>
<span class="value">${trainer.id}</span>
</div>

<div class="row">
<span class="label">السجل المدني:</span>
<span class="value">${trainer.nationalId}</span>
</div>

<div class="row">
<span class="label">رقم الجوال:</span>
<span class="value">${trainer.phone}</span>
</div>

<div class="row">
<span class="label">البريد الإلكتروني:</span>
<span class="value">${trainer.email}</span>
</div>

<button onclick="toggleDetails()" class="details-btn">
عرض باقي المعلومات
</button>

<div id="moreDetails" style="display:none;">

<h3>الوظيفة والمؤهل</h3>

<div class="row">
<span class="label">جهة العمل:</span>
<span class="value">${trainer.workType}</span>
</div>

<div class="row">
<span class="label">اسم جهة العمل:</span>
<span class="value">${trainer.workName}</span>
</div>

<div class="row">
<span class="label">المؤهل العلمي:</span>
<span class="value">${trainer.qualification}</span>
</div>

<h3>التدريب والشهادات</h3>

<div class="row">
<span class="label">هل سبق لك التدريب:</span>
<span class="value">${trainer.hasTraining}</span>
</div>

<div class="row">
<span class="label">عدد الساعات التدريبية المقدمة كمدرب:</span>
<span class="value">${trainer.trainingHours}</span>
</div>

<div class="row">
<span class="label">هل لديك شهادة تدريب مدربين:</span>
<span class="value">${trainer.hasTOT}</span>
</div>

<div class="row">
<span class="label">عدد ساعات شهادة تدريب المدربين لديك:</span>
<span class="value">${trainer.totHours}</span>
</div>

<div class="row">
<span class="label">مصدر الشهادة أو رخصة التدريب:</span>
<span class="value">${trainer.certificateSource}</span>
</div>

<div class="row">
<span class="label">رابط الشهادة:</span>
<span class="value">
<a href="${trainer.certificateLink}" target="_blank">
عرض الشهادة
</a>
</span>
</div>

<h3>الخبرات</h3>

<div class="row">
<span class="label">هل سبق لك إعداد حقائب تدريبية محكمة:</span>
<span class="value">${trainer.hasBags}</span>
</div>

<div class="row">
<span class="label">اذكر حقائبك المحكمة:</span>
<span class="value">${trainer.bags}</span>
</div>

<div class="row">
<span class="label">جهة تحكيم واعتماد الحقيبة التدريبية:</span>
<span class="value">${trainer.bagAuthority}</span>
</div>

<div class="row">
<span class="label">المجالات التي سبق التدريب فيها:</span>
<span class="value">${trainer.fields}</span>
</div>

<div class="row">
<span class="label">الجهات التي تعاونت معها سابقًا:</span>
<span class="value">${trainer.organizations}</span>
</div>

<div class="row">
<span class="label">البرامج التي بإمكانك تقديمها خلال الفترة القادمة:</span>
<span class="value">${trainer.programs}</span>
</div>

</div>

</div>
`;

}else{

result.innerHTML = "<p style='color:red'>لا توجد بيانات</p>";

}

});

}

document.getElementById("searchInput").addEventListener("keypress", function(event){

if(event.key === "Enter"){
searchTrainer();
}

});

function toggleDetails(){

const details = document.getElementById("moreDetails");

if(details.style.display === "none"){
details.style.display = "block";
}else{
details.style.display = "none";
}

}