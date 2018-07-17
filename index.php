<?php
	require('EPTTAvmLibrary.php');

	$EPTT = new EPTTAvm();
	$EPTT->__setOptions('{username}','{password}',array('debug' => false,'showerrors' => true));

	echo "<pre>";
	var_dump($EPTT->StokKontrolListesi(280));

