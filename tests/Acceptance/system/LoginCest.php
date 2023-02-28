<?php

namespace Tests\Acceptance\system;

use Tests\Support\AcceptanceTester;

class LoginCest {
    /**
     * @param AcceptanceTester $I
     * @return void
     */
    public function _before(AcceptanceTester $I): void {
        $I->amOnPage('/en/login');
    }

    /**
     * @param AcceptanceTester $I
     * @return void
     */
    public function openLoginPage(AcceptanceTester $I): void {
        $I->seeElement('form#login-form');
        $I->see('Login', 'h5');
        $I->see('Enter your email and password to login');
    }

    /**
     * @param AcceptanceTester $I
     * @return void
     */
    public function loginWithEmptyCredentials(AcceptanceTester $I): void {
        $I->fillField('LoginForm[email]', '');
        $I->fillField('LoginForm[password]', '');

        $I->click('button[type=submit]');

        $I->wait(1);

        $I->see('Email cannot be blank.');
        $I->see('Password cannot be blank.');
    }

    /**
     * @param AcceptanceTester $I
     * @return void
     */
    public function loginSuccessfully(AcceptanceTester $I): void {
        $I->fillField('LoginForm[email]', 'admin@dashboard.uzdevid.uz');
        $I->fillField('LoginForm[password]', 'Admin1');

        $I->click('button[type=submit]');

        $I->wait(1);

        $I->see('Panel', 'h1');
    }
}
