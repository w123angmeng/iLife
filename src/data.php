<?php
//?????????
$con = mysqli_connect("localhost","root","123456","ilife");
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}
// ?????????
//if (mysqli_query("CREATE DATABASE ilife",$con))
//{
    //echo "Database created";
//}
//else
//{
    //echo "Error creating database: " . mysqli_error();
//}

// ??????? my_db ??????Persons?????
//mysqli_select_db("ilife", $con);
//$sql = "CREATE TABLE Persons
//(
//FirstName varchar(15),
//LastName varchar(15),
//Age int
//)";
//mysqli_query($sql,$con);
//???????Persons?????????????
//mysqli_query("INSERT INTO i_goods_info (t_id, name, unit,image,sell_num,price,oper_time)
//VALUES ('Peter', 'Griffin', '35')");

//mysqli_query("INSERT INTO Persons (FirstName, LastName, Age)
//VALUES ('Glenn', 'Quagmire', '33')");
//???????

$data = '{"806":{"id":"806","u":"??","s":"28","c":["46"],"p":"5.00","n":"?????????????","x":"69","i":"/attachment/alycms/www/2017/9/5fMJsflVGuEyhIkU1.jpg"},"861":{"id":"861","u":"??","s":"9","c":["46"],"p":"4.00","n":"?????????","x":"124","i":"/attachment/alycms/www/2017/8/mU3UQGs8NMOGcgKs1.jpg"},"781":{"id":"781","u":"??","s":"41","c":["46"],"p":"4.50","n":"??????????","x":"44","i":"/attachment/alycms/www/2017/8/1FdatF1H5h2zpEOp1.jpg"},"989":{"id":"989","u":"??","s":"79","c":["46"],"p":"5.00","n":"?????????","x":"252","i":"/attachment/alycms/www/2017/7/0IQ6Aj7jua07BZQp1.jpg"},"1001":{"id":"1001","u":"??","s":"226","c":["46"],"p":"7.50","n":"???????","x":"264","i":"/attachment/alycms/www/2017/7/7ktQ1L5mtaBJND891.jpg"},"6321":{"id":"6321","u":"??","s":"216","c":["2"],"p":"5.00","n":"????????","x":"47","i":"/attachment/alycms/www/2017/7/xy8xu6qmg70wUEwL1.jpg"},"847":{"id":"847","u":"??","s":"148","c":["46"],"p":"7.50","n":"?????","x":"110","i":"/attachment/alycms/www/2017/7/k37x1pZ98noyLudx1.jpg"},"12837":{"id":"12837","u":"??","s":"4","c":["46"],"p":"7.50","n":"??T????","x":"333","i":"/attachment/alycms/www/2017/12/uwNYmcsR6VmdQHWL1.jpg"},"983":{"id":"983","u":"??","s":"76","c":["46"],"p":"7.50","n":"?????","x":"246","i":"/attachment/alycms/www/2017/7/rzjvkY2LNAw3Gkrh1.jpg"},"747":{"id":"747","u":"??","s":"1521","c":["46"],"p":"1.50","n":"??????????","x":"2","i":"/attachment/alycms/www/2017/7/pqNwaJSGPggik26F1-1.jpg"},"7971":{"id":"7971","u":"??","s":"25","c":["46"],"p":"7.50","n":"??????","x":"444","i":"/attachment/alycms/www/2017/10/AKjSTN5lDuJZzRGt1.jpg"},"884":{"id":"884","u":"??","s":"258","c":["46"],"p":"4.50","n":"?????????","x":"147","i":"/attachment/alycms/www/2017/9/9GsoPBeOwhGoTv6x1.jpg"},"880":{"id":"880","u":"??","s":"89","c":["46"],"p":"5.00","n":"?????????","x":"143","i":"/attachment/alycms/www/2017/7/6zpDp3dZmklvjaTC1.jpg"},"959":{"id":"959","u":"??","s":"57","c":["46"],"p":"4.50","n":"???????","x":"222","i":"/attachment/alycms/www/2017/9/ZFaVa0cbxfbEYhKY1.jpg"},"812":{"id":"812","u":"??","s":"4","c":["46"],"p":"6.50","n":"????????","x":"75","i":"/attachment/alycms/www/2017/12/IkgP8YbK9JBub1VQ1.jpg"},"934":{"id":"934","u":"??","s":"94","c":["46"],"p":"6.50","n":"????????","x":"197","i":"/attachment/alycms/www/2017/9/bcKEVkoytl2kruui1.jpg"},"935":{"id":"935","u":"??","s":"62","c":["46"],"p":"7.50","n":"??????","x":"198","i":"/attachment/alycms/www/2017/8/k5ctpRimNvjk9EW01.jpg"},"917":{"id":"917","u":"??","s":"328","c":["46"],"p":"5.50","n":"??????????","x":"180","i":"/attachment/alycms/www/2017/7/yKs4A0qg57Npt3AN1.jpg"},"938":{"id":"938","u":"??","s":"221","c":["46"],"p":"4.50","n":"???????","x":"201","i":"/attachment/alycms/www/2017/7/ch1pu3L6XGQTktGZ1.jpg"},"899":{"id":"899","u":"??","s":"12","c":["46"],"p":"6.50","n":"???????","x":"162","i":"/attachment/alycms/www/2017/7/DWi2FNBrFJ9prLrQ1.jpg"},"1022":{"id":"1022","u":"??","s":"597","c":["3"],"p":"0.70","n":"????1????","x":"2","i":"/attachment/alycms/www/2017/7/pUVAt8196NXMDuWQ1.jpg"},"879":{"id":"879","u":"??","s":"22","c":["46"],"p":"5.00","n":"????","x":"142","i":"/attachment/alycms/www/2017/9/EDMFfrEqDFg08wyD1.jpg"},"738":{"id":"738","u":"??","s":"2636","c":["46"],"p":"0.60","n":"???","x":"1","i":"/attachment/alycms/www/2017/7/Ro1fDV7h4W7WPbEX1-1.jpg"},"9465":{"id":"9465","u":"??","s":"166","c":["3"],"p":"0.70","n":"?????????","x":"2","i":"/attachment/alycms/www/2017/10/og75vgIO4WdkgEwT1.jpg"},"9466":{"id":"9466","u":"??","s":"158","c":["3"],"p":"0.70","n":"????????","x":"2","i":"/attachment/alycms/www/2017/10/X8w5YCnxAVKj4hS71.jpg"}}';
$dataJson = json_decode($data);
$result = false;
foreach ($dataJson as $item)
{
    $sql = strval("INSERT INTO i_goods_info (t_id, name, unit,image,price,sell_num,oper_time)
    VALUES ('"+$item->id+"','"+$item->n+"','"+$item->u+"','"+$item->i+"','"+$item->p+"','"+$item->s+"','"+date('Y-m-d h:i:s')+"')");
    
    var_dump($sql);
    return;
    $item_result = mysqli_query($con,$sql);
    var_dump($item_result);
    return;
    if($item_result == false)
    {
        var_dump($item_result);
        $result = false;
        return;
    }
}
if($result)
{
    echo "data input succeeed!";
}
else
{
    echo "data input fail!";
}
mysqli_close($con);
?>
