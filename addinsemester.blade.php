@extends('app')
@section('title')
    1.2學期中新增 | 教職維護 | 人力資源網
@endsection
@section('header')
    @include('menu.personnel')
    <div class="header-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="breadcrumbs">
                        <ol class="breadcrumb">
                            <li><a href="#">教職維護</a></li>
                            <li><a href="#">1.教職維護</a></li>
                            <li class="active">1.2學期中新增</li>
                        </ol>
                    </div><!--/breadcrums-->
                </div>

                <div class="col-md-4 col-sm-3 col-xs-6">
                    <div class="well-new">
                        頁面公告<p class="pull-right ">NEW<span class="badge"> 5</span></p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <ul class="tool">
                        <li><a href="#" class="fa fa-comment-o" target="_blank" title="我要發問"></a></li>
                        <li><a href="#" class="fa fa-question" target="_blank" title="常見問題"></a></li>
                        <li><a href="#" class="fa fa-download" title="手冊下載"></a></li>
                        <li><a href="#" class="fa fa fa-film" title="影音連結"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="bluetabs">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#one" data-toggle="tab"><i class="fa fa-file"></i> 線上單筆新增</a></li>
                <li><a href="#two" data-toggle="tab"><i class="fa fa-files-o"></i></i> 批次匯入</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="one">
                    <table class="table table-bordered" >
                        <tr>
                            <th>* 身分證/居留證/護照號碼</th>
                            <td>

                                <form class="form-inline">
                                    <div class="form-group">
                                        <label class="sr-only" for="">身分證</label>
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                    <button type="button" class="btn btn-default ubt"> 搜尋教職員資料庫</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th>* 姓名</th>
                            <td>
                                <input type="text" class="form-control" id="" placeholder="">
                            </td>
                        </tr>
                        <tr>
                            <th>* 性別</th>
                            <td>
                                <label class="radio-inline">
                                    <input type="radio"> 男　
                                </label>
                                <label class="radio-inline">
                                    <input type="radio"> 女
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th>* 出生年月日</th>
                            <td>
                                <input type="text" class="form-control" id="" placeholder="(民國年-月-日)">

                            </td>
                        </tr>
                        <tr>
                            <th>* 原住民身分別</th>
                            <td>
                                <label class="radio-inline">
                                    <input type="radio">有
                                </label>
                                <label class="radio-inline">　
                                    <input type="radio">無
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th>* 在本校聘用起迄日</th>
                            <td>

                                <form class="form-inline">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="" placeholder="(民國年-月-日)"> ～
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="(民國年-月-日)">
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th>* 職位</th>
                            <td>
                                <select>
                                    <option>校長</option>
                                    <option>教師</option>
                                    <option>職員</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>* 聘用別</th>
                            <td>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                        正式校長
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        他校候用校長支援本校
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                        他校正式校長兼任本校
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                        教育局/處支援本校
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><button class="btn btn-default ubt">確認新增</button></td>
                        </tr>
                    </table>
                </div>

                <div class="tab-pane" id="two">
                    <!--批次匯入開始-->
                    <table class="table table_bluleft" >
                        <tr>
                            <th width="19%">外部系統操作手冊</th>
                            <td width="81%">
                                <button class="btn btn-default">下載WebHR匯出操作手冊</button>
                            </td>
                        </tr>
                        <tr>
                            <th>系統範例擋</th>
                            <td>
                                <button class="btn btn-default">下載基本資料範例檔</button>
                                <button class="btn btn-default">下載教師證及證照範例檔</button>
                            </td>
                        </tr>
                        <tr>
                            <th>選擇匯入檔案格式</th>
                            <td>
                                <select name="" id="">
                                    <option value="0" selected>WebHR匯出格式</option>
                                    <option value="1" >範例檔-基本資料</option>
                                    <option value="2" >範例檔-證照</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>匯入檔案</th>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputFile"> 選擇檔案</label>
                                        <input type="file" id="exampleInputFile">
                                    </div>
                                    <button type="submit" class="btn btn-default ubt">上傳檔案</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                    <div class=" container-fluid common-buttons" style="margin-top:15px;">
                        <div class="row">
                            <div class="col-sm-9">
                                <h2 class="title text-center">匯入成功 <span class="badge">123</span> 筆 / 匯入失敗 <span class="badge alert-danger">1</span> 筆 </h2>
                            </div>
                            <div class="col-sm-3">
                                <a href="#" class="btn btn-default ubt">顯示最近一次的匯入結果</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table_texleft">
                        <tr>
                            <th width="2%">單筆資料序號</th>
                            <th>匯入結果異常說明</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>「聘用別」不得空白</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                「姓名」不能為空白!!<br>「身分證號」不能為空白!!<br>「姓名+身分證號」查無基本資料!!<br>
                            </td>
                        </tr>
                    </table>
                    <!--批次匯入結束-->
                </div>
            </div>
        </div>
    </div>
@endsection

