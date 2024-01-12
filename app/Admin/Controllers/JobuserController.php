<?php

namespace App\Admin\Controllers;


use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobuserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'users';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
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
        $form = new Form(new User());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->password('password', __('Password'));

        return $form;
    }
    


    public function register(Request $request)
    {
        
        $request->validate([
            'name' => 'string|max:255',
            'email' => 'email|unique:users',
            'acc_type' => 'string|max:255',

            'phone' => 'required|string|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = new User([
            'name' => $request->input('name'),
            'acc_type' => $request->input('acc_type'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
        ]);

        $user->save();

       
        auth()->login($user);

        return redirect('/jd/skip');
    }

    public function login(Request $request)
{
    // Validation
    $request->validate([
        'phone' => 'required|string',
        'password' => 'required|string',
    ]);

    // Attempt to log in the user
    if (Auth::attempt(['phone' => $request->input('phone'), 'password' => $request->input('password')])) {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Check the account type and redirect accordingly
        if ($user->acc_type === 'company') {
            return redirect('/company/profile/form');
        } elseif ($user->acc_type === 'user') {
            return redirect('/jd/profile');
        } else {
            // Handle other account types or errors
            return back()->withErrors(['phone' => 'Invalid account type']);
        }
    }

    // Failed login attempt
    return back()->withErrors(['phone' => 'Invalid credentials']);
}

}
