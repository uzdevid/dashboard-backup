<?php

declare(strict_types=1);

namespace Tests\Support;

/**
 * Inherited Methods
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
 */
class AcceptanceTester extends \Codeception\Actor {
    use _generated\AcceptanceTesterActions;

    public function login($email, $password) {
        $I = $this;

        if ($I->loadSessionSnapshot('login')) {
            return;
        }

        $I->amOnPage('/login');
        $I->submitForm('#login-form', [
            'LoginForm[email]' => $email,
            'LoginForm[password]' => $password,
        ]);

        $I->wait(1);
        $I->see('Panel', '#main h1');
        $I->saveSessionSnapshot('login');
    }
}
