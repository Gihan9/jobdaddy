<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Education;

class EducationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Education';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Education());

        $grid->column('id', __('Id'));
        $grid->column('degree_name', __('Degree name'));
        $grid->column('university', __('University'));
        $grid->column('date', __('Date'));
        $grid->column('GPA', __('GPA'));
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
        $show = new Show(Education::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('degree_name', __('Degree name'));
        $show->field('university', __('University'));
        $show->field('date', __('Date'));
        $show->field('GPA', __('GPA'));
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
        $form = new Form(new Education());

        $form->text('degree_name', __('Degree name'));
        $form->text('university', __('University'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $form->text('GPA', __('GPA'));
        $form->text('user_id', __('User id'));

        return $form;
    }
}
