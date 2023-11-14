<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Jobseeker;

class JobseekerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Jobseeker';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Jobseeker());

        $grid->column('id', __('Id'));
        $grid->column('name', __('name'));
        $grid->column('age', __('age'));
        $grid->column('sex', __('sex'));
        $grid->column('marital_status', __('marital_status'));
        $grid->column('designation', __('designation'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('location', __('Location'));
        $grid->column('password', __('Password'));
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
        $show = new Show(Jobseeker::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('age', __('Age'));
        $show->field('sex', __('Sex'));
        $show->field('marital_status', __('Marital_status'));
        $show->field('designation', __('Designation'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->field('location', __('Location'));
        $show->field('password', __('Password'));
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
        $form = new Form(new Jobseeker());

        $form->text('name', __('name'));
        $form->text('age', __('age'));
        $form->text('sex', __('sex'));
        $form->text('marital_status', __('marital_status'));
        $form->text('designation', __('designation'));
        $form->email('email', __('Email'));
        $form->number('phone', __('Phone'));
        $form->text('location', __('Location'));
        $form->password('password', __('Password'));

        return $form;
    }
}
