<?php
	header('Content-Type: text/html; charset=utf-8');
				$check1 = $_POST['category'];
				if($check1 == 'Поздравления с новым годом'){
					$category = 'Поздравления с новым годом';
				}	
				else if($check1 == 'Грамота «за достижения'){
					$category = 'Грамота «за достижения';
				}
				else if($check1 == 'Поздравления с днем рождения'){
					$category = 'Поздравления с днем рождения';
				}
				else if($check1 == 'Письмо в подарке'){
					$category = 'Письмо в подарке';
				}
				else{
					echo '<br/>Error category';
				}
											$check2 = $_POST['type'];
											if($check2 == 'Традиционное'){
												$type = 'Традиционное';
											}
											else if($check2 == 'Христианское'){
												$type = 'Христианское';
											}
											else{
												echo "<br/>Error type";
											}
																		$lang = $_POST['language'];
																		if($lang == 'rus'){
																			$language = 'Русский';
																		}
																		else if($lang == 'ukr'){
																			$language = 'Украинский';
																		}
																		else{
																			echo "<br/>Error language";
																		}
																										$vari = $_POST['cardtext'];
																										if($vari == '1'){
																											$variant = '1';
																										}
																										else if($vari == '2'){
																											$variant = '2';
																										}
																										else if($vari == '3'){
																											$variant = '3';
																										}
																										else if($vari == '4'){
																											$variant = '4';
																										}
																										else if($vari == '5'){
																											$variant = '5';
																										}
																										else if($vari == '6'){
																											$variant = '6';
																										}
																										else{
																											echo "<br/>Error variant";
																										}

				$connection = mysqli_connect ('localhost','webloka','0503907366Kl','webloka_ded_moroz') or die ('Ошибка подключения к базе данных');
				$receiver_name = $_POST['receiver_name'];
				$congratulator = $_POST['congratulator'];
				$number = $_POST['number'];
				$mail = $_POST['mail'];
				$city = $_POST['city'];
				$mail_index = $_POST['mail_index'];
				$comments = $_POST['comments'];
				$result = mysqli_query ($connection, "INSERT INTO `webloka_ded_moroz`.`orders` (`id`, `category`, `type`, `receiver_name`, `congratulator`, `number`, `mail`, `city`, `language`, `variant`, `mail_index`, `comments`,`+/-`) VALUES (NULL, '$category', '$type', '$receiver_name', '$congratulator', '$number', '$mail', '$city', '$language', '$variant', '$mail_index', '$comments', NULL)");
				if($result == 'true'){
					echo "<br/>Ваши данные успешно добавлены";
					$message = "Сообщение";
					$to = "$mail";
					$subject = "Тема сообщения";
					$subject = "=?UTF-8?B?".base64_encode($subject)."?=";
					$from = "pochta.moroza.ua@gmail.com";
					$headers = "From: $from\r\nReply-to: $From\r\nContent-type: text/plain; charset=UTF-8\r\n";
					mail ($to,$subject,$message,$headers);
				}
				else{
					echo "<br/>Произошла ошибка";
				}	
	mysqli_close($connection);
?>