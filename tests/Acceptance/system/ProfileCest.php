<?php

namespace Tests\Acceptance\system;

use Tests\Support\AcceptanceTester;

class ProfileCest {
    public $module = null;

    /**
     * @param AcceptanceTester $I
     * @return void
     */
    public function _before(AcceptanceTester $I): void {
        $I->login('admin@dashboard.uzdevid.uz', 'Admin1');

        $I->amOnPage('/en/system/profile');

        $I->wait(1);
    }

    /**
     * @param AcceptanceTester $I
     * @return void
     */
    public function openProfilePage(AcceptanceTester $I): void {
        $I->seeInCurrentUrl('/en/system/profile');

        $I->see('Profile', '#main h1');
    }

    public function updateProfile(AcceptanceTester $I): void {
        $I->seeInCurrentUrl('/en/system/profile');

        $I->fillField('User[surname]', 'Surname');
        $I->fillField('User[name]', 'Name');
        $I->fillField('User[email]', 'admin@dashboard.uzdevid.uz');

        $I->click('#profile-form button[type=submit]');

        $I->wait(1);

        $I->seeInField('User[surname]', 'Surname');
        $I->seeInField('User[name]', 'Name');
        $I->seeInField('User[email]', 'admin@dashboard.uzdevid.uz');
    }

    public function updatePassword(AcceptanceTester $I): void {
        $I->seeInCurrentUrl('/en/system/profile');

        $I->fillField('User[new_password]', 'Admin1');

        $I->click('#reset-password-form button[type=submit]');
    }

    public function updateProfileWithEmptyFields(AcceptanceTester $I): void {
        $I->seeInCurrentUrl('/en/system/profile');

        $I->fillField('User[surname]', '');
        $I->fillField('User[name]', '');
        $I->fillField('User[email]', '');

        $I->click('#profile-form button[type=submit]');

        $I->wait(1);

        $I->see('Surname cannot be blank.');
        $I->see('Name cannot be blank.');
        $I->see('Email cannot be blank.');
    }

    public function updatePasswordWithEmptyFields(AcceptanceTester $I): void {
        $I->seeInCurrentUrl('/en/system/profile');

        $I->fillField('User[new_password]', '');

        $I->click('#reset-password-form button[type=submit]');

        $I->wait(1);

        $I->see('New password cannot be blank.');
    }

    public function updateProfileWithInvalidEmail(AcceptanceTester $I): void {
        $I->seeInCurrentUrl('/en/system/profile');

        $I->fillField('User[email]', 'admin');

        $I->click('#profile-form button[type=submit]');

        $I->wait(1);

        $I->see('Email is not a valid email address.');
    }

    public function updatePasswordWithInvalidPassword(AcceptanceTester $I): void {
        $I->seeInCurrentUrl('/en/system/profile');

        $I->fillField('User[new_password]', 'Admin');

        $I->click('#reset-password-form button[type=submit]');

        $I->wait(1);

        $I->see('New password should contain at least 6 characters.');
    }

    /**
     * @param AcceptanceTester $I
     * @return void
     */
    public function createContact(AcceptanceTester $I): void {
        $I->seeInCurrentUrl('/en/system/profile');

        $I->click('Create Contact');

        $I->wait(2);

        $I->selectOption('Contact[type]', 'email');
        $I->fillField('Contact[contact]', 'email@google.com');

        $I->click('#contact-create-form button[type=submit]');
    }

}