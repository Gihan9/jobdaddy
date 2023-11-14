<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Jobapplicationstatus;

class jobappstatusController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Jobapplicationstatus';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Jobapplicationstatus());

        $grid->column('id', __('Id'));
        $grid->column('job_post', __('Job post'));
        $grid->column('company', __('Company'));
        $grid->column('applied_date', __('Applied date'));
        $grid->column('status', __('Status'));
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
        $show = new Show(Jobapplicationstatus::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('job_post', __('Job post'));
        $show->field('company', __('Company'));
        $show->field('applied_date', __('Applied date'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Jobapplicationstatus());

        $form->text('job_post', __('Job post'));
        $form->text('company', __('Company'));
        $form->date('applied_date', __('Applied date'))->default(date('Y-m-d'));
        $form->text('status', __('Status'));
        $form->text('user_id', __('User id'));

        return $form;
    }
}
