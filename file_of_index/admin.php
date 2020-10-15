<?php

    include "header.php";

?>

<table  dir="rlt"  align="right">
    <th>رقم الجلوس</th>
 <th>المعدل</th>
<th>المحافظة</th>
    <th> نوع الثانوية</th>
    <th>عام التخرج</th>
<th>الكلية</th>
<th> القسم</th>
<th>إسم الطالب</th>
<th>رقم الهاتف</th>
<th>البريد</th>
<th>الجنس</th>
<th>محل الميلاد</th>
<th>تاريخ الميلاد</th>
<?php

    $host               = "localhost";
    $user               = "root";
    $password      = "";
    $reg_website       = "reg_website";

    $con = mysqli_connect($host, $user, $password,$reg_website);
 
    // إستيراد معلومات الطلاب من قاعدة البيانات

    $query = "SELECT * FROM reg  ";
    $result = mysqli_query($con,$query);

    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            echo
"<tr><td>" . $row['p_number'] .
"</td><td>" . $row['p_average'] .
"</td><td>" . $row['p_city'] .
"</td><td>" . $row['p_type'] . "
</td><td>" . $row['p_year'] . "
</td><td>" . $row['p_clg'] . "
</td><td>" . $row['p_sc'] . "
</td><td>" . $row['p_name'] . "
</td><td>" . $row['p_phone'] .
"</td><td>" . $row['p_email'] .
"</td><td>" . $row['p_sex'] .
"</td><td>" . $row['p_p_birth'] .
"</td><td>" . $row['p_dpirth'] .
 "</td></tr>";
              
           
        }
        echo "</table>";
    }
    else{
        echo "يوجد خطا ماء";
    }


?>