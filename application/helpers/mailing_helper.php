<?php
function mailConfig(){
	$ci = & get_instance();
	$config['smtp_host']=$ci->config->item('smtp_host');
	$config['smtp_port']='25';//instead of 465
	$config['protocol']='smtp';
	$config['mailtype']='html';
	return $config;
}