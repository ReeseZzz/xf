<?php

namespace App\Admin\Controllers;

use App\Models\BusinessType;
use App\Models\Cases;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class CasesController extends Controller
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
            ->header('案例管理')
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
            ->header('编辑案例')
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
            ->header('新增案例')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cases);

        $grid->id('ID');

        $grid->title('标题');

        $grid->address('地址');

        $grid->product('产品信息');

        $grid->cover_url('封面')->image();

        $grid->created_at('添加时间');

        $grid->disableFilter();
        $grid->disableExport();
        $grid->actions(function ($actions) {
            $actions->disableView();
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
        $show = new Show(Cases::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Cases);

        $form->text('title', '标题')->rules('required',['required' => '请输入 标题']);

        $form->text('address', '用户地点');

        $form->text('product', '产品型号');

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

        $form->image('cover_url', '封面');

        $form->editor('content', '内容')->rules('required',['required' => '请输入 内容']);

        // 两个时间显示
        $form->display('created_at', '创建时间');
        $form->display('updated_at', '修改时间');


        $form->tools(function (Form\Tools $tools) {
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
