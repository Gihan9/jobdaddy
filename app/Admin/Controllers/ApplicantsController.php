<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Applicants;

class ApplicantsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Applicants';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Applicants());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('date', __('Date'));
        $grid->column('request_status', __('Request status'));
        $grid->column('job_id', __('Job id'));
        $grid->column('user_id', __('User id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Applicants::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('date', __('Date'));
        $show->field('request_status', __('Request status'));
        $show->field('job_id', __('Job id'));
        $show->field('user_id', __('User id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Applicants());

        $form->text('name', __('Name'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $form->text('request_status', __('Request status'));
        $form->text('job_id', __('Job id'));
        $form->text('user_id', __('User id'));

        return $form;
    }
}
