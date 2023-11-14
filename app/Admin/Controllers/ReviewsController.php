<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Reviews;

class ReviewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Reviews';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Reviews());

        $grid->column('id', __('Id'));
        $grid->column('company_name', __('Company name'));
        $grid->column('description', __('Description'));
        $grid->column('rating', __('Rating'));
        $grid->column('date', __('Date'));
        $grid->column('user_id', __('User id'));
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
        $show = new Show(Reviews::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('company_name', __('Company name'));
        $show->field('description', __('Description'));
        $show->field('rating', __('Rating'));
        $show->field('date', __('Date'));
        $show->field('user_id', __('User id'));
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
        $form = new Form(new Reviews());

        $form->text('company_name', __('Company name'));
        $form->text('description', __('Description'));
        $form->text('rating', __('Rating'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $form->text('user_id', __('User id'));
        $form->text('company_id', __('Company id'));

        return $form;
    }
}
