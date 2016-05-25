<?php
$counter = $_POST['counter'];
?>
<div class="row" style="padding-bottom: 10px;">
    <div class="col-sm-6">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="day[<?php echo $counter + 1 ?>][day][1]"> Sat
            </label>
            <label>
                <input type="checkbox" name="day[<?php echo $counter + 1 ?>][day][2]"> Sun
            </label>
            <label>
                <input type="checkbox" name="day[<?php echo $counter + 1 ?>][day][3]"> Mon
            </label>
            <label>
                <input type="checkbox" name="day[<?php echo $counter + 1 ?>][day][4]"> Tue
            </label>
            <label>
                <input type="checkbox" name="day[<?php echo $counter + 1 ?>][day][5]"> Wed
            </label>
            <label>
                <input type="checkbox" name="day[<?php echo $counter + 1 ?>][day][6]"> Thu
            </label>
            <label>
                <input type="checkbox" name="day[<?php echo $counter + 1 ?>][day][7]"> Fri
            </label>
        </div>


        <div class="col-sm-2">
            <button type='button' class="form-control btn btn-danger" onclick="remove_day(this);">X</button>
        </div>
    </div>

    <div class="col-sm-6">
        <div id="time_container_<?php echo $counter + 1 ?>">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <div class='input-group date datetimepicker'>
                            <input type='text' class="form-control" name="day[<?php echo $counter + 1 ?>][hour_s][]"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <div class='input-group date datetimepicker'>
                            <input type='text' class="form-control" name="day[<?php echo $counter + 1 ?>][hour_e][]"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-default" onclick="add_business_hour('<?php echo $counter + 1 ?>');">Add more business hour</button>

    </div>

</div>
