<?php
$date=strtotime(date("Y-m-d H:i:s"));
$month=date('m',$date);
$year=date('Y',$date);
$days=date('t',$date);
$sdates=$year."-".$month."-01 00:00:00";
$edates=$year."-".$month."-".$days." 23:59:59";
echo "Start Date ".$sdates." end dates".$edates;
?>


For Weeks : -


<?php
$monday = strtotime("last monday");
$monday = date('w', $monday)==date('w') ? $monday+7*86400 : $monday;




$sunday = strtotime(date("Y-m-d",$monday)." +6 days");

$this_week_sd = date("Y-m-d",$monday);
$this_week_ed = date("Y-m-d",$sunday);

echo "Current week range from $this_week_sd to $this_week_ed ";

?>
