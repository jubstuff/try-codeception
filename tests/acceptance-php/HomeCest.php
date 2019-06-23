    <?php 

class HomeCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function homePageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('This is a test to try Codeception');
        // This assertion would fail, because PHPBrowser doesn't render JS
        // $I->see('This is JS generated');
    }
}
