<?php

namespace App\Admin\Controllers;

use App\Models\BusinessType;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class BusinessTypesController extends Controller
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
            ->header('业务类型列表')
            ->description('业务类型的展示')
            ->body($this->grid());
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
            ->header('编辑')
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
            ->header('新增')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BusinessType);

        $grid->id('ID');
        $grid->name('名称');
        $grid->icon('图标(默认状态)')->image();
        $grid->icon_active('图标(激活状态)')->image();
        $grid->sort_num('排序')->sortable();

        $grid->created_at('添加时间');

        $grid->disableFilter();
        $grid->disableExport();
        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableDelete();
        });
        $grid->tools(function ($tools) {
            // 禁用批量删除按钮
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });
        return $grid;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BusinessType);

        $form->text('name', '名称')->rules('required',['required' => '请输入 名称']);

        $form->number('sort_num', '排序')->default(0)->help('数字正序排列');

        $form->image('icon', '图标(默认状态)')->uniqueName();
        $form->image('icon_active', '图标(激活状态)')->uniqueName();
        // 两个时间显示
        $form->display('created_at', '创建时间');
        $form->display('updated_at', '修改时间');


        $form->tools(function (Form\Tools $tools) {
            // 去掉`删除`按钮
            $tools->disableDelete();

            // 去掉`查看`按钮
            $tools->disableView();
        });
        $form->footer(function ($footer) {
            // 去掉`查看`checkbox
            $footer->disableViewCheck();

            // 去掉`继续编辑`checkbox
            $footer->disableEditingCheck();

            // 去掉`继续创建`checkbox
            $footer->disableCreatingCheck();

        });
        return $form;
    }
}
