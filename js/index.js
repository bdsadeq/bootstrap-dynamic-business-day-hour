var day_counter = 0;
$(function () {
    config_datetime();
});
function config_datetime()
{
    $('.datetimepicker').datetimepicker({
        format: 'LT',
        useCurrent: true
    });
}

function add_business_hour(counter)
{
    $.ajax({
        type: "POST",
        url: 'get_time.php',
        data: {
            counter: day_counter,
            counter2: counter
        },
        timeout: 30000,
        beforeSend: function (xhr) {
            console.log('Sending...');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('Error...');
        },
        success: function (data)
        {
            jQuery('div[id=time_container_' + counter + ']').append(data);
            config_datetime();
        }

    });
}

function add_business_day()
{
    $.ajax({
        type: "POST",
        url: 'get_day.php',
        data: {
            counter: day_counter
        },
        timeout: 30000,
        beforeSend: function (xhr) {
            console.log('Sending...');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('Error...');
        },
        success: function (data)
        {
            jQuery('div[id=day_container_0]').append(data);
            config_datetime();
            day_counter++;
        }

    });

}

function submit_form()
{
    $.ajax({
        type: "POST",
        url: 'process.php',
        data: $("form[id=master_container]").serialize(),
        timeout: 30000,
        beforeSend: function (xhr) {
            console.log('Sending...');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('Error...');

        },
        success: function (data)
        {

        }

    });

    return false;
}

function remove_row(ob)
{
    $(ob).parent().parent().remove();
}

function remove_day(ob)
{
    $(ob).parent().parent().parent().remove();
}
