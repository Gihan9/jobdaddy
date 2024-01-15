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
        $grid->column('degree', __('Degree'));
        $grid->column('university', __('University'));
        $grid->column('start_date', __('Start Date'));
        $grid->column('end_date', __('End Date'));
        $grid->column('grade', __('Grade'));
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
        $show->field('degree', __('Degree name'));
        $show->field('university', __('University'));
        $show->field('start_date', __('Start Date'));
        $show->field('end_date', __('End Date'));
        $show->field('grade', __('Grade'));
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

        $form->text('degree', __('Degree name'));
        $form->text('university', __('University'));
        $form->date('start_date', __('Start Date'))->default(date('Y-m-d'));
        $form->text('end_date', __('End Date'));
        $form->text('grade', __('Grade'));

        return $form;
    }

    public function stoed()
    {
        request()->validate([
            'degree' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
            'grade' => 'required|string|max:255',
        ]);


        // Create a new experience for the authenticated user
        auth()->user()->educations()->create([
            'degree' => request()->input('degree'),
            'university' => request()->input('university'),
            'start_date' => request()->input('start_date'),
            'end_date' => request()->input('end_date'),
            'grade' => request()->input('grade'),
        ]);

        return redirect('/jd/profile')->with('success', 'Education added successfully!');
    }


    public function destroy($id)
    {
        $education = Education::findOrFail($id);
        
    
        if ($education->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $education->delete();

        return redirect('/jd/profile')->with('success', 'Education qualification deleted successfully!');
    }
}
