<?php if (!defined('THINK_PATH')) exit();?><div id="bottom" class="tab-pane">
    <p>
    <div class="panel-body">
        <a href="<?php echo U('Sysset/addNav');?>">
            <button class="bk-margin-5 btn btn-labeled btn-info" type="button">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                新增
            </button>
        </a>
        <button class="bk-margin-5 btn btn-labeled btn-danger" type="button">
                            <span class="btn-label">
                                <i class="fa fa-trash-o"></i>
                            </span>
                回收
        </button>
        <button id="portletRefresh" type="button" class="bk-margin-5 btn btn-default"><i class="fa fa-refresh"></i> 刷新</button>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                    <th width="10px">
                        <div class="checkbox-custom checkbox-success">
                            <input id="checkboxExample3" checked="" type="checkbox">
                            <label for="checkboxExample3"></label>
                        </div>
                    </th>
                    <th>ID</th>
                    <th>标题</th>
                    <th align="center">状态</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($bottom)): foreach($bottom as $key=>$k): ?><tr id="tr_<?php echo ($k["id"]); ?>">
                    <td>
                        <div class="checkbox-custom checkbox-success">
                            <input id="checkboxExample3" checked="" type="checkbox" status="off">
                            <label for="checkboxExample3"></label>
                        </div>
                    </td>
                    <td id="nid"><?php echo ($k["id"]); ?></td>
                    <td id="nav_title"><?php echo ($k["title"]); ?></td>
                    <?php if($k['status'] == 1): ?><td align="center">
                            <span><i class="fa fa-check"></i></span>
                        </td>
                        <?php else: ?>
                        <td align="center">
                            <span><i class="fa fa-times"></i></span>
                        </td><?php endif; ?>
                    <td style="width: 30%">
                        <a class="popup-with-form btn btn-info" href="#demo-form" onclick="nav_edit(<?php echo ($k["id"]); ?>)">
                            <i class="fa fa-edit"> 编辑</i>
                        </a>
                        <!-- Form -->
                        <form id="demo-form" class="white-popup-block mfp-hide form-horizontal" method="post" action="<?php echo U('Sysset/editNav');?>">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h6><i class="fa fa-edit red"></i>编辑导航</h6>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">导航名称</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tit" id="tit" class="form-control"  value="" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">导航状态</label>
                                <div class="col-sm-9">
                                    <label class="switch switch-success bk-margin-top-10">
                                        <input class="switch-input" checked="checked" type="checkbox" name="status">
                                        <span class="switch-label" data-on="On" data-off="Off"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">导航排序</label>
                                <div class="col-sm-9">
                                    <input type="text" name="sort" id="sort" class="form-control"  value="" required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <div class="pull-right bk-margin-right-15">
                                        <input type="hidden" value="<?php echo ($k["id"]); ?>" name="nav_id">
                                        <button class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <a class="bk-margin-top-10 bk-margin-bottom-10 modal-basic btn btn-danger" href="#modalPrimary" onclick="del(<?php echo ($k['id']); ?>)"><i class="fa fa-trash-o ">&nbsp;删除</i></a>
                        <div id="modalPrimary" class="modal-block modal-block-primary mfp-hide">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2 class="panel-title">温馨提示?</h2>
                                </div>
                                <div class="panel-body bk-noradius">
                                    <div class="modal-wrapper">
                                        <div class="modal-icon">
                                            <i class="fa fa-question-circle"></i>
                                        </div>
                                        <div class="modal-text">
                                            <h4>删除</h4>
                                            <p>Are you sure that you want to delete this group?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <input type="hidden" value="" id="did">
                                            <button class="btn btn-primary modal-confirm" id="confirm">确定</button>
                                            <button class="btn btn-default modal-dismiss" id="dismiss">取消</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr><?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    </p>
</div>