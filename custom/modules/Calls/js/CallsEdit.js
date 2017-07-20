var customCallsEditScheduleDateUpdate = function () {
    /*

    don't do a thing ;) - if you do - do it with statusChangeHandler below

    if ($("select#status").val() == 'Planned') {
        $("#date_start").val($("#date_schedule_c").val());
        $("#date_start_date").val($("#date_schedule_c_date").val());
        $("#date_start_hours").val($("#date_schedule_c_hours").val());
        $("#date_start_minutes").val($("#date_schedule_c_minutes").val());
    }*/
};

(function ($) {
    var strStartDateFull = null;
    var strStartDate = null;
    var strStartHour = null;
    var strStartMinutes = null;

    /**
     *
     */
    var setupDates = function () {
        strStartDateFull = $("#date_start").val();//05/17/2016 09:45
        var time_separator = ':';
        var date_to_time_separator = ' ';
        var dateTimeParts = strStartDateFull.split(date_to_time_separator);
        if (dateTimeParts && dateTimeParts.length == 2) {
            strStartDate = dateTimeParts[0];
            var timeParts = dateTimeParts[1].split(time_separator);
            if (timeParts && timeParts.length == 2) {
                strStartHour = timeParts[0];
                strStartMinutes = timeParts[1];
            }
        }
        if($("#date_start_minutes").length){
            strStartMinutes = $("#date_start_minutes").val();
        }
        //console.log("F:" + strStartDateFull);
        //console.log("D:" + strStartDate);
        //console.log("H:" + strStartHour);
        //console.log("M:" + strStartMinutes);
    };

    var fixEmptyScheduledDate = function () {
        if ($("#date_schedule_c").val() == '') {
            $("#date_schedule_c").val(strStartDateFull);
            $("#date_schedule_c_date").val(strStartDate);
            $("#date_schedule_c_hours").val(strStartHour);
            $("#date_schedule_c_minutes").val(strStartMinutes);

        }
    };

    var fixEmptyStartDate = function () {
        if ($("#date_start").val() == '') {
            $("#date_start").val(strStartDateFull);
            $("#date_start_date").val(strStartDate);
            $("#date_start_hours").val(strStartHour);
            $("#date_start_minutes").val(strStartMinutes);

        }
    };

    var cleanStartDateFields = function () {
        $("#date_start").val('');
        $("#date_start_date").val('');
        $("#date_start_hours").val('');
        $("#date_start_minutes").val('');
    };

    var hideStartDateFields = function(){
        $("td#date_start_label").hide();
        $("td#date_start_label + td").hide();
    };

    var showStartDateFields = function(){
        $("td#date_start_label").show();
        $("td#date_start_label + td").show();
    };

    /*
    var alignStartEndDateWithScheduledDate = function () {
        fixEmptyScheduledDate();
        $("#date_start").val($("#date_schedule_c").val());
        $("#date_start_date").val($("#date_schedule_c_date").val());
        $("#date_start_hours").val($("#date_schedule_c_hours").val());
        $("#date_start_minutes").val($("#date_schedule_c_minutes").val());
    };
    */


    var closeAndCreateSetStatus = function () {
        var url = window.location.search;
        var isCloseAndCreate = url.search("&isDuplicate=true&") != -1;
        //console.log("T2: " + isCloseAndCreate);

        if (isCloseAndCreate) {
            var $form = $("form#EditView");
            if ($form.length == 1) {
                var $status = $("#status");
                var $result = $("#result_c");

                if ($status.length == 1 ) {
                    $status.val('Planned');
                }
                if ($result.length == 1 ) {
                    $result.val('');
                }

                cleanStartDateFields();
            }
        }
    };


    var statusChangeHandler = function()
    {
        fixEmptyScheduledDate();
        if ($("select#status").val() == 'Planned') {
            //cleanStartDateFields();
            hideStartDateFields();
        } else {
            fixEmptyStartDate();
            showStartDateFields();
        }
    };

    var setScheduledDateChangeHandler = function () {
        $("input#date_schedule_c").on("change", statusChangeHandler);
    };

    var setStartDateChangeHandler = function () {
        $("input#date_start").on("change", statusChangeHandler);
    };

    var setStatusChangeHandler = function () {
        statusChangeHandler();
        $("select#status").on("change", statusChangeHandler);
    };


    $(document).ready(function () {

        setupDates();

        setStatusChangeHandler();


        /*
        closeAndCreateSetStatus();
        //setMinutesInModify();
        //
        setStatusChangeHandler();
        setScheduledDateChangeHandler();
        setStartDateChangeHandler();
        */
    });
})(jQuery);
