<?php
$Score=80; // ตัวแปร PHP
?>
<script type="text/javascript">
var u_score=<?=$Score?>; // ตัวแปร javascript
if(u_score>=80){
    alert("You pass");
}else{
    alert("You fail");  
}
</script>