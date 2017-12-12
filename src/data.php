<?php
//连接数据库
$con = mysqli_connect("localhost","peter","abc123");
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}
// 创建数据库
if (mysqli_query("CREATE DATABASE my_db",$con))
{
    echo "Database created";
}
else
{
    echo "Error creating database: " . mysqli_error();
}

// 在数据库 my_db 中创建Persons数据表
mysqli_select_db("my_db", $con);
$sql = "CREATE TABLE Persons 
(
FirstName varchar(15),
LastName varchar(15),
Age int
)";
mysqli_query($sql,$con);
//在数据表Persons中添加两条数据
mysqli_query("INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Peter', 'Griffin', '35')");

mysqli_query("INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Glenn', 'Quagmire', '33')");
//关闭链接
mysqli_close($con);
$data = '{"806":{"id":"806","u":"份","s":"28","c":["46"],"p":"5.00","n":"东北酸菜炖粉条","x":"69","i":"/attachment/alycms/www/2017/9/5fMJsflVGuEyhIkU1.jpg"},"861":{"id":"861","u":"份","s":"9","c":["46"],"p":"4.00","n":"虾酱蒸鸡蛋","x":"124","i":"/attachment/alycms/www/2017/8/mU3UQGs8NMOGcgKs1.jpg"},"781":{"id":"781","u":"份","s":"41","c":["46"],"p":"4.50","n":"香辣土豆丁","x":"44","i":"/attachment/alycms/www/2017/8/1FdatF1H5h2zpEOp1.jpg"},"989":{"id":"989","u":"份","s":"79","c":["46"],"p":"5.00","n":"尖椒炒豆腐皮","x":"252","i":"/attachment/alycms/www/2017/7/0IQ6Aj7jua07BZQp1.jpg"},"1001":{"id":"1001","u":"份","s":"226","c":["46"],"p":"7.50","n":"鱼香肉丝","x":"264","i":"/attachment/alycms/www/2017/7/7ktQ1L5mtaBJND891.jpg"},"6321":{"id":"6321","u":"份","s":"216","c":["2"],"p":"5.00","n":"鱼香茄子","x":"47","i":"/attachment/alycms/www/2017/7/xy8xu6qmg70wUEwL1.jpg"},"847":{"id":"847","u":"份","s":"148","c":["46"],"p":"7.50","n":"盐酥鸡","x":"110","i":"/attachment/alycms/www/2017/7/k37x1pZ98noyLudx1.jpg"},"12837":{"id":"12837","u":"份","s":"4","c":["46"],"p":"7.50","n":"剁椒鲳鱼","x":"333","i":"/attachment/alycms/www/2017/12/uwNYmcsR6VmdQHWL1.jpg"},"983":{"id":"983","u":"份","s":"76","c":["46"],"p":"7.50","n":"回锅肉","x":"246","i":"/attachment/alycms/www/2017/7/rzjvkY2LNAw3Gkrh1.jpg"},"747":{"id":"747","u":"碗","s":"1521","c":["46"],"p":"1.50","n":"米饭（加盒）","x":"2","i":"/attachment/alycms/www/2017/7/pqNwaJSGPggik26F1-1.jpg"},"7971":{"id":"7971","u":"份","s":"25","c":["46"],"p":"7.50","n":"黑椒牛肉","x":"444","i":"/attachment/alycms/www/2017/10/AKjSTN5lDuJZzRGt1.jpg"},"884":{"id":"884","u":"份","s":"258","c":["46"],"p":"4.50","n":"白菜炖豆腐","x":"147","i":"/attachment/alycms/www/2017/9/9GsoPBeOwhGoTv6x1.jpg"},"880":{"id":"880","u":"份","s":"89","c":["46"],"p":"5.00","n":"菠菜炒鸡蛋","x":"143","i":"/attachment/alycms/www/2017/7/6zpDp3dZmklvjaTC1.jpg"},"959":{"id":"959","u":"份","s":"57","c":["46"],"p":"4.50","n":"油菜炒木耳","x":"222","i":"/attachment/alycms/www/2017/9/ZFaVa0cbxfbEYhKY1.jpg"},"812":{"id":"812","u":"份","s":"4","c":["46"],"p":"6.50","n":"川味鸡块","x":"75","i":"/attachment/alycms/www/2017/12/IkgP8YbK9JBub1VQ1.jpg"},"934":{"id":"934","u":"份","s":"94","c":["46"],"p":"6.50","n":"干煸火腿肠","x":"197","i":"/attachment/alycms/www/2017/9/bcKEVkoytl2kruui1.jpg"},"935":{"id":"935","u":"份","s":"62","c":["46"],"p":"7.50","n":"辣子肉","x":"198","i":"/attachment/alycms/www/2017/8/k5ctpRimNvjk9EW01.jpg"},"917":{"id":"917","u":"份","s":"328","c":["46"],"p":"5.50","n":"西红柿炒蛋","x":"180","i":"/attachment/alycms/www/2017/7/yKs4A0qg57Npt3AN1.jpg"},"938":{"id":"938","u":"份","s":"221","c":["46"],"p":"4.50","n":"干煸头菜","x":"201","i":"/attachment/alycms/www/2017/7/ch1pu3L6XGQTktGZ1.jpg"},"899":{"id":"899","u":"份","s":"12","c":["46"],"p":"6.50","n":"麻辣鸭块","x":"162","i":"/attachment/alycms/www/2017/7/DWi2FNBrFJ9prLrQ1.jpg"},"1022":{"id":"1022","u":"个","s":"597","c":["3"],"p":"0.70","n":"花卷（1个）","x":"2","i":"/attachment/alycms/www/2017/7/pUVAt8196NXMDuWQ1.jpg"},"879":{"id":"879","u":"份","s":"22","c":["46"],"p":"5.00","n":"炸蘑菇","x":"142","i":"/attachment/alycms/www/2017/9/EDMFfrEqDFg08wyD1.jpg"},"738":{"id":"738","u":"个","s":"2636","c":["46"],"p":"0.60","n":"馒头","x":"1","i":"/attachment/alycms/www/2017/7/Ro1fDV7h4W7WPbEX1-1.jpg"},"9465":{"id":"9465","u":"个","s":"166","c":["3"],"p":"0.70","n":"黑米面馒头","x":"2","i":"/attachment/alycms/www/2017/10/og75vgIO4WdkgEwT1.jpg"},"9466":{"id":"9466","u":"个","s":"158","c":["3"],"p":"0.70","n":"南瓜面馒头","x":"2","i":"/attachment/alycms/www/2017/10/X8w5YCnxAVKj4hS71.jpg"}}';
$dataJson = json_decode($data);
var_dump($dataJson);
foreach ($dataJson as $item)
{
    //在数据表Persons中添加两条数据
    mysqli_query("INSERT INTO Persons (FirstName, LastName, Age) 
    VALUES ($item->id, $item->name, $item->i,$item->p,$item->unit,$item->sell)");

}
?>
