<?php

namespace App\Admin\Controllers;

use App\Unionpay;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class UnionpayController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('银联流水');
            $content->description('银联流水管理');

            $grid = $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('编辑银联流水数据');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('添加银联流水数据');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Unionpay::class, function (Grid $grid) {
            $grid ->model()->orderBy('id','DESC');
            $grid->id('序号')->sortable();
            $grid->cleandate('清算日期');
            $grid->tradetime('交易时间');
            $grid->operatetype('交易类型');
            $grid->serialnumber('序列号');
            $grid->cardnumber('卡号');
            $grid->tradeamount('交易金额');
            $grid->terminalcode('终端号');
            $grid->mercode('商户编号');
            $grid->mername('商户名称');
            $grid->debitfees('借记手续费');
            $grid->serialnumber('贷记手续费');
            $grid->paytype('支付方式');

            //屏蔽添加按钮
            $grid->disableCreation();
            //屏蔽操作
            $grid->disableActions();

            $grid->filter(function ($filter) {
                    $filter->like('cleandate');
                    $filter->like('tradetime');
                    $filter->equal('operatetype');
                    $filter->equal('terminalcode');
                    $filter->equal('mercode');
                    $filter->equal('mername');
                });

        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Unionpay::class, function (Form $form) {
            $form->date('cleandate','清算日期');
            $form->datetime('tradetime','交易时间');
            $form->text('operatetype','交易类型');
            $form->text('serialnumber','序列号');
            $form->text('cardnumber','卡号');
            $form->text('tradeamount','交易金额');
            $form->text('terminalcode','终端号');
            $form->text('mercode','商户编号');
            $form->text('mername','商户名称');
            $form->text('debitfees','借记手续费');
            $form->text('greditfees','贷记手续费');
            $form->text('paytype','支付方式');
        });
    }


}
    