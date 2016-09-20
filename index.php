<?php 
session_start();

require_once('config.php');

$helper = $fb->getRedirectLoginHelper();

$loginUrl = $helper->getLoginUrl('http://go.reu.gt/sendpost.php');

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';