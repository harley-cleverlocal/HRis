<?php

/**
 * This file is part of the HRis Software package.
 *
 * HRis - Human Resource and Payroll System
 *
 * @link    http://github.com/HB-Co/HRis
 */
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     * @author Bertrand Kintanar
     */
    public function run()
    {
        // TODO: This should be seeding the groups table not the users table
        DB::table('roles')->delete();

        foreach ($this->data() as $role) {
            DB::table('roles')->insert($role);
        }
    }

    public function data()
    {
        return [
            [
                'slug'        => 'root',
                'name'        => 'Root',
                'permissions' => $this->permission('root'),
                'created_at'  => '2014-10-21 22:56:12',
                'updated_at'  => '2014-11-04 15:10:19',
            ],
            [
                'slug'        => 'administrator',
                'name'        => 'Administrator',
                'permissions' => '{"dashboard.view" : true,"profile.view" : true,"profile.personal-details.view" : true,"profile.personal-details.update" : true,"profile.contact-details.view" : true,"profile.contact-details.update" : true,"profile.emergency-contacts.view" : true,"profile.emergency-contacts.update" : true,"profile.emergency-contacts.delete" : true,"profile.emergency-contacts.create" : true,"profile.dependents.view" : true,"profile.dependents.update" : true,"profile.dependents.delete" : true,"profile.dependents.create" : true,"profile.job.view" : true,"profile.job.update" : true,"profile.job.delete" : true,"profile.job.create" : true,"profile.work-shifts.view" : true,"profile.work-shifts.update" : true,"profile.work-shifts.delete" : true,"profile.work-shifts.create" : true,"profile.salary.view" : true,"profile.salary.update" : true,"profile.salary.delete" : true,"profile.salary.create" : true,"profile.qualifications.view" : true,"profile.qualifications.update" : true,"profile.qualifications.delete" : true,"profile.qualifications.create" : true,"profile.qualifications.educations.view" : true,"profile.qualifications.educations.update" : true,"profile.qualifications.educations.delete" : true,"profile.qualifications.educations.create" : true,"profile.qualifications.skills.view" : true,"profile.qualifications.skills.update" : true,"profile.qualifications.skills.delete" : true,"profile.qualifications.skills.create" : true,"profile.qualifications.work-experiences.view" : true,"profile.qualifications.work-experiences.update" : true,"profile.qualifications.work-experiences.delete" : true,"profile.qualifications.work-experiences.create" : true,"pim.personal-details.view" : true,"pim.personal-details.update" : true,"pim.contact-details.view" : true,"pim.contact-details.update" : true,"pim.emergency-contacts.view" : true,"pim.emergency-contacts.update" : true,"pim.emergency-contacts.delete" : true,"pim.emergency-contacts.create" : true,"pim.dependents.view" : true,"pim.dependents.update" : true,"pim.dependents.delete" : true,"pim.dependents.create" : true,"pim.job.view" : true,"pim.job.update" : true,"pim.job.delete" : true,"pim.job.create" : true,"pim.work-shifts.view" : true,"pim.work-shifts.update" : true,"pim.work-shifts.delete" : true,"pim.work-shifts.create" : true,"pim.salary.view" : true,"pim.salary.update" : true,"pim.salary.delete" : true,"pim.salary.create" : true,"pim.qualifications.view" : true,"pim.qualifications.update" : true,"pim.qualifications.delete" : true,"pim.qualifications.create" : true,"pim.qualifications.educations.view" : true,"pim.qualifications.educations.update" : true,"pim.qualifications.educations.delete" : true,"pim.qualifications.educations.create" : true,"pim.qualifications.skills.view" : true,"pim.qualifications.skills.update" : true,"pim.qualifications.skills.delete" : true,"pim.qualifications.skills.create" : true,"pim.qualifications.work-experiences.view" : true,"pim.qualifications.work-experiences.update" : true,"pim.qualifications.work-experiences.delete" : true,"pim.qualifications.work-experiences.create" : true,"performance.view" : true,"performance.update" : true,"performance.delete" : true,"performance.create" : true,"performance.my-tracker.view" : true,"performance.my-tracker.update" : true,"performance.my-tracker.delete" : true,"performance.my-tracker.create" : true,"performance.employee-tracker.view" : true,"performance.employee-tracker.update" : true,"performance.employee-tracker.delete" : true,"performance.employee-tracker.create" : true, "performance.configuration.view" : true,"performance.configuration.update" : true,"performance.configuration.delete" : true,"performance.configuration.create" : true, "performance.configuration.trackers.view" : true,"performance.configuration.trackers.update" : true,"performance.configuration.trackers.delete" : true,"performance.configuration.trackers.create" : true, "time.view" : true,"time.update" : true,"time.delete" : true,"time.create" : true,"pim.view" : true,"pim.update" : true,"pim.delete" : true,"pim.create" : true,"pim.employee-list.view" : true,"pim.employee-list.update" : true,"pim.employee-list.delete" : true,"pim.employee-list.create" : true,"admin.view" : true,"admin.update" : true,"admin.delete" : true,"admin.create" : true,"admin.user-management.view" : true,"admin.user-management.update" : true,"admin.user-management.delete" : true,"admin.user-management.create" : true,"admin.job.view" : true,"admin.job.update" : true,"admin.job.delete" : true,"admin.job.create" : true,"admin.job.titles.view" : true,"admin.job.titles.update" : true,"admin.job.titles.delete" : true,"admin.job.titles.create" : true,"admin.job.pay-grades.view" : true,"admin.job.pay-grades.update" : true,"admin.job.pay-grades.delete" : true,"admin.job.pay-grades.create" : true,"admin.job.employment-status.view" : true,"admin.job.employment-status.update" : true,"admin.job.employment-status.delete" : true,"admin.job.employment-status.create" : true,"admin.job.categories.view" : true,"admin.job.categories.update" : true,"admin.job.categories.delete" : true,"admin.job.categories.create" : true,"admin.job.work-shifts.view" : true,"admin.job.work-shifts.update" : true,"admin.job.work-shifts.delete" : true,"admin.job.work-shifts.create" : true,"admin.qualifications.view" : true,"admin.qualifications.update" : true,"admin.qualifications.delete" : true,"admin.qualifications.create" : true,"admin.qualifications.skills.view" : true,"admin.qualifications.skills.update" : true,"admin.qualifications.skills.delete" : true,"admin.qualifications.skills.create" : true,"admin.qualifications.educations.view" : true,"admin.qualifications.educations.update" : true,"admin.qualifications.educations.delete" : true,"admin.qualifications.educations.create" : true,"pim.configuration.view" : true,"pim.configuration.update" : true,"pim.configuration.delete" : true,"pim.configuration.create" : true,"pim.configuration.termination-reasons.view" : true,"pim.configuration.termination-reasons.update" : true,"pim.configuration.termination-reasons.delete" : true,"pim.configuration.termination-reasons.create" : true,"perforamance.configuration.view" : true,"perforamance.configuration.update" : true,"perforamance.configuration.delete" : true,"perforamance.configuration.create" : true,"perforamance.configuration.trackers.view" : true,"perforamance.configuration.trackers.update" : true,"perforamance.configuration.trackers.delete" : true,"perforamance.configuration.trackers.create" : true,"time.attendance.view" : true,"time.attendance.update" : true,"time.attendance.delete" : true,"time.attendance.create" : true,"time.attendance.employee-records.view" : true,"time.attendance.employee-records.update" : true,"time.attendance.employee-records.delete" : true,"time.attendance.employee-records.create" : true}',
                'created_at'  => '2014-10-21 22:56:12',
                'updated_at'  => '2014-10-31 02:05:22',
            ],
            [
                'slug'        => 'ess',
                'name'        => 'Employee Self-service',
                'permissions' => $this->permission('ess'),
                'created_at'  => '2014-10-21 22:56:12',
                'updated_at'  => '2014-10-31 02:05:22',
            ],
        ];
    }

    private function permission($role)
    {
        $arr = [];

        switch ($role) {
            case 'root':
                $arr = array_merge(
                    permission('dashboard', ['view']),
                    permission('profile', ['view']),
                    permission('profile.personal-details', ['view', 'update']),
                    permission('profile.contact-details', ['view', 'update']),
                    permission('profile.emergency-contacts'),
                    permission('profile.dependents'),
                    permission('profile.job'),
                    permission('profile.work-shifts'),
                    permission('profile.salary'),
                    permission('profile.qualifications'),
                    permission('profile.qualifications.educations'),
                    permission('profile.qualifications.skills'),
                    permission('profile.qualifications.work-experiences'),
                    permission('pim.personal-details', ['view', 'update']),
                    permission('pim.contact-details', ['view', 'update']),
                    permission('pim.emergency-contacts'),
                    permission('pim.dependents'),
                    permission('pim.job'),
                    permission('pim.work-shifts'),
                    permission('pim.salary'),
                    permission('pim.qualifications'),
                    permission('pim.qualifications.educations'),
                    permission('pim.qualifications.skills'),
                    permission('pim.qualifications.work-experiences'),
                    permission('performance'),
                    permission('performance.my-tracker'),
                    permission('performance.employee-tracker'),
                    permission('performance.configuration'),
                    permission('performance.configuration.trackers'),
                    permission('time'),
                    permission('pim'),
                    permission('pim.employee-list'),
                    permission('admin'),
                    permission('admin.user-management'),
                    permission('admin.job'),
                    permission('admin.job.titles'),
                    permission('admin.job.pay-grades'),
                    permission('admin.job.employment-status'),
                    permission('admin.job.categories'),
                    permission('admin.job.work-shifts'),
                    permission('admin.qualifications'),
                    permission('admin.qualifications.skills'),
                    permission('admin.qualifications.educations'),
                    permission('pim.configuration'),
                    permission('pim.configuration.termination-reasons'),
                    permission('perforamance.configuration'),
                    permission('perforamance.configuration.trackers'),
                    permission('time.attendance'),
                    permission('time.attendance.employee-records')
                );
                break;
            case 'ess':
                $arr = array_merge(
                    permission('dashboard', ['view']),
                    permission('profile', ['view']),
                    permission('profile.personal-details', ['view', 'update']),
                    permission('profile.contact-details', ['view', 'update']),
                    permission('profile.emergency-contacts'),
                    permission('profile.dependents'),
                    permission('profile.job', ['view']),
                    permission('profile.work-shifts', ['view']),
                    permission('profile.salary', ['view']),
                    permission('profile.qualifications'),
                    permission('profile.qualifications.educations'),
                    permission('profile.qualifications.skills'),
                    permission('profile.qualifications.work-experiences'),
                    permission('performance', ['view']),
                    permission('performance.my-tracker', ['view'])
                );
                break;
        }

        return json_encode($arr);
    }
}
