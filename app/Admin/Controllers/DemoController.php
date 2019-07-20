<?php

namespace App\Admin\Controllers;

use App\Models\Nav;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class DemoController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Nav);

        $grid->id('Id');
        $grid->parent_id('Parent id');
        $grid->sort_num('Sort num');
        $grid->title('Title');
        $grid->sub_title('Sub title');
        $grid->url('Url');
        $grid->cover_url('Cover url');
        $grid->is_show('Is show');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

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
        $show = new Show(Nav::findOrFail($id));

        $show->id('Id');
        $show->parent_id('Parent id');
        $show->sort_num('Sort num');
        $show->title('Title');
        $show->sub_title('Sub title');
        $show->url('Url');
        $show->cover_url('Cover url');
        $show->is_show('Is show');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Nav);

        $form->number('parent_id', 'Parent id');
        $form->switch('sort_num', 'Sort num');
        $form->text('title', 'Title');
        $form->text('sub_title', 'Sub title');
        $form->url('url', 'Url');
        $form->text('cover_url', 'Cover url');
        $form->switch('is_show', 'Is show');

        return $form;
    }
}
