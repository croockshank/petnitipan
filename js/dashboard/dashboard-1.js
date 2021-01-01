(function ($) {
  "use strict";

  $("#activity").slimscroll({
    position: "right",
    size: "5px",
    height: "390px",
    color: "transparent",
  });
})(jQuery);

(function ($) {
  "use strict";

  $.getJSON("pages/dashboard/aktivitas-pengadopsian.php", function (result) {
    let ctx = document.getElementById("chart_widget_3");
    ctx.height = 130;
    new Chart(ctx, {
      type: "line",
      data: {
        labels: result.bulan,
        type: "line",
        defaultFontFamily: "Montserrat",
        datasets: [
          {
            data: result.jumlah,
            label: "Pengadopsian",
            backgroundColor: "transparent",
            borderColor: "#847DFA",
            borderWidth: 2,
            pointStyle: "circle",
            pointRadius: 5,
            pointBorderColor: "#847DFA",
            pointBackgroundColor: "#fff",
          },
        ],
      },
      options: {
        responsive: !0,
        maintainAspectRatio: true,
        tooltips: {
          mode: "index",
          titleFontSize: 12,
          titleFontColor: "#fff",
          bodyFontColor: "#fff",
          backgroundColor: "#000",
          titleFontFamily: "Montserrat",
          bodyFontFamily: "Montserrat",
          cornerRadius: 3,
          intersect: false,
        },
        legend: {
          display: true,
          position: "top",
          labels: {
            usePointStyle: true,
            fontFamily: "Montserrat",
          },
        },
        scales: {
          xAxes: [
            {
              display: false,
              gridLines: {
                display: false,
                drawBorder: false,
              },
              scaleLabel: {
                display: false,
                labelString: "Bulan",
              },
            },
          ],
          yAxes: [
            {
              display: false,
              gridLines: {
                display: false,
                drawBorder: false,
              },
              scaleLabel: {
                display: true,
                labelString: "Pengadopsian",
              },
            },
          ],
        },
        title: {
          display: false,
        },
      },
    });
    let sum = 0;
    $.each(result.jumlah, function(i, v){
      sum += Number(v)
    })
    $('#total-pengadopsian').text(sum)
  });
})(jQuery);

/*******************
Pignose Calender
*******************/
(function ($) {
  "use strict";

  $(".year-calendar").pignoseCalendar({
    theme: "blue",
  }),
    $("input.calendar").pignoseCalendar({
      format: "YYYY-MM-DD",
    });
})(jQuery);
