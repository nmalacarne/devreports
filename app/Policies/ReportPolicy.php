<?php

namespace App\Policies;

use App\User;
use App\Report;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReportPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the report.
     *
     * @param  \App\User  $user
     * @param  \App\Report  $report
     * @return mixed
     */
    public function view(User $user, Report $report)
    {
        return false;
    }

    /**
     * Determine whether the user can create reports.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the report.
     *
     * @param  \App\User  $user
     * @param  \App\Report  $report
     * @return mixed
     */
    public function update(User $user, Report $report)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the report.
     *
     * @param  \App\User  $user
     * @param  \App\Report  $report
     * @return mixed
     */
    public function delete(User $user, Report $report)
    {
        // identical operator would be nice here, but
        // for some reason user_id is a string ...
        return $user->id == $report->user_id;
    }
}
