<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class PayGradeTest extends \TestCase
{
    use DatabaseTransactions;

    public function testDeletePayGradePositive()
    {
        $this->testUpdatePayGradePositive();

        $id = $this->onPage('/admin/job/pay-grades')
            ->see('Tested')->filterByNameOrId("edit", 'button')->first()->attr('id');

        $_token = $this->onPage('/admin/job/pay-grades')
            ->see('Tested')->filterByNameOrId("_token", 'input')->attr('value');

        $this->post('/ajax/delete-pay-grade', ['id' => $id, '_token' => $_token, '_method' => 'DELETE']);

        $this->dontSee('Tested');
    }

    public function testUpdatePayGradePositive()
    {
        $this->testAddPayGradePositive();

        $id = $this->onPage('/admin/job/pay-grades')->filterByNameOrId("edit", 'button')->first()->attr('id');

        $this->click('Pay Grades')
            ->onPage('/admin/job/pay-grades')
            ->type('Tested', 'name')
            ->type('020000', 'min_salary')
            ->type('030000', 'max_salary')
            ->type($id, 'pay_grade_id')
            ->type('PATCH', '_method')
            ->press('Save changes');

        $this->onPage('/admin/job/pay-grades')
            ->see('Record successfully updated.')
            ->see('Tested');
    }

    public function testAddPayGradePositive()
    {
        $this->logMeIn();

        $this->click('Pay Grades')
            ->onPage('/admin/job/pay-grades')
            ->see('Add a new row')
            ->type('Test', 'name')
            ->type('010000', 'min_salary')
            ->type('020000', 'max_salary')
            ->press('Save changes', '#submit');

        $this->onPage('/admin/job/pay-grades')
            ->see('Record successfully added.')
            ->see('Test');
    }
}
