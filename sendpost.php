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
        
    } catch (Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
    }