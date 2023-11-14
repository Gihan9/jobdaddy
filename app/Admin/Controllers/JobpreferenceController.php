<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Jobpreference;

class JobpreferenceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Jobpreference';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Jobpreference());

        $grid->column('id', __('Id'));
        $grid->column('p_job_title', __('P job title'));
        $grid->column('employment_type', __('Employment type'));
        $grid->column('p_location', __('P location'));
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
        $show = new Show(Jobpreference::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('p_job_title', __('P job title'));
        $show->field('employment_type', __('Employment type'));
        $show->field('p_location', __('P location'));
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
        $form = new Form(new Jobpreference());

        $form->text('p_job_title', __('P job title'));
        $form->text('employment_type', __('Employment type'));
        $form->text('p_location', __('P location'));
        $form->text('user_id', __('User id'));

        return $form;
    }
}
