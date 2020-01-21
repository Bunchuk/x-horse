<?php
    $db_host = 'localhost';
    $db_db = 'crm';
    $db_user = 'crm';
    $db_password = '9gcmHzTy';
    $db = mysql_connect($db_host, $db_user, $db_password);

    mysql_set_charset('utf8', $db);
    mysql_select_db($db_db);


    $order_id = (int)validatePost($_POST['order_id']);
    if(!empty($_POST['main_product'])){

        $q = "SELECT main_product_id, main_product_price FROM upsell_pages WHERE site = '" . $_SERVER['SERVER_NAME'] . "'";
        $res =  mysql_query($q);
        $row = mysql_fetch_assoc($res);
        addProductToOrder($order_id, $row['main_product_id'], $row['main_product_price']);

    }elseif(!empty($_POST['order_set'])){

        $q = "SELECT * FROM upsell_set WHERE page_id = (SELECT id FROM upsell_pages WHERE site = '" . $_SERVER['SERVER_NAME'] . "')";
        $res =  mysql_query($q);
        while($row = mysql_fetch_assoc($res)){
            addProductToOrder($order_id, $row['product_id'], $row['product_price']);
        }

    }else{

        $product_id = (int)validatePost($_POST['product_id']);

        $q = "SELECT product_price FROM upsell_products 
              WHERE product_id = $product_id
                  AND page_id = (SELECT id FROM upsell_pages WHERE site = '" . $_SERVER['SERVER_NAME'] . "')
        ";
        $res =  mysql_query($q);
        $row = mysql_fetch_assoc($res);
        $product_price = $row['product_price'];

        addProductToOrder($order_id, $product_id, $product_price);
    }



    function addProductToOrder($order_id, $product_id, $product_price){
        $q = "SELECT * FROM order_items WHERE product_id = $product_id AND order_id = $order_id";
        $res =  mysql_query($q);

        if(mysql_num_rows($res)){
            $row = mysql_fetch_assoc($res);
            $quantity = $row['quantity'] + 1;
            $price = round(($product_price + ($quantity - 1) * $row['product_price']) / $quantity);
            
            $q = "UPDATE order_items SET quantity = $quantity, product_price = $price WHERE id = " . $row['id'];
        }else{
            $q = "INSERT INTO order_items
                  (order_id, product_id, product_name, quantity, product_price)
                  VALUES
                  (
                      $order_id, 
                      $product_id, 
                      (SELECT product_name FROM products WHERE product_id = $product_id), 
                      1, 
                      $product_price
                  )
            ";
        }
        mysql_query($q);
    }

    function validatePost($word){
        $word = trim($word);
        $word = strip_tags($word);
        $word = htmlspecialchars($word);
        $word = mysql_real_escape_string($word);
        return $word;
    }

?>