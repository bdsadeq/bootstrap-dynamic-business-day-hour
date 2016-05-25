<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sadeq</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container" style="margin-top: 35px;">
            <form id="master_container" action="javascript:void(0)" method="POST" onsubmit="submit_form();">

                <div id="day_container_0">
                    <div class="row" style="padding-bottom: 10px;">
                        <div class="col-sm-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="day[0][day][1]"> Sat
                                </label>
                                <label>
                                    <input type="checkbox" name="day[0][day][2]"> Sun
                                </label>
                                <label>
                                    <input type="checkbox" name="day[0][day][3]"> Mon
                                </label>
                                <label>
                                    <input type="checkbox" name="day[0][day][4]"> Tue
                                </label>
                                <label>
                                    <input type="checkbox" name="day[0][day][5]"> Wed
                                </label>
                                <label>
                                    <input type="checkbox" name="day[0][day][6]"> Thu
                                </label>
                                <label>
                                    <input type="checkbox" name="day[0][day][7]"> Fri
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div id="time_container_0">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <div class='input-group date datetimepicker'>
                                                <input type='text' class="form-control" name="day[0][hour_s][]"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <div class='input-group date datetimepicker'>
                                                <input type='text' class="form-control" name="day[0][hour_e][]"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <button type="button" class="btn btn-default" onclick="add_business_hour('0');">Add more business hour</button>

                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-default pull-left" onclick="add_business_day('0');">Add more business days</button>





                <button type="submit" class="btn btn-default pull-right">Submit</button>
            </form>
        </div> 


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.min.js"></script>
        <script src="js/moment.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-datetimepicker.min.js"></script>
        <script src="js/index.js"></script>

    </body>
</html>
