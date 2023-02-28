<?php

namespace Tests\Acceptance\system;

use Tests\Support\AcceptanceTester;

class PanelCest {
    /**
     * @param AcceptanceTester $I
     * @return void
     */
    public function _before(AcceptanceTester $I): void {
        $I->login('admin@dashboard.uzdevid.uz', 'Admin1');
    }


    /**
     * @param AcceptanceTester $I
     * @return void
     */
    public function openPanelPage(AcceptanceTester $I): void {
        $I->wait(1);

        $I->seeInCurrentUrl('/');

        $I->see('Panel', '#main h1');
    }
}
