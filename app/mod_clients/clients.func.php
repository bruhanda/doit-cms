<?php//контроллерclass clients_controller {	public  $value="Проверка";	function index()	{		d()->clients  = d()->Client->all;		print d()->call('abc','def','clients#test','ghj');	}		function show()	{		d()->Client->find(url(2))->expand_to_client;	}	function edit()	{			action('clients#update');		action('mailer');		d()->Client->find(url(2))->expand_to_client;	}	function test()	{		print "!";	}	function update($params)	{		print 2+7;		var_dump($params);		exit;	/*		$client = d()->Client->new;		$client->set_attributes($_POST['clients']);		*/	}	function action_update($params)	{			}}function abc(){	print "тратратра ";}function def(){	print " попмпомпом ";}function ghj(){	print " ляляля ";}function action_clients_edit(){	print "Ура! мы увидели POST данные и теперь мы выполняемся!";}function mailer($params){	print  "А вот тут отпарвка емейл апо адресу ".d()->adminemail.' и редирект';	exit();}