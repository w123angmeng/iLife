<?php
//设置编码
@header('Content-type: text/html;charset=UTF-8');
//设置时区
date_default_timezone_set('PRC');
//TODO删除今天的商品数据
//错误Log日志
$mydb = new mysqli("localhost","root","123456","ilife");
$mydb->set_charset("utf8");
if (!$mydb)
{
    die('Could not connect: ' . mysqli_error());
}
$data = '{"747":{"id":"747","u":"碗","s":"1555","c":["46"],"p":"1.50","n":"米饭（加盒）","i":"\/attachment\/alycms\/www\/2017\/7\/pqNwaJSGPggik26F1-1.jpg","x":"2"},"880":{"id":"880","u":"份","s":"98","c":["46"],"p":"5.00","n":"菠菜炒鸡蛋","i":"\/attachment\/alycms\/www\/2017\/7\/6zpDp3dZmklvjaTC1.jpg","x":"143"},"959":{"id":"959","u":"份","s":"60","c":["46"],"p":"4.50","n":"油菜炒木耳","i":"\/attachment\/alycms\/www\/2017\/9\/ZFaVa0cbxfbEYhKY1.jpg","x":"222"},"885":{"id":"885","u":"份","c":["46"],"p":"4.50","n":"炸茄片","i":"\/attachment\/alycms\/www\/2017\/12\/46S76tRiT4C1GEGb1.jpg","x":"148"},"884":{"id":"884","u":"份","s":"278","c":["46"],"p":"4.50","n":"白菜炖豆腐","i":"\/attachment\/alycms\/www\/2017\/9\/9GsoPBeOwhGoTv6x1.jpg","x":"147"},"738":{"id":"738","u":"个","s":"2686","c":["46"],"p":"0.60","n":"馒头","i":"\/attachment\/alycms\/www\/2017\/7\/Ro1fDV7h4W7WPbEX1-1.jpg","x":"1"},"941":{"id":"941","u":"份","c":["46"],"p":"5.00","n":"炸杏鲍菇","i":"\/attachment\/alycms\/www\/2017\/12\/j6qabbzoQKV4wcg01.jpg","x":"204"},"1001":{"id":"1001","u":"份","s":"234","c":["46"],"p":"7.50","n":"鱼香肉丝","i":"\/attachment\/alycms\/www\/2017\/7\/7ktQ1L5mtaBJND891.jpg","x":"264"},"7076201":{"id":"7076201","u":"份","c":["46"],"p":"4.50","n":"烧冬瓜","i":"\/attachment\/alycms\/www\/2017\/12\/9ps5y8D4oR31ojtu1.jpg","x":"111"},"806":{"id":"806","u":"份","s":"45","c":["46"],"p":"5.00","n":"东北酸菜炖粉条","i":"\/attachment\/alycms\/www\/2017\/12\/mM6rnoGYwFkeJLvX1.jpg","x":"69"},"7076200":{"id":"7076200","u":"份","c":["46"],"p":"7.50","n":"椒香鸡柳","x":"111"},"761":{"id":"761","u":"份","s":"32","c":["46"],"p":"6.50","n":"烧溜鱼条","i":"\/attachment\/alycms\/www\/2017\/7\/st7urclt2HKhGhJM1.jpg","x":"24"},"942":{"id":"942","u":"份","s":"294","c":["46"],"p":"4.50","n":"炒花菜","i":"\/attachment\/alycms\/www\/2017\/7\/jhoTlWCIIYa8ircM1.jpg","x":"205"},"1005":{"id":"1005","u":"份","s":"15","c":["46"],"p":"7.50","n":"土豆红烧肉","i":"\/attachment\/alycms\/www\/2017\/8\/6kQWRY7XetKyA8DY1.jpg","x":"268"},"764":{"id":"764","u":"份","p":"6.50","n":"麻辣鸭块盖浇饭","i":"\/attachment\/alycms\/www\/2017\/7\/GK44D0cjuLEC7TJo1.jpg","x":"27"},"1007":{"id":"1007","u":"份","s":"37","c":["46"],"p":"4.50","n":"芹菜炒肉","i":"\/attachment\/alycms\/www\/2017\/7\/HZMlGhXTSeGdXTVf1.jpg","x":"270"},"938":{"id":"938","u":"份","s":"228","c":["46"],"p":"4.50","n":"干煸头菜","i":"\/attachment\/alycms\/www\/2017\/12\/Slu4P0LROINLwCaA1.jpg","x":"201"},"934":{"id":"934","u":"份","s":"97","c":["46"],"p":"6.50","n":"干煸火腿肠","i":"\/attachment\/alycms\/www\/2017\/12\/BdYOfLQQFAChP2MI1.jpg","x":"197"},"7076199":{"id":"7076199","u":"份","c":["46"],"p":"7.50","n":"炸鲳鱼","i":"\/attachment\/alycms\/www\/2017\/12\/J8mZs5FxAAG19Lic1.jpg","x":"111"},"1065":{"id":"1065","u":"份","s":"106","c":["46"],"p":"4.50","n":"鱼香藕片","i":"\/attachment\/alycms\/www\/2017\/7\/oI6Zhwb63KPh1fLL1.jpeg","x":"9"},"854":{"id":"854","u":"份","s":"118","c":["46"],"p":"5.00","n":"剁椒千页豆腐","i":"\/attachment\/alycms\/www\/2017\/7\/4nQRLYF2SPamiP5e1.jpg","x":"117"},"989":{"id":"989","u":"份","s":"80","c":["46"],"p":"5.00","n":"辣炒豆腐皮","i":"\/attachment\/alycms\/www\/2017\/7\/0IQ6Aj7jua07BZQp1.jpg","x":"252"},"917":{"id":"917","u":"份","s":"337","c":["46"],"p":"5.50","n":"西红柿炒蛋","i":"\/attachment\/alycms\/www\/2017\/7\/yKs4A0qg57Npt3AN1.jpg","x":"180"},"863":{"id":"863","u":"份","s":"52","c":["46"],"p":"6.50","n":"宫爆鸡丁","i":"\/attachment\/alycms\/www\/2017\/7\/nLhv7HvSeV9QPN201.jpg","x":"126"},"7971":{"id":"7971","u":"份","s":"27","c":["46"],"p":"7.50","n":"黑椒牛肉","i":"\/attachment\/alycms\/www\/2017\/10\/AKjSTN5lDuJZzRGt1.jpg","x":"444"},"783":{"id":"783","u":"份","s":"250","c":["46"],"p":"4.50","n":"酸辣土豆丝","i":"\/attachment\/alycms\/www\/2017\/7\/ZiclGBuhSN3E2CMX1.jpg","x":"46"},"1856":{"id":"1856","u":"份","s":"31","c":["46"],"p":"7.50","n":"辣炒培根片","i":"\/attachment\/alycms\/www\/2017\/8\/P54g7ZMFLZEdkxhW1.jpg","x":"222"},"781":{"id":"781","u":"份","s":"48","c":["46"],"p":"4.50","n":"香辣土豆丁","i":"\/attachment\/alycms\/www\/2017\/8\/1FdatF1H5h2zpEOp1.jpg","x":"44"},"960":{"id":"960","u":"份","s":"12","c":["46"],"p":"6.50","n":"辣炒黑蛤","i":"\/attachment\/alycms\/www\/2017\/7\/wW8fLmPCxkRM9aBB1.jpg","x":"223"},"847":{"id":"847","u":"份","s":"150","c":["46"],"p":"7.50","n":"盐酥鸡","i":"\/attachment\/alycms\/www\/2017\/7\/k37x1pZ98noyLudx1.jpg","x":"110"}}';
$dataJson = json_decode($data);
$result = true;
$oper_time = date('Y-m-d H:i:s');
foreach ($dataJson as $item)
{
	$item->s = $item->s ? $item->s: $item->x;
    $sql = "INSERT INTO i_goods_info (t_id, name, unit,image,price,sell_num,oper_time)
    VALUES ('$item->id','$item->n','$item->u','$item->i','$item->p','$item->s','$oper_time')";
    $item_result = $mydb->query($sql);
    if($item_result == false)
    {
		echo $mydb->error;
        $result = false;
        return;
    }
}
if($result)
{
    echo "1:data input succeeed!";
}
else
{
    echo "0:data input fail!";
}
$mydb->close();
?>
