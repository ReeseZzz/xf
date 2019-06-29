<?php

namespace App\Admin\Controllers;

use App\Models\Business;
use App\Http\Controllers\Controller;
use App\Models\BusinessType;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class BusinessController extends Controller
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
            ->header('业务管理')
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
            ->header('编辑业务')
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
            ->header('新增业务')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Business);

        $grid->id('ID');
        $grid->title('名称');

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
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Business::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Business);

        $form->text('title', '标题')->rules('required',['required' => '请输入 标题']);

        $form->select('business_id', '所属分类')->options(function ($id) {
            $cate = BusinessType::orderBy('sort_num')->get();
            if ($cate->isNotEmpty()) {
                $res = [];
               foreach($cate as $v){
                   $res[$v['id']] = $v['name'];
               }
               return $res;
            }
            return collect();
        })->rules('required',['required' => '请选择 所属分类']);

        $form->number('sort_num', '排序')->default(0)->help('数字正序排列');

        $form->editor('content', '内容')->rules('required',['required' => '请输入 内容']);

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
