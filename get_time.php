<?php
$counter = $_POST['counter'];
$counter2 = $_POST['counter2'];
?>
<div class="row">
    <div class="col-sm-5">
        <div class="form-group">
            <div class='input-group date datetimepicker'>
                <input type='text' class="form-control" name="day[<?php echo $counter2; ?>][hour_s][]"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            <div class='input-group date datetimepicker'>
                <input type='text' class="form-control" name="day[<?php echo $counter2; ?>][hour_e][]"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>

    <div class="col-sm-2">
        <button type='button' class="form-control btn btn-danger" onclick="remove_row(this);">X</button>
    </div>
</div>
