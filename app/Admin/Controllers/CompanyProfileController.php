<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\CompanyProfile;

class CompanyProfileController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CompanyProfile';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CompanyProfile());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('about', __('About'));
        $grid->column('established_date', __('Established date'));
        $grid->column('profile_picture', __('Profile picture'));
        $grid->column('rating', __('Rating'));
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
        $show = new Show(CompanyProfile::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('about', __('About'));
        $show->field('established_date', __('Established date'));
        $show->field('profile_picture', __('Profile picture'));
        $show->field('rating', __('Rating'));
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
        $form = new Form(new CompanyProfile());

        $form->text('name', __('Name'));
        $form->text('about', __('About'));
        $form->text('established_date', __('Established date'));
        $form->text('profile_picture', __('Profile picture'));
        $form->text('rating', __('Rating'));

        return $form;
    }
}
