<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('create translate words quiz and solve it');

$I->wantTo('have main page');

$I->amOnPage('/');
$I->see('LanguageApp');
$I->see('Login');
$I->see('Register');

$I->amGoingTo('Login');
$I->click('Login');
$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret123');
$I->click('#login_button');

$I->amOnPage("/");

$I->click("CREATE QUIZ" );

$I->seeInCurrentUrl("/quiz/create");
$I->selectOption('quizType','Translate words');

$I->seeInCurrentUrl("/quiz/create/translate_words");

/*
$id = "1";
$name = "John";
$surname = "Doe";
$email = "john.doe@example.com";
$password = "john123";
$password_confirmation = "john123";

$I->fillField("id", $id);
$I->fillField("name", $name);
$I->fillField("surname", $surname);
$I->fillField("email", $email);
$I->fillField("password", $password);
$I->fillField("password_confirmation", $password);

$I->dontSeeInDatabase("objects", ["key" => "model_user_1"]);

$I->click("Create");

$I->seeInDatabase("objects", ["key" => "model_user_1"]);

$data = $I->grabFromDatabase("objects", "data", ["key" => "model_user_1"]);
$user = unserialize($data);

$I->assertEquals($id, $user->id());
$I->assertEquals($name, $user->name);
$I->assertEquals($surname, $user->surname);
$I->assertEquals($email, $user->email);
$I->assertFalse($user->confirmed);

$I->amGoingTo("make sure that password was securely hashed");

$I->assertTrue(password_verify($password, $user->password));

$I->amGoingTo("check that email confirmation token was generated");
$I->comment("token should be randomly generated hexadecimal value");

$I->assertNotEmpty($user->token);
$I->assertEquals(32, strlen($user->token));
$I->assertTrue(ctype_xdigit($user->token));

$I->amGoingTo("check redirection to confirmation notice page");

$I->seeCurrentUrlEquals("/auth/confirmation_notice");
$I->seeInTitle("Confirmation notice");
$I->see("Please confirm user registration...", "h2");
*/
