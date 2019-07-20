<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nav;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class NavesController extends Controller
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
            ->header('分类列表')
            ->description('导航栏菜单')
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
        $grid = new Grid(new Nav);

        $grid->id('ID');
        $grid->title('分类名称');
        $grid->url('链接地址');
        $grid->is_show('是否展示')->display(function ($value) {
            return $value ? '是' : '否';
        });
        $grid->cover_url('封面')->image();
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
        $form = new Form(new Nav);

        $form->text('title', '分类名称')->rules('required',['required' => '请输入 分类名称']);

        $form->select('parent_id', '所属分类')->options(function ($id) {
            $cate = Nav::where('parent_id',0)->where('is_show',true)->get();
            $root = collect(['0' => '顶级分类']);
            if ($cate->isNotEmpty()) {
                return $root->merge($cate->flatMap(function ($item){
                    return [$item->id => $item->title];
                }));
            }
            return $root;
        })->rules('required',['required' => '请选择 所属分类']);

        $form->text('url', '链接地址')->default('#');

        $form->number('sort_num', '排序')->default(0)->help('数字正序排列');

        $form->switch('is_show', '是否展示')->states(function(){
            return  [
                'on'  => ['value' => true, 'text' => '是', 'color' => 'success'],
                'off' => ['value' => false, 'text' => '否', 'color' => 'danger'],
            ];
        });
        $form->image('cover_url', '封面图片')->uniqueName();

        $form->editor('content', '描述');
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
