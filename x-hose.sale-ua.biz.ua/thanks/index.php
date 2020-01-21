<?php
session_start();
$db_host = 'localhost';
$db_db = 'crm';
$db_user = 'crm';
$db_password = '9gcmHzTy';
$db = mysql_connect($db_host, $db_user, $db_password);

if (!$db){
    echo "<h2>MySQL Error!</h2>";
    exit;
}

mysql_set_charset('utf8', $db);
mysql_select_db($db_db);

$q = "SELECT * FROM upsell_pages WHERE site = '" . $_SERVER['SERVER_NAME'] . "'";
$result = mysql_query($q);
$row = mysql_fetch_assoc($result);

if(!empty($row['main_product_id'])){
    $q = "SELECT * FROM products WHERE product_id = " . $row['main_product_id'];
    $result_main_product = mysql_query($q);
    $main_product = mysql_fetch_assoc($result_main_product);
}

$set = array();
$q = "SELECT *, u.product_price, product_name, upsell_name, img, upsell_img FROM upsell_set u
      INNER JOIN products p ON u.product_id = p.product_id
      WHERE page_id = " . $row['id'] . "
";
$result = mysql_query($q);
while($row_set = mysql_fetch_assoc($result)){
    $set[$row_set['ordering']]['product_id'] = $row_set['product_id'];
    $set[$row_set['ordering']]['product_price'] = $row_set['product_price'];
    $set[$row_set['ordering']]['old_price'] = $row_set['old_price'];
    $set[$row_set['ordering']]['product_name'] = $row_set['product_name'];
    $set[$row_set['ordering']]['upsell_name'] = $row_set['upsell_name'];
    $set[$row_set['ordering']]['img'] = $row_set['img'];
    $set[$row_set['ordering']]['upsell_img'] = $row_set['upsell_img'];
}

$q ="SELECT *, u.product_price, product_name, upsell_name, img FROM upsell_products u
      INNER JOIN products p ON u.product_id = p.product_id
      WHERE page_id = " . $row['id'] . "
      ORDER by ORDERING
";
$products = mysql_query($q);

$curr_order_id = (int)$_SESSION['curr_order_id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Upsell</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33990449-24"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-33990449-24');
</script>
<div class="container-fluid">
    <div class="col-md-12 page_block">
        <div class="left hidden-sm hidden-xs"><span>Прокрутите вниз!</span></div>
        <div class="right hidden-sm hidden-xs"><span>Посмотрите, что внизу!</span></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?=$row['text_head']?>
                    <hr>
                </div>
            </div>
            <?php if(!empty($row['main_product'])){?>
                <div class="row">
                    <div class="col-md-12">
                        <?=$row['h1']?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="https://crm.top-sell.co.ua/<?=$main_product['img']?>" class="fancybox">
                            <img src="https://crm.top-sell.co.ua/<?=$main_product['img']?>" style="margin-top: 45px;" class="img-responsive" />
                        </a>
                        <br />
                        <div class="price">
                            <span class="new"><?=$row['main_product_price']?> грн.</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <?=$row['main_parameters']?>
                        <div id="countdown_dashboard">
                            <div class="dash hours_dash">
                                <div class="digit"></div>
                                <div class="digit"></div>
                                <span class="dash_title">часы</span>
                            </div>
                            <div class="dash minutes_dash">
                                <div class="digit"></div>
                                <div class="digit"></div>
                                <span class="dash_title">минуты</span>
                            </div>
                            <div class="dash seconds_dash">
                                <div class="digit"></div>
                                <div class="digit"></div>
                                <span class="dash_title">секунды</span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <?=$row['main_text']?>
                        <a href="#" class="order-button main_product" data-order_id="<?=$curr_order_id?>">Добавить в посылку!</a>
                    </div>
                </div>
                <hr>
            <?php } ?>

            <?php if(!empty($row['page_set'])){?>
                <div class="row">
                    <div class="col-md-12">
                        <?=$row['set_h']?>
                    </div>
                </div>
                <div class="row action">
                    <?php
                        $set_old_price = $set_price = 0;
                    ?>
                    <?php for($i = 1; $i <=3; $i++){?>
                        <?php if(!empty($set[$i])){?>
                            <div class="col-md-3 col-sm-6 item">
                                <?php
                                    if(!empty($set[$i]['upsell_img'])){
                                        $img = $set[$i]['upsell_img'];
                                    }else{
                                        $img = $set[$i]['img'];
                                    }

                                    $set_price += $set[$i]['product_price'];
                                    $set_old_price += $set[$i]['old_price'];
                                ?>
                                <a href="https://crm.top-sell.co.ua<?=$img?>" class="fancybox"><img src="https://crm.top-sell.co.ua<?=$img?>" class="img-responsive"></a>
                                <div class="price">
                                    <?php if(!empty($set[$i]['old_price'])){?><span class="old"><?=$set[$i]['old_price']?> грн.</span><?php } ?>
                                    <span class="new"><?=$set[$i]['product_price']?> грн.</span>
                                </div>
                                <?php if($i != 3){?><span class="plus hidden-sm hidden-xs">+</span><?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <div class="col-md-3 col-sm-6 item">
                        <div class="price all">
                            <p>Старая цена: <?=$set_old_price?> грн.</p>
                            <p class="red"><strong>ИТОГО: <?=$set_price?> грн.</strong></p>
                            <p>Вы экономите: <?=($set_old_price - $set_price)?> грн.</p>
                        </div>
                        <a href="#" class="order-button order_set" data-order_id="<?=$curr_order_id?>">Добавить в посылку!</a>
                    </div>
                </div>
                <hr>
            <?php } ?>

            <div class="row">
                <div class="col-md-12">
                    <h2 class="uppercase"><strong>C этим товаром еще покупают:</strong></h2>
                </div>
            </div>

            <div class="row">
                <?php while($row = mysql_fetch_array($products)){?>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>
                                <?php
                                    if(!empty($row['upsell_name'])){
                                        echo $row['upsell_name'];
                                    }else {
                                        echo $row['product_name'];
                                    }
                                ?>
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                            if(!empty($row['upsell_img'])){
                                $img = $row['upsell_img'];
                            }else {
                                $img = $row['img'];
                            }
                        ?>
                        <a href="https://crm.top-sell.co.ua<?=$img?>" class="fancybox">
                            <img src="https://crm.top-sell.co.ua<?=$img?>" class="img" />
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="price">
                                <?php if(!empty($row['old_price'])){ ?><span class="old"><?=$row['old_price']?> грн.</span><?php } ?>
                                <span class="new"><?=$row['product_price']?> грн.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="#" data-order_id="<?=$curr_order_id?>" data-product_id="<?=$row['product_id']?>" class="order-button">Добавить в посылку!</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/script.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117804514-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117804514-5');
</script>


<!— Yandex.Metrika counter —>
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48996851 = new Ya.Metrika({
                    id:48996851,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48996851" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!— /Yandex.Metrika counter —>

</body>
</html>
