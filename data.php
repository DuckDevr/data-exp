<?php
echo "<meta charset='utf-8'>";
function ThDate()
{
//วันภาษาไทย
$ThDay = array ( "อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์" );
//เดือนภาษาไทย
$ThMonth = array ( "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน","พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม","กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );
 
//กำหนดคุณสมบัติ
$week = date( "w" ); // ค่าวันในสัปดาห์ (0-6)
$months = date( "m" )-1; // ค่าเดือน (1-12)
$day = date( "d" ); // ค่าวันที่(1-31)
$years = date( "Y" )+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.
 
return "วัน$ThDay[$week] 
		ที่ $day  
		เดือน $ThMonth[$months] 
		พ.ศ. $years";
}
?>
<script>
// กำหนดวันหมดอายุ mm/dd/yyyy hh:mm:ss
// ตัวอย่าง var dueDate = new Date('09/13/2024 20:00:00);
  var dueDate = new Date();
  var currentDate = new Date();
  
  if (currentDate >= dueDate) {
    setTimeout(function(){
      window.location.href = "exp.php";
    }, 0); 
  }
</script>
