<?php

namespace Test\Unit\system;

use app\models\system\User as RealUser;
use Codeception\Test\Unit;

class User extends Unit {
    /**
     * @return void
     */
    public function testFindUserById(): void {
        expect($user = RealUser::findIdentity(1))->notToBeNull();
        expect($user->email)->toBe('admin@dashboard.uzdevid.uz');

        expect(RealUser::findIdentity(999))->toBeNull();
    }

    /**
     * @return void
     */
    public function testFindUserByAccessToken(): void {
        expect($user = RealUser::findIdentityByAccessToken('qjbmB5aKTaU6J39h7HgWUz4PoMqiTpUP'))->notToBeNull();
        expect($user->email)->toBe('admin@dashboard.uzdevid.uz');

        expect(RealUser::findIdentityByAccessToken('non-existing'))->toBeNull();
    }

    /**
     * @return void
     */
    public function testFindUserByEmail(): void {
        expect($user = RealUser::findByEmail('admin@dashboard.uzdevid.uz'))->notToBeNull();
        expect(RealUser::findByEmail('not-admin'))->toBeNull();
    }

    /**
     * @return void
     */
    public function testValidation(): void {
        $user = new RealUser();

        $user->name = null;
        expect($user->validate(['name']))->toBe(false);

        $user->name = 'admin';
        expect($user->validate(['name']))->toBe(true);

        $user->surname = null;
        expect($user->validate(['surname']))->toBe(false);

        $user->surname = 'admin';
        expect($user->validate(['surname']))->toBe(true);

        $user->email = null;
        expect($user->validate(['email']))->toBe(false);

        $user->email = 'admin@dashboard.uzdevid.uz';
        expect($user->validate(['email']))->toBe(false);

        $user->email = 'test@dashboard.uzdevid.uz';
        expect($user->validate(['email']))->toBe(true);

        $user->password = 'Admin1';
        expect($user->validate(['password']))->toBe(true);
    }
}
