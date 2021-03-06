<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?>
<?php $yAxis_series_cu_keep = $yAxis_series_al_keep = $yAxis_series_zn_keep = $yAxis_series_ni_keep = $yAxis_series_sn_keep = $yAxis_series_pb_keep = $yAxis_series_cu_cancel_percent = array();?>
<div class='panel panel-default grid'>
    <div class='panel-heading'>
        <i class='glyphicon glyphicon-th-list'></i> <?='Lme管理-图表'?>
        <div class='panel-tools'>
            <div class='btn-group'>
                <?php aci_ui_a($folder_name, $controller_name, 'index', '', ' class="btn  btn-sm "', '<span class="glyphicon glyphicon-th-list"></span>Lme管理-列表') ?>
            </div>
        </div>
    </div>

    <div id="form-list">
        <div class='panel-body'>
            <?php if ($data_list): ?>
                <div id="container_cu_keep" style="width:48%;height:300px;display:inline-block;"></div>
                <div id="container_al_keep" style="width:48%;height:300px;display:inline-block;"></div>
                <div id="container_zn_keep" style="width:48%;height:300px;display:inline-block;"></div>
                <div id="container_ni_keep" style="width:48%;height:300px;display:inline-block;"></div>
                <div id="container_sn_keep" style="width:48%;height:300px;display:inline-block;"></div>
                <div id="container_pb_keep" style="width:48%;height:300px;display:inline-block;"></div>
                <div id="container_cu_cancel_percent" style="width:48%;height:300px;display:inline-block;"></div>
                <?php foreach ($data_list as $v): ?>
                    <?php $xAxis_serise_date[] = $v['date']; ?>
                    <?php $yAxis_series_cu_keep[] = intval($v['cu_keep']); ?>
                    <?php $yAxis_series_al_keep[] = intval($v['al_keep']); ?>
                    <?php $yAxis_series_zn_keep[] = intval($v['zn_keep']); ?>
                    <?php $yAxis_series_ni_keep[] = intval($v['ni_keep']); ?>
                    <?php $yAxis_series_sn_keep[] = intval($v['sn_keep']); ?>
                    <?php $yAxis_series_pb_keep[] = intval($v['pb_keep']); ?>
                    <?php $yAxis_series_cu_cancel_percent[] = (float)$v['cu_cancel_percent']; ?>
                    <?php $yAxis_series_al_cancel_percent[] = (float)$v['al_cancel_percent']; ?>
                    <?php $yAxis_series_zn_cancel_percent[] = (float)$v['zn_cancel_percent']; ?>
                    <?php $yAxis_series_ni_cancel_percent[] = (float)$v['ni_cancel_percent']; ?>
                    <?php $yAxis_series_sn_cancel_percent[] = (float)$v['sn_cancel_percent']; ?>
                    <?php $yAxis_series_pb_cancel_percent[] = (float)$v['pb_cancel_percent']; ?>
                <?php endforeach; ?>

            <?php elseif(is_array($data_list)): ?>
                <div class="alert alert-warning" role="alert"><?='暂无数据'?></div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script language="javascript" type="text/javascript">
    var xAxis_serise_date = <?php echo json_encode($xAxis_serise_date); ?>;
    var yAxis_series_cu_keep = <?php echo json_encode($yAxis_series_cu_keep); ?>;
    var yAxis_series_al_keep = <?php echo json_encode($yAxis_series_al_keep); ?>;
    var yAxis_series_zn_keep = <?php echo json_encode($yAxis_series_zn_keep); ?>;
    var yAxis_series_ni_keep = <?php echo json_encode($yAxis_series_ni_keep); ?>;
    var yAxis_series_sn_keep = <?php echo json_encode($yAxis_series_sn_keep); ?>;
    var yAxis_series_pb_keep = <?php echo json_encode($yAxis_series_pb_keep); ?>;
    var yAxis_series_cu_cancel_percent = <?php echo json_encode($yAxis_series_cu_cancel_percent); ?>;
    var yAxis_series_al_cancel_percent = <?php echo json_encode($yAxis_series_al_cancel_percent); ?>;
    var yAxis_series_zn_cancel_percent = <?php echo json_encode($yAxis_series_zn_cancel_percent); ?>;
    var yAxis_series_ni_cancel_percent = <?php echo json_encode($yAxis_series_ni_cancel_percent); ?>;
    var yAxis_series_sn_cancel_percent = <?php echo json_encode($yAxis_series_sn_cancel_percent); ?>;
    var yAxis_series_pb_cancel_percent = <?php echo json_encode($yAxis_series_pb_cancel_percent); ?>;
    require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
        require(['<?php echo SITE_URL?>scripts/<?php echo $folder_name?>/<?php echo $controller_name?>/chart.js']);
    });
</script>
