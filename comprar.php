<?php
    session_start();
    // print_r($_SESSION['carrito']);
    if (isset($_POST['Enviar'])){
        $descripcion = "";
        $precio = 0;
        for ($i = 0; $i < count($_SESSION['carrito']); $i++){
            $descripcion .= $_SESSION['carrito'][$i]['descripcion'];
            $precio += $_SESSION['carrito'][$i]['precio'];
            if ($i + 1 < count($_SESSION['carrito'])){
                $descripcion .= " / ";
            }
        }
        if(strlen($descripcion) < 225){
            $descripcion = $descripcion . "(precio dividido en 100)";
        }else{
            $descripcion ="Compra Aromahuerta";
        }
        // print_r($descripcion);
        // print_r($precio);
    
    
        $receiverId = 340629;
        $secretKey = 'e1119cf7b5118ef7a52726a235c7136c98f48a4a';

        require __DIR__ . '/vendor/autoload.php';

        $configuration = new Khipu\Configuration();
        $configuration->setReceiverId($receiverId);
        $configuration->setSecret($secretKey);
        // $configuration->setDebug(true);

        $client = new Khipu\ApiClient($configuration);
        $payments = new Khipu\Client\PaymentsApi($client);

        try {
            $opts = array(
                "transaction_id" => "compra pulenta",
                "return_url" => "./exito.php",
                "cancel_url" => "./fallo.php",
                "picture_url" => "http://mi-ecomerce.com/pictures/foto-producto.jpg",
                "notify_url" => "http://mi-ecomerce.com/backend/notify",
                "notify_api_version" => "1.3"
            );
            $response = $payments->paymentsPost(
                $descripcion, //Motivo de la compra
                "CLP", //Monedas disponibles CLP, USD, ARS, BOB
                $precio * .01, //Monto. Puede contener ","
                $opts //campos opcionales
        );

            // print_r($response);
        } catch (\Khipu\ApiException $e) {
            echo print_r($e->getResponseBody(), TRUE);
        }
        header("Location:" .$response['payment_url']);
    } 
    else 
    {
        header("Location: /carro.php");
    }