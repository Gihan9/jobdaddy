<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Experience;

class ExperienceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Experience';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Experience());

        $grid->column('id', __('Id'));
        $grid->column('job_title', __('Job title'));
        $grid->column('company_name', __('Company name'));
        $grid->column('date', __('Date'));
        $grid->column('description', __('Description'));
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
        $show = new Show(Experience::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('job_title', __('Job title'));
        $show->field('company_name', __('Company name'));
        $show->field('date', __('Date'));
        $show->field('description', __('Description'));
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
        $form = new Form(new Experience());

        $form->text('job_title', __('Job title'));
        $form->text('company_name', __('Company name'));
        $form->text('date', __('Date'));
        $form->text('description', __('Description'));
        $form->text('user_id', __('User id'));

        return $form;
    }
}
