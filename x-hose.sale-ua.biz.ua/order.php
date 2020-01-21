<?php


    $db_host = 'localhost';
    $db_db = 'crm';
    $db_user = 'crm';
    $db_password = '9gcmHzTy';

    $db = mysql_connect($db_host, $db_user, $db_password);

    mysql_set_charset('utf8', $db);
    mysql_select_db($db_db);


    if(isset($name)) $buyer_name = validatePost($name);
    if(isset($phone)) $buyer_phone = validatePost($phone);
    if(isset($addres)) $address = validatePost($addres);
    if(isset($product_id)){
        $product_id = $product_id;
    }else{
        $product_id = NULL;
    }
    $ip = $_SERVER["REMOTE_ADDR"];

    $q = "INSERT INTO orders (buyer_name,buyer_phone,payment_status,created_on,modified_on,status,ip) VALUES ('$buyer_name','$buyer_phone','Ожидается',NOW(),NOW(),'Новый','$ip')";
    mysql_query($q);  

    $q = "SELECT MAX(order_id) FROM orders";
    $result = mysql_query($q);
    $or_id = mysql_fetch_row($result);
    $curr_order_id = $or_id[0];

    $q = "SELECT * FROM products WHERE product_id = $product_id";
    $result = mysql_query($q);
    $row = mysql_fetch_row($result);

    $q = "INSERT INTO order_items (order_id, product_id, product_name, product_price) SELECT MAX(order_id), $product_id, '$row[1]', '$row[2]' FROM orders";
    mysql_query($q);

    //++UTM++
    if(count($utm)){

        extract($utm);
        $site = $_SERVER['SERVER_NAME'];

        $q = "INSERT INTO utm (order_id, utm_source, utm_medium, utm_campaign, utm_term, utm_content, created_on, site) 
              VALUES ($curr_order_id, '$utm_source', '$utm_medium', '$utm_campaign', '$utm_term', '$utm_content', NOW(), '$site')
        ";
        mysql_query($q);

        $q = "UPDATE orders SET utm = (SELECT MAX(id) FROM utm) WHERE order_id = $curr_order_id";
        mysql_query($q);  

    }
    //+++++++

    function validatePost($word){
        $word = trim($word);
        $word = strip_tags($word);
        $word = htmlspecialchars($word);
        $word = mysql_real_escape_string($word);
        return $word;
    }

?>