<?php 

class FirstCest
{
    public function homepageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Welcome');
    }
}
