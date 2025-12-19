@extends('template.default')

@section('title', 'my view')
@section('content')
<h1>My view</h1>
<?php
    echo "My View Content";
?>
<br>
<?php
/*$myval = 1;
echo $myval;
$myarray[] = Array(1,2,3,4);
echo "<br>";
var_dump($myarray[0]);
?>

<?php
    $myarray4 = [
        "name" => "jhon",
        "age" => "30",
      \\  "city" => "New Y.",
        0,
        1
];*/
/*print_r($myarray4);
foreach ($myarray4 as $key => $value) {
    echo "<br>key: " . $key . "Value: " . $value;
}

foreach ($myarray4 as $key => $value) {
    echo "<br>Value: " . $value;
}
$myval = "A";
for($i = 0;$i<10;$i++){
    echo $myval++;
    echo "<br>";
}
function myFunction(){
    return "My Function Called";
}
echo MyFuncTION();

$a = 10;

if($a<10){
    $varIntIf = "Varible in If";
}else if($a==10) {
    echo "a==10";
}else {
    echo "a>10";
}*/
echo "";
echo "ชื่อ: " . ($request->first_name ?? '-') . "<br>";
echo "สกุล: " . ($request->last_name ?? '-') . "<br>";
echo "วันเดือนปีเกิด: " . ($request->date_of_birth ?? '-') . "<br>";
echo "อายุ: " . ($request->age ?? '-') . "<br>";
if ($request->gender == "male") {
    echo "เพศ: ชาย";
} else {
    echo "เพศ: หญิง";
}
echo "ที่อยู่: " . ($request->address ?? '-') . "<br>";
echo "สีที่ชอบ: " . ($request->favorite_color ?? '-') . "<br>";

if (($request->music_genre ?? '') === "for_life") {
    echo "แนวเพลงที่ชอบ: เพื่อชีวิต<br>";
} elseif (($request->music_genre ?? '') === "country") {
    echo "แนวเพลงที่ชอบ: ลูกทุ่ง<br>";
} elseif (($request->music_genre ?? '') === "other") {
    echo "แนวเพลงที่ชอบ: อื่นๆ<br>";
} else {
    echo "แนวเพลงที่ชอบ: -<br>";
}
?>


@endsection
