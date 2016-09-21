<?php 
session_start();

require_once('config.php');


$helper = $fb->getRedirectLoginHelper();

    try {
        $accessToken = $helper->getAccessToken();
        $linkData = [
            'link' => 'http://go.reu.gt',
            'message' => "Hola Mundo",
        ];
        $fb->post('/feed', $linkData, $accessToken);
        header("Location: index.php");
        
    } catch (Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
    }