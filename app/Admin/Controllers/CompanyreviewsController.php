<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Companyreviews;

class CompanyreviewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Companyreviews';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Companyreviews());

        $grid->column('id', __('Id'));
        $grid->column('reviewer_name', __('Reviewer name'));
        $grid->column('description', __('Description'));
        $grid->column('rating', __('Rating'));
        $grid->column('date', __('Date'));
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
        $show = new Show(Companyreviews::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('reviewer_name', __('Reviewer name'));
        $show->field('description', __('Description'));
        $show->field('rating', __('Rating'));
        $show->field('date', __('Date'));
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
        $form = new Form(new Companyreviews());

        $form->text('reviewer_name', __('Reviewer name'));
        $form->text('description', __('Description'));
        $form->text('rating', __('Rating'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $form->text('company_id', __('Company id'));

        return $form;
    }
}
