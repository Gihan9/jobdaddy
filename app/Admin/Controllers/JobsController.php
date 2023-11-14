<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Jobs;

class JobsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Jobs';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Jobs());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'));
        $grid->column('category', __('Category'));
        $grid->column('requirments', __('Requirments'));
        $grid->column('type', __('Type'));
        $grid->column('location', __('Location'));
        $grid->column('email', __('Email'));
        $grid->column('need_cv', __('Need cv'));
        $grid->column('need_cover_letter', __('Need cover letter'));
        $grid->column('company_id', __('Company id'));
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
        $show = new Show(Jobs::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('category', __('Category'));
        $show->field('requirments', __('Requirments'));
        $show->field('type', __('Type'));
        $show->field('location', __('Location'));
        $show->field('email', __('Email'));
        $show->field('need_cv', __('Need cv'));
        $show->field('need_cover_letter', __('Need cover letter'));
        $show->field('company_id', __('Company id'));
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
        $form = new Form(new Jobs());

        $form->text('name', __('Name'));
        $form->text('description', __('Description'));
        $form->text('category', __('Category'));
        $form->text('requirments', __('Requirments'));
        $form->text('type', __('Type'));
        $form->text('location', __('Location'));
        $form->email('email', __('Email'));
        $form->switch('need_cv', __('Need cv'));
        $form->switch('need_cover_letter', __('Need cover letter'));
        $form->text('company_id', __('Company id'));

        return $form;
    }
}
