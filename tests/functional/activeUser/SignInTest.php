<?php

use InitBiz\Selenium2Tests\Classes\Ui2TestCase;

class SignInTest extends Ui2TestCase {

    use CumulusDataProviders,
        CumulusHelpers,
        OctoberSeleniumHelpers;
    /**
     * @test *
     * @dataProvider providerUserData
     * * @return void
     */
    public function active_user_can_sign_in($data)
    {
        $this->signInToBackend()
            ->createUser($data)
            ->activateUser($data['email'])
            ->singInToFrontend($data)
            ->seePageIs('/system/choose-company');

    }
}