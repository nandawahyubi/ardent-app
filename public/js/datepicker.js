function formatDate(date) {
    var d = new Date(date),
        year = d.getFullYear(),
        month = "" + (d.getMonth() + 1),
        day = "" + d.getDate();

    if (month.length < 2) month = "0" + month;
    if (day.length < 2) day = "0" + day;

    return [year, month, day].join("-");
}

function realtimeDate() {
    var date = new Date(document.getElementById("order_schedule").value);

    /*
      0 => Sunday
      1 => Monday
      2 => Tuesday
      3 => Wednesday
      4 => Thursday
      5 => Friday
      6 => Saturday
     */

    if (date.getDay() == 4) {
        date.setDate(date.getDate() + 4);
    } else if (date.getDay() == 5) {
        date.setDate(date.getDate() + 4);
    } else if (date.getDay() == 6) {
        date.setDate(date.getDate() + 4);
    } else {
        date.setDate(date.getDate() + 3);
    }

    document.getElementById("order_schedule_complate").value = formatDate(date);
}

$(function () {
    $("#order_schedule").datepicker({
        dateFormat: "yy-mm-dd",
        minDate: new Date(), //disable past date
        // showOtherMonths: true,
        // selectOtherMonths: true,
        // beforeShowDay: function(date) { //disable sunday and saturday
        //     var day = date.getDay();
        //     if (day == 0 || day == 6) {
        //       return [false];
        //     } else {
        //       return [true];
        //     }
        // }
        beforeShowDay: function (date) {
            //disable sunday
            var day = date.getDay();
            if (day == 0) {
                return [false];
            } else {
                return [true];
            }
        },
    });
});
