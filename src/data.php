<?php
//设置编码
@header('Content-type: text/html;charset=UTF-8');
//设置时区
date_default_timezone_set('PRC');
//TODO删除今天的商品数据
//错误Log日志
$mydb = new mysqli("localhost","root","","ilife");
$mydb->set_charset("utf8");
if (!$mydb)
{
    die('Could not connect: ' . mysqli_error());
}
//2017-12-26
$data = '{"1004":{"id":"1004","u":"份","s":"28","c":["46"],"p":"7.50","n":"香菠咕咾肉","i":"/attachment/alycms/www/2017/7/rQ1SOnNIJwobtQlg1.jpg","x":"267"},"1001":{"id":"1001","u":"份","s":"249","c":["46"],"p":"7.50","n":"鱼香肉丝","i":"/attachment/alycms/www/2017/7/7ktQ1L5mtaBJND891.jpg","x":"264"},"783":{"id":"783","u":"份","s":"258","c":["46"],"p":"4.50","n":"家常炒土豆丝","i":"/attachment/alycms/www/2017/7/ZiclGBuhSN3E2CMX1.jpg","x":"46"},"784":{"id":"784","u":"份","s":"2","c":["46"],"p":"7.50","n":"麻辣鸡片","x":"47","i":"/attachment/alycms/www/2017/7/9fANYq8RLeDZOH9R1.jpg"},"942":{"id":"942","u":"份","s":"300","c":["46"],"p":"4.50","n":"炒花菜","i":"/attachment/alycms/www/2017/7/jhoTlWCIIYa8ircM1.jpg","x":"205"},"1005":{"id":"1005","u":"份","s":"27","c":["46"],"p":"7.50","n":"土豆红烧肉","i":"/attachment/alycms/www/2017/8/6kQWRY7XetKyA8DY1.jpg","x":"268"},"847":{"id":"847","u":"份","s":"155","c":["46"],"p":"7.50","n":"盐酥鸡","i":"/attachment/alycms/www/2017/7/k37x1pZ98noyLudx1.jpg","x":"110"},"985":{"id":"985","u":"份","s":"22","c":["46"],"p":"4.50","n":"茭瓜炒肉","i":"/attachment/alycms/www/2017/8/cFXaPtbjGENwkWyk1.jpg","x":"248"},"12837":{"id":"12837","u":"份","s":"11","c":["46"],"p":"7.50","n":"剁椒鲳鱼","i":"/attachment/alycms/www/2017/12/uwNYmcsR6VmdQHWL1.jpg","x":"333"},"747":{"id":"747","u":"碗","s":"1598","c":["46"],"p":"1.50","n":"米饭（加盒）","i":"/attachment/alycms/www/2017/7/pqNwaJSGPggik26F1-1.jpg","x":"2"},"7076452":{"id":"7076452","u":"份","c":["46"],"p":"4.50","n":"芹菜炒粉条","i":"/attachment/alycms/www/2017/12/j03VZiFg2nRrvdPI1.jpg","x":"66"},"884":{"id":"884","u":"份","s":"296","c":["46"],"p":"4.50","n":"白菜炖豆腐","i":"/attachment/alycms/www/2017/9/9GsoPBeOwhGoTv6x1.jpg","x":"147"},"7076450":{"id":"7076450","u":"份","c":["46"],"p":"7.50","n":"炸小黄花鱼","i":"/attachment/alycms/www/2017/12/bO3sE5gtGPtJlL1D1.jpg","x":"66"},"880":{"id":"880","u":"份","s":"117","c":["46"],"p":"5.00","n":"菠菜炒鸡蛋","i":"/attachment/alycms/www/2017/7/6zpDp3dZmklvjaTC1.jpg","x":"143"},"5966":{"id":"5966","u":"份","s":"7","c":["46"],"p":"7.50","n":"溜肉丸","i":"/attachment/alycms/www/2017/8/rynZUr0JGT7QE10e1.jpg","x":"222"},"959":{"id":"959","u":"份","s":"64","c":["46"],"p":"4.50","n":"油菜炒木耳","i":"/attachment/alycms/www/2017/9/ZFaVa0cbxfbEYhKY1.jpg","x":"222"},"977":{"id":"977","u":"份","s":"15","c":["46"],"p":"4.50","n":"尖椒炒茄片","i":"/attachment/alycms/www/2017/7/74RftLNUJyP0g9321.jpg","x":"240"},"955":{"id":"955","u":"份","s":"8","c":["46"],"p":"6.50","n":"葱爆猪肝","i":"/attachment/alycms/www/2017/11/KK5RkQsSL5olWGPd1.jpg","x":"218"},"7076201":{"id":"7076201","u":"份","s":"11","c":["46"],"p":"4.50","n":"烧冬瓜","i":"/attachment/alycms/www/2017/12/9ps5y8D4oR31ojtu1.jpg","x":"111"},"930":{"id":"930","u":"份","s":"139","c":["46"],"p":"4.50","n":"炒绿豆芽","i":"/attachment/alycms/www/2017/8/N74ewnVEl8ssVLS61.jpg","x":"193"},"854":{"id":"854","u":"份","s":"134","c":["46"],"p":"5.00","n":"剁椒千页豆腐","i":"/attachment/alycms/www/2017/7/4nQRLYF2SPamiP5e1.jpg","x":"117"},"837":{"id":"837","u":"份","s":"28","c":["46"],"p":"5.50","n":"家常烧豆腐","i":"/attachment/alycms/www/2017/7/oQEFqQpZZAjC30IT1.jpg","x":"100"},"1065":{"id":"1065","u":"份","s":"125","c":["46"],"p":"4.50","n":"鱼香藕片","i":"/attachment/alycms/www/2017/7/oI6Zhwb63KPh1fLL1.jpeg","x":"9"},"934":{"id":"934","u":"份","s":"103","c":["46"],"p":"6.50","n":"干煸火腿肠","i":"/attachment/alycms/www/2017/12/BdYOfLQQFAChP2MI1.jpg","x":"197"},"917":{"id":"917","u":"份","s":"343","c":["46"],"p":"5.50","n":"西红柿炒蛋","i":"/attachment/alycms/www/2017/7/yKs4A0qg57Npt3AN1.jpg","x":"180"},"938":{"id":"938","u":"份","s":"239","c":["46"],"p":"4.50","n":"干煸头菜","i":"/attachment/alycms/www/2017/12/Slu4P0LROINLwCaA1.jpg","x":"201"},"913":{"id":"913","u":"份","s":"1","c":["46"],"p":"5.00","n":"冲油猪血","i":"/attachment/alycms/www/2017/12/VB8HTwFhnVfrEIB51.jpg","x":"176"},"899":{"id":"899","u":"份","s":"14","c":["46"],"p":"6.50","n":"红烧鸭块","i":"/attachment/alycms/www/2017/12/dlAfmH5gPGkCCwZI1.jpg","x":"162"},"738":{"id":"738","u":"个","s":"2815","c":["46"],"p":"0.60","n":"馒头","i":"/attachment/alycms/www/2017/7/Ro1fDV7h4W7WPbEX1-1.jpg","x":"1"}}';
//2017-12-25
//$data = '{"747":{"id":"747","u":"碗","s":"1598","c":["46"],"p":"1.50","n":"米饭（加盒）","i":"\/attachment\/alycms\/www\/2017\/7\/pqNwaJSGPggik26F1-1.jpg","x":"2"},"880":{"id":"880","u":"份","s":"117","c":["46"],"p":"5.00","n":"菠菜炒鸡蛋","i":"\/attachment\/alycms\/www\/2017\/7\/6zpDp3dZmklvjaTC1.jpg","x":"143"},"959":{"id":"959","u":"份","s":"64","c":["46"],"p":"4.50","n":"油菜炒木耳","i":"\/attachment\/alycms\/www\/2017\/9\/ZFaVa0cbxfbEYhKY1.jpg","x":"222"},"884":{"id":"884","u":"份","s":"296","c":["46"],"p":"4.50","n":"白菜炖豆腐","i":"\/attachment\/alycms\/www\/2017\/9\/9GsoPBeOwhGoTv6x1.jpg","x":"147"},"955":{"id":"955","u":"份","s":"8","c":["46"],"p":"6.50","n":"葱爆猪肝","i":"\/attachment\/alycms\/www\/2017\/11\/KK5RkQsSL5olWGPd1.jpg","x":"218"},"738":{"id":"738","u":"个","s":"2815","c":["46"],"p":"0.60","n":"馒头","i":"\/attachment\/alycms\/www\/2017\/7\/Ro1fDV7h4W7WPbEX1-1.jpg","x":"1"},"1001":{"id":"1001","u":"份","s":"249","c":["46"],"p":"7.50","n":"鱼香肉丝","i":"\/attachment\/alycms\/www\/2017\/7\/7ktQ1L5mtaBJND891.jpg","x":"264"},"7076201":{"id":"7076201","u":"份","s":"11","c":["46"],"p":"4.50","n":"烧冬瓜","i":"\/attachment\/alycms\/www\/2017\/12\/9ps5y8D4oR31ojtu1.jpg","x":"111"},"942":{"id":"942","u":"份","s":"300","c":["46"],"p":"4.50","n":"炒花菜","i":"\/attachment\/alycms\/www\/2017\/7\/jhoTlWCIIYa8ircM1.jpg","x":"205"},"1005":{"id":"1005","u":"份","s":"27","c":["46"],"p":"7.50","n":"土豆红烧肉","i":"\/attachment\/alycms\/www\/2017\/8\/6kQWRY7XetKyA8DY1.jpg","x":"268"},"1004":{"id":"1004","u":"份","s":"28","c":["46"],"p":"7.50","n":"香菠咕咾肉","i":"\/attachment\/alycms\/www\/2017\/7\/rQ1SOnNIJwobtQlg1.jpg","x":"267"},"5966":{"id":"5966","u":"份","s":"7","c":["46"],"p":"7.50","n":"溜肉丸","i":"\/attachment\/alycms\/www\/2017\/8\/rynZUr0JGT7QE10e1.jpg","x":"222"},"938":{"id":"938","u":"份","s":"239","c":["46"],"p":"4.50","n":"干煸头菜","i":"\/attachment\/alycms\/www\/2017\/12\/Slu4P0LROINLwCaA1.jpg","x":"201"},"934":{"id":"934","u":"份","s":"103","c":["46"],"p":"6.50","n":"干煸火腿肠","i":"\/attachment\/alycms\/www\/2017\/12\/BdYOfLQQFAChP2MI1.jpg","x":"197"},"930":{"id":"930","u":"份","s":"139","c":["46"],"p":"4.50","n":"炒绿豆芽","i":"\/attachment\/alycms\/www\/2017\/8\/N74ewnVEl8ssVLS61.jpg","x":"193"},"12837":{"id":"12837","u":"份","s":"11","c":["46"],"p":"7.50","n":"剁椒鲳鱼","i":"\/attachment\/alycms\/www\/2017\/12\/uwNYmcsR6VmdQHWL1.jpg","x":"333"},"985":{"id":"985","u":"份","s":"22","c":["46"],"p":"4.50","n":"茭瓜炒肉","i":"\/attachment\/alycms\/www\/2017\/8\/cFXaPtbjGENwkWyk1.jpg","x":"248"},"1065":{"id":"1065","u":"份","s":"125","c":["46"],"p":"4.50","n":"鱼香藕片","i":"\/attachment\/alycms\/www\/2017\/7\/oI6Zhwb63KPh1fLL1.jpeg","x":"9"},"854":{"id":"854","u":"份","s":"134","c":["46"],"p":"5.00","n":"剁椒千页豆腐","i":"\/attachment\/alycms\/www\/2017\/7\/4nQRLYF2SPamiP5e1.jpg","x":"117"},"7076452":{"id":"7076452","u":"份","c":["46"],"p":"4.50","n":"芹菜炒粉条","i":"\/attachment\/alycms\/www\/2017\/12\/j03VZiFg2nRrvdPI1.jpg","x":"66"},"917":{"id":"917","u":"份","s":"343","c":["46"],"p":"5.50","n":"西红柿炒蛋","i":"\/attachment\/alycms\/www\/2017\/7\/yKs4A0qg57Npt3AN1.jpg","x":"180"},"977":{"id":"977","u":"份","s":"15","c":["46"],"p":"4.50","n":"尖椒炒茄片","i":"\/attachment\/alycms\/www\/2017\/7\/74RftLNUJyP0g9321.jpg","x":"240"},"7076451":{"id":"7076451","u":"份","c":["46"],"p":"6.50","n":"黑椒鸡片","i":"\/attachment\/alycms\/www\/2017\/12\/VDXtyRbspDwBTNbD1.jpg","x":"66"},"7076450":{"id":"7076450","u":"份","c":["46"],"p":"7.50","n":"炸小黄花鱼","i":"\/attachment\/alycms\/www\/2017\/12\/bO3sE5gtGPtJlL1D1.jpg","x":"66"},"913":{"id":"913","u":"份","s":"1","c":["46"],"p":"5.00","n":"冲油猪血","i":"\/attachment\/alycms\/www\/2017\/12\/VB8HTwFhnVfrEIB51.jpg","x":"176"},"837":{"id":"837","u":"份","s":"28","c":["46"],"p":"5.50","n":"家常烧豆腐","i":"\/attachment\/alycms\/www\/2017\/7\/oQEFqQpZZAjC30IT1.jpg","x":"100"},"783":{"id":"783","u":"份","s":"258","c":["46"],"p":"4.50","n":"家常炒土豆丝","i":"\/attachment\/alycms\/www\/2017\/7\/ZiclGBuhSN3E2CMX1.jpg","x":"46"},"899":{"id":"899","u":"份","s":"14","c":["46"],"p":"6.50","n":"红烧鸭块","i":"\/attachment\/alycms\/www\/2017\/12\/dlAfmH5gPGkCCwZI1.jpg","x":"162"},"847":{"id":"847","u":"份","s":"155","c":["46"],"p":"7.50","n":"盐酥鸡","i":"\/attachment\/alycms\/www\/2017\/7\/k37x1pZ98noyLudx1.jpg","x":"110"}}';
//2017-12-19
//$data = '{"781":{"id":"781","u":"份","s":"48","c":["46"],"p":"4.50","n":"香辣土豆丁","x":"44","i":"/attachment/alycms/www/2017/8/1FdatF1H5h2zpEOp1.jpg"},"806":{"id":"806","u":"份","s":"45","c":["46"],"p":"5.00","n":"东北酸菜炖粉条","x":"69","i":"/attachment/alycms/www/2017/12/mM6rnoGYwFkeJLvX1.jpg"},"764":{"id":"764","u":"份","p":"6.50","n":"麻辣鸭块盖浇饭","x":"27","i":"/attachment/alycms/www/2017/7/GK44D0cjuLEC7TJo1.jpg"},"989":{"id":"989","u":"份","s":"80","c":["46"],"p":"5.00","n":"辣炒豆腐皮","x":"252","i":"/attachment/alycms/www/2017/7/0IQ6Aj7jua07BZQp1.jpg"},"783":{"id":"783","u":"份","s":"250","c":["46"],"p":"4.50","n":"酸辣土豆丝","x":"46","i":"/attachment/alycms/www/2017/7/ZiclGBuhSN3E2CMX1.jpg"},"1001":{"id":"1001","u":"份","s":"234","c":["46"],"p":"7.50","n":"鱼香肉丝","x":"264","i":"/attachment/alycms/www/2017/7/7ktQ1L5mtaBJND891.jpg"},"941":{"id":"941","u":"份","c":["46"],"p":"5.00","n":"炸杏鲍菇","x":"204","i":"/attachment/alycms/www/2017/12/j6qabbzoQKV4wcg01.jpg"},"1007":{"id":"1007","u":"份","s":"37","c":["46"],"p":"4.50","n":"芹菜炒肉","x":"270","i":"/attachment/alycms/www/2017/7/HZMlGhXTSeGdXTVf1.jpg"},"942":{"id":"942","u":"份","s":"294","c":["46"],"p":"4.50","n":"炒花菜","x":"205","i":"/attachment/alycms/www/2017/7/jhoTlWCIIYa8ircM1.jpg"},"761":{"id":"761","u":"份","s":"32","c":["46"],"p":"6.50","n":"烧溜鱼条","x":"24","i":"/attachment/alycms/www/2017/7/st7urclt2HKhGhJM1.jpg"},"1005":{"id":"1005","u":"份","s":"15","c":["46"],"p":"7.50","n":"土豆红烧肉","x":"268","i":"/attachment/alycms/www/2017/8/6kQWRY7XetKyA8DY1.jpg"},"863":{"id":"863","u":"份","s":"52","c":["46"],"p":"6.50","n":"宫爆鸡丁","x":"126","i":"/attachment/alycms/www/2017/7/nLhv7HvSeV9QPN201.jpg"},"847":{"id":"847","u":"份","s":"150","c":["46"],"p":"7.50","n":"盐酥鸡","x":"110","i":"/attachment/alycms/www/2017/7/k37x1pZ98noyLudx1.jpg"},"960":{"id":"960","u":"份","s":"12","c":["46"],"p":"6.50","n":"辣炒黑蛤","x":"223","i":"/attachment/alycms/www/2017/7/wW8fLmPCxkRM9aBB1.jpg"},"747":{"id":"747","u":"碗","s":"1555","c":["46"],"p":"1.50","n":"米饭（加盒）","x":"2","i":"/attachment/alycms/www/2017/7/pqNwaJSGPggik26F1-1.jpg"},"7971":{"id":"7971","u":"份","s":"27","c":["46"],"p":"7.50","n":"黑椒牛肉","x":"444","i":"/attachment/alycms/www/2017/10/AKjSTN5lDuJZzRGt1.jpg"},"884":{"id":"884","u":"份","s":"278","c":["46"],"p":"4.50","n":"白菜炖豆腐","x":"147","i":"/attachment/alycms/www/2017/9/9GsoPBeOwhGoTv6x1.jpg"},"885":{"id":"885","u":"份","c":["46"],"p":"4.50","n":"炸茄片","x":"148","i":"/attachment/alycms/www/2017/12/46S76tRiT4C1GEGb1.jpg"},"880":{"id":"880","u":"份","s":"98","c":["46"],"p":"5.00","n":"菠菜炒鸡蛋","x":"143","i":"/attachment/alycms/www/2017/7/6zpDp3dZmklvjaTC1.jpg"},"959":{"id":"959","u":"份","s":"60","c":["46"],"p":"4.50","n":"油菜炒木耳","x":"222","i":"/attachment/alycms/www/2017/9/ZFaVa0cbxfbEYhKY1.jpg"},"1856":{"id":"1856","u":"份","s":"31","c":["46"],"p":"7.50","n":"辣炒培根片","x":"222","i":"/attachment/alycms/www/2017/8/P54g7ZMFLZEdkxhW1.jpg"},"7076201":{"id":"7076201","u":"份","c":["46"],"p":"4.50","n":"烧冬瓜","x":"111","i":"/attachment/alycms/www/2017/12/9ps5y8D4oR31ojtu1.jpg"},"854":{"id":"854","u":"份","s":"118","c":["46"],"p":"5.00","n":"剁椒千页豆腐","x":"117","i":"/attachment/alycms/www/2017/7/4nQRLYF2SPamiP5e1.jpg"},"7076200":{"id":"7076200","u":"份","c":["46"],"p":"7.50","n":"椒香鸡柳","x":"111"},"1065":{"id":"1065","u":"份","s":"106","c":["46"],"p":"4.50","n":"鱼香藕片","x":"9","i":"/attachment/alycms/www/2017/7/oI6Zhwb63KPh1fLL1.jpeg"},"934":{"id":"934","u":"份","s":"97","c":["46"],"p":"6.50","n":"干煸火腿肠","x":"197","i":"/attachment/alycms/www/2017/12/BdYOfLQQFAChP2MI1.jpg"},"917":{"id":"917","u":"份","s":"337","c":["46"],"p":"5.50","n":"西红柿炒蛋","x":"180","i":"/attachment/alycms/www/2017/7/yKs4A0qg57Npt3AN1.jpg"},"938":{"id":"938","u":"份","s":"228","c":["46"],"p":"4.50","n":"干煸头菜","x":"201","i":"/attachment/alycms/www/2017/12/Slu4P0LROINLwCaA1.jpg"},"1022":{"id":"1022","u":"个","s":"621","c":["3"],"p":"0.70","n":"花卷（1个）","x":"2","i":"/attachment/alycms/www/2017/7/pUVAt8196NXMDuWQ1.jpg"},"738":{"id":"738","u":"个","s":"2686","c":["46"],"p":"0.60","n":"馒头","x":"1","i":"/attachment/alycms/www/2017/7/Ro1fDV7h4W7WPbEX1-1.jpg"},"7076199":{"id":"7076199","u":"份","c":["46"],"p":"7.50","n":"炸鲳鱼","x":"111","i":"/attachment/alycms/www/2017/12/J8mZs5FxAAG19Lic1.jpg"}}';
//2017-12-18
//$data = '{"747":{"id":"747","u":"碗","s":"1555","c":["46"],"p":"1.50","n":"米饭（加盒）","i":"\/attachment\/alycms\/www\/2017\/7\/pqNwaJSGPggik26F1-1.jpg","x":"2"},"880":{"id":"880","u":"份","s":"98","c":["46"],"p":"5.00","n":"菠菜炒鸡蛋","i":"\/attachment\/alycms\/www\/2017\/7\/6zpDp3dZmklvjaTC1.jpg","x":"143"},"959":{"id":"959","u":"份","s":"60","c":["46"],"p":"4.50","n":"油菜炒木耳","i":"\/attachment\/alycms\/www\/2017\/9\/ZFaVa0cbxfbEYhKY1.jpg","x":"222"},"885":{"id":"885","u":"份","c":["46"],"p":"4.50","n":"炸茄片","i":"\/attachment\/alycms\/www\/2017\/12\/46S76tRiT4C1GEGb1.jpg","x":"148"},"884":{"id":"884","u":"份","s":"278","c":["46"],"p":"4.50","n":"白菜炖豆腐","i":"\/attachment\/alycms\/www\/2017\/9\/9GsoPBeOwhGoTv6x1.jpg","x":"147"},"738":{"id":"738","u":"个","s":"2686","c":["46"],"p":"0.60","n":"馒头","i":"\/attachment\/alycms\/www\/2017\/7\/Ro1fDV7h4W7WPbEX1-1.jpg","x":"1"},"941":{"id":"941","u":"份","c":["46"],"p":"5.00","n":"炸杏鲍菇","i":"\/attachment\/alycms\/www\/2017\/12\/j6qabbzoQKV4wcg01.jpg","x":"204"},"1001":{"id":"1001","u":"份","s":"234","c":["46"],"p":"7.50","n":"鱼香肉丝","i":"\/attachment\/alycms\/www\/2017\/7\/7ktQ1L5mtaBJND891.jpg","x":"264"},"7076201":{"id":"7076201","u":"份","c":["46"],"p":"4.50","n":"烧冬瓜","i":"\/attachment\/alycms\/www\/2017\/12\/9ps5y8D4oR31ojtu1.jpg","x":"111"},"806":{"id":"806","u":"份","s":"45","c":["46"],"p":"5.00","n":"东北酸菜炖粉条","i":"\/attachment\/alycms\/www\/2017\/12\/mM6rnoGYwFkeJLvX1.jpg","x":"69"},"7076200":{"id":"7076200","u":"份","c":["46"],"p":"7.50","n":"椒香鸡柳","x":"111"},"761":{"id":"761","u":"份","s":"32","c":["46"],"p":"6.50","n":"烧溜鱼条","i":"\/attachment\/alycms\/www\/2017\/7\/st7urclt2HKhGhJM1.jpg","x":"24"},"942":{"id":"942","u":"份","s":"294","c":["46"],"p":"4.50","n":"炒花菜","i":"\/attachment\/alycms\/www\/2017\/7\/jhoTlWCIIYa8ircM1.jpg","x":"205"},"1005":{"id":"1005","u":"份","s":"15","c":["46"],"p":"7.50","n":"土豆红烧肉","i":"\/attachment\/alycms\/www\/2017\/8\/6kQWRY7XetKyA8DY1.jpg","x":"268"},"764":{"id":"764","u":"份","p":"6.50","n":"麻辣鸭块盖浇饭","i":"\/attachment\/alycms\/www\/2017\/7\/GK44D0cjuLEC7TJo1.jpg","x":"27"},"1007":{"id":"1007","u":"份","s":"37","c":["46"],"p":"4.50","n":"芹菜炒肉","i":"\/attachment\/alycms\/www\/2017\/7\/HZMlGhXTSeGdXTVf1.jpg","x":"270"},"938":{"id":"938","u":"份","s":"228","c":["46"],"p":"4.50","n":"干煸头菜","i":"\/attachment\/alycms\/www\/2017\/12\/Slu4P0LROINLwCaA1.jpg","x":"201"},"934":{"id":"934","u":"份","s":"97","c":["46"],"p":"6.50","n":"干煸火腿肠","i":"\/attachment\/alycms\/www\/2017\/12\/BdYOfLQQFAChP2MI1.jpg","x":"197"},"7076199":{"id":"7076199","u":"份","c":["46"],"p":"7.50","n":"炸鲳鱼","i":"\/attachment\/alycms\/www\/2017\/12\/J8mZs5FxAAG19Lic1.jpg","x":"111"},"1065":{"id":"1065","u":"份","s":"106","c":["46"],"p":"4.50","n":"鱼香藕片","i":"\/attachment\/alycms\/www\/2017\/7\/oI6Zhwb63KPh1fLL1.jpeg","x":"9"},"854":{"id":"854","u":"份","s":"118","c":["46"],"p":"5.00","n":"剁椒千页豆腐","i":"\/attachment\/alycms\/www\/2017\/7\/4nQRLYF2SPamiP5e1.jpg","x":"117"},"989":{"id":"989","u":"份","s":"80","c":["46"],"p":"5.00","n":"辣炒豆腐皮","i":"\/attachment\/alycms\/www\/2017\/7\/0IQ6Aj7jua07BZQp1.jpg","x":"252"},"917":{"id":"917","u":"份","s":"337","c":["46"],"p":"5.50","n":"西红柿炒蛋","i":"\/attachment\/alycms\/www\/2017\/7\/yKs4A0qg57Npt3AN1.jpg","x":"180"},"863":{"id":"863","u":"份","s":"52","c":["46"],"p":"6.50","n":"宫爆鸡丁","i":"\/attachment\/alycms\/www\/2017\/7\/nLhv7HvSeV9QPN201.jpg","x":"126"},"7971":{"id":"7971","u":"份","s":"27","c":["46"],"p":"7.50","n":"黑椒牛肉","i":"\/attachment\/alycms\/www\/2017\/10\/AKjSTN5lDuJZzRGt1.jpg","x":"444"},"783":{"id":"783","u":"份","s":"250","c":["46"],"p":"4.50","n":"酸辣土豆丝","i":"\/attachment\/alycms\/www\/2017\/7\/ZiclGBuhSN3E2CMX1.jpg","x":"46"},"1856":{"id":"1856","u":"份","s":"31","c":["46"],"p":"7.50","n":"辣炒培根片","i":"\/attachment\/alycms\/www\/2017\/8\/P54g7ZMFLZEdkxhW1.jpg","x":"222"},"781":{"id":"781","u":"份","s":"48","c":["46"],"p":"4.50","n":"香辣土豆丁","i":"\/attachment\/alycms\/www\/2017\/8\/1FdatF1H5h2zpEOp1.jpg","x":"44"},"960":{"id":"960","u":"份","s":"12","c":["46"],"p":"6.50","n":"辣炒黑蛤","i":"\/attachment\/alycms\/www\/2017\/7\/wW8fLmPCxkRM9aBB1.jpg","x":"223"},"847":{"id":"847","u":"份","s":"150","c":["46"],"p":"7.50","n":"盐酥鸡","i":"\/attachment\/alycms\/www\/2017\/7\/k37x1pZ98noyLudx1.jpg","x":"110"}}';
$dataJson = json_decode($data);
$result = true;
$oper_time = date('Y-m-d H:i:s');
$result_g = $mydb->query('SELECT * from i_goods_info where date_format(oper_time,"%Y-%m-%d")= '.date('Y-m-d'));
if(!empty($result_g))
{
	$result_d = $mydb->query('DELETE from i_goods_info where date_format(oper_time,"%Y-%m-%d")= '.date('Y-m-d'));
	if($result_d)
	{
		echo "old data delete succeed!";
	}
	else
	{
		echo $mydb->error;
		echo "old data delete failed!";
		return;
	}
}
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
    echo "data input succeed!";
}
else
{
    echo "data input fail!";
}
$mydb->close();
?>
