$.exists = function(selector) {
  return $(selector).length > 0;
};

/* Line chart Variable */
var lineChartToolTips = {
  displayColors: false,
  mode: "nearest",
  intersect: false,
  position: "nearest",
  xPadding: 8,
  yPadding: 8,
  caretPadding: 8,
  backgroundColor: "#fff",
  cornerRadius: 4,
  titleFontSize: 13,
  titleFontStyle: "normal",
  bodyFontSize: 13,
  titleFontColor: "#222",
  bodyFontColor: "rgba(0, 0, 0, 0.7)",
  borderWidth: 1,
  borderColor: "rgba(0, 0, 0, 0.1)"
}
var scalesYaxes = [{
  ticks: {
    fontSize: 14,
    fontColor: "rgba(0, 0, 0, 0.4)",
    padding: 15,
    beginAtZero: true,
    autoSkip: false,
    maxTicksLimit: 4
  },
  gridLines: {
    color: "rgba(0, 0, 0, 0.1)",
    zeroLineWidth: 1,
    zeroLineColor: "transparent",
    drawBorder: false,
    tickMarkLength: 0
  }
}]
var scalesXaxes = [{
  ticks: {
    fontSize: 14,
    fontColor: "rgba(0, 0, 0, 0.4)",
    padding: 5,
    beginAtZero: true,
    autoSkip: false,
    maxTicksLimit: 4
  },
  gridLines: {
    display: false
  }
}];
/* End Line chart Variable */


// Type8
$.get(base_url+"/statistikjs/pengaduan",function(result){
  console.log(result);
    if ($.exists("#grafik_pengaduan_chart")) {
      var ctx1 = document.querySelector("#grafik_pengaduan_chart");
      var myChart1 = new Chart(ctx1, {
        type: "line",
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sept", "Okt","Nov","Des"],
          datasets: [{
              data: result.facebook,
              backgroundColor: "rgba(0, 122, 255, 0.1)",
              borderColor: "#007aff",
              borderWidth: 3,
              lineTension: 0,
              pointBackgroundColor: "#fff",
              pointDotRadius: 10
            },
            {
              data: result.twitter,
              backgroundColor: "rgba(52, 199, 89, 0.1)",
              borderColor: "#34c759",
              borderWidth: 3,
              lineTension: 0,
              pointBackgroundColor: "#fff",
              pointDotRadius: 10
            },
            {
              data: result.instagram,
              backgroundColor: "rgba(169, 43, 171, 0.1)",
              borderColor: "#a92bab",
              borderWidth: 3,
              lineTension: 0,
              pointBackgroundColor: "#fff",
              pointDotRadius: 10
            },
            {
              data: result.youtube,
              backgroundColor: "rgba(210, 21, 43, 0.1)",
              borderColor: "#d2152b",
              borderWidth: 3,
              lineTension: 0,
              pointBackgroundColor: "#fff",
              pointDotRadius: 10
            },
            {
              data: result.email,
              backgroundColor: "rgba(255, 219, 20, 0.1)",
              borderColor: "#faff00",
              borderWidth: 3,
              lineTension: 0,
              pointBackgroundColor: "#fff",
              pointDotRadius: 10
            }
          ]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: false,
          tooltips: lineChartToolTips,
          scales: {
            yAxes: scalesYaxes,
            xAxes: scalesXaxes
          },
          elements: {
            point: {
              radius: 0
            }
          }
        }
      });
    }
});

$.get(base_url+"/statistikjs/aduanpopuler",function(result){
  console.log(result);
if ($.exists("#aduan_populer_chart")) {
  var ctx = document.querySelector("#aduan_populer_chart").getContext("2d");
  var myChart = new Chart(ctx, {
   type: 'bar',
    data: {
	labels: result.labels,
      datasets: [{
        label: 'Aduan',
        data: result.total,
        backgroundColor: ['#5856d6', '#5856d6', '#5856d6', '#5856d6', '#5856d6'],
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      legend: false,
      tooltips: {
        displayColors: false,
        mode: "nearest",
        intersect: false,
        position: "nearest",
        xPadding: 8,
        yPadding: 8,
        caretPadding: 8,
        backgroundColor: "#fff",
        cornerRadius: 4,
        titleFontSize: 13,
        titleFontStyle: "normal",
        bodyFontSize: 13,
        titleFontColor: "#222",
        bodyFontColor: "rgba(0, 0, 0, 0.7)",
        borderWidth: 1,
        borderColor: "rgba(0, 0, 0, 0.1)",
        callbacks: {
          // use label callback to return the desired label
          label: function(tooltipItem, data) {
            return tooltipItem.xLabel + " " + tooltipItem.yLabel + " Aduan";
          },
          // remove title
          title: function(tooltipItem, data) {
            return;
          }
        }
      },
      scales: {
        yAxes: [{
          position: "left",
          ticks: {
            fontSize: 14,
            fontColor: "rgba(0, 0, 0, 0.4)",
            padding: 15,
            autoSkip: false,
            maxTicksLimit: 6,
            beginAtZero: true,
            steps: 5,
            stepValue: 5,
            max: 20
          },
          gridLines: {
            color: "rgba(0, 0, 0, 0.1)",
            zeroLineWidth: 0,
            zeroLineColor: "transparent",
            drawBorder: false
              }
            }],
            xAxes: scalesXaxes
          },
          elements: {
            point: {
              radius: 0
            }
          }
        }
      });
    }
});

$.get(base_url+"/statistikjs/kanwil",function(result){
  console.log(result);
    if ($.exists("#sla_kanwil_chart")) {
      var ctx = document.querySelector("#sla_kanwil_chart");
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [],
          datasets: [{
            label: 'Hari',
            data: result,
            backgroundColor: ['#007aff', '#5ac8fa', '#ffcc00', '#ff9500', '#ff3b30', '#007aff', '#5ac8fa', '#ffcc00', '#ff9500', '#ff3b30'],
            hoverBackgroundColor: ['#007aff', '#5ac8fa', '#ffcc00', '#ff9500', '#ff3b30', '#007aff', '#5ac8fa', '#ffcc00', '#ff9500', '#ff3b30'],
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: false,
          tooltips: {
            displayColors: false,
            mode: "nearest",
            intersect: false,
            position: "nearest",
            xPadding: 8,
            yPadding: 8,
            caretPadding: 8,
            backgroundColor: "#fff",
            cornerRadius: 4,
            titleFontSize: 13,
            titleFontStyle: "normal",
            bodyFontSize: 13,
            titleFontColor: "#222",
            bodyFontColor: "rgba(0, 0, 0, 0.7)",
            borderWidth: 1,
            borderColor: "rgba(0, 0, 0, 0.1)",
            callbacks: {
              // use label callback to return the desired label
              label: function(tooltipItem, data) {
                return tooltipItem.xLabel + " " + tooltipItem.yLabel + " Hari";
              },
              // remove title
              title: function(tooltipItem, data) {
                return;
              }
            }
          },
          scales: {
            yAxes: [{
              position: "left",
              ticks: {
                fontSize: 14,
                fontColor: "rgba(0, 0, 0, 0.4)",
                padding: 15,
                autoSkip: false,
                maxTicksLimit: 6,
                beginAtZero: true,
                steps: 5,
                stepValue: 5,
                max: 20
              },
              gridLines: {
                color: "rgba(0, 0, 0, 0.1)",
                zeroLineWidth: 0,
                zeroLineColor: "transparent",
                drawBorder: false
              }
            }],
            xAxes: scalesXaxes
          },
          elements: {
            point: {
              radius: 0
            }
          }
        }
      });
    }
    /* End Line Chart2 Initialize */

})
// Type 11

$.get(base_url+"/statistikjs/kantah",function(result){
  console.log(result);
    if ($.exists("#sla_kantah_chart")) {
      var ctx = document.querySelector("#sla_kantah_chart");
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [],
          datasets: [{
            label: 'Hari',
            data: result,
            backgroundColor: ['#007aff', '#5ac8fa', '#ffcc00', '#ff9500', '#ff3b30', '#007aff', '#5ac8fa', '#ffcc00', '#ff9500', '#ff3b30'],
            hoverBackgroundColor: ['#007aff', '#5ac8fa', '#ffcc00', '#ff9500', '#ff3b30', '#007aff', '#5ac8fa', '#ffcc00', '#ff9500', '#ff3b30'],
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: false,
          tooltips: {
            displayColors: false,
            mode: "nearest",
            intersect: false,
            position: "nearest",
            xPadding: 8,
            yPadding: 8,
            caretPadding: 8,
            backgroundColor: "#fff",
            cornerRadius: 4,
            titleFontSize: 13,
            titleFontStyle: "normal",
            bodyFontSize: 13,
            titleFontColor: "#222",
            bodyFontColor: "rgba(0, 0, 0, 0.7)",
            borderWidth: 1,
            borderColor: "rgba(0, 0, 0, 0.1)",
            callbacks: {
              // use label callback to return the desired label
              label: function(tooltipItem, data) {
                return tooltipItem.xLabel + " " + tooltipItem.yLabel + " Hari";
              },
              // remove title
              title: function(tooltipItem, data) {
                return;
              }
            }
          },
          scales: {
            yAxes: [{
              position: "left",
              ticks: {
                fontSize: 14,
                fontColor: "rgba(0, 0, 0, 0.4)",
                padding: 15,
                autoSkip: false,
                maxTicksLimit: 6,
                beginAtZero: true,
                steps: 5,
                stepValue: 5,
                max: 20
              },
              gridLines: {
                color: "rgba(0, 0, 0, 0.1)",
                zeroLineWidth: 0,
                zeroLineColor: "transparent",
                drawBorder: false
              }
            }],
            xAxes: scalesXaxes
          },
          elements: {
            point: {
              radius: 0
            }
          }
        }
      });
    }
    /* End Line Chart2 Initialize */
  });


$.get(base_url+"/statistikjs/aduanterjawab",function(result){
  console.log(result);
    if ($.exists("#aduan_terjawab_chart")) {
      var ctx3 = document.querySelector("#aduan_terjawab_chart").getContext("2d");
      var myChart3 = new Chart(ctx3, {
        type: "pie",
        data: {
          labels: ["Belum Terjawab","Terjawab"],
          datasets: [{
            backgroundColor: ["rgba(0, 0, 0, 0.1)", "#007aff",],
            hoverBackgroundColor: ["rgba(0, 0, 0, 0.1)", "#007aff",],
            data: result,
            borderWidth: 0,
            hoverBorderColor: ["rgba(0, 0, 0, 0.1)","#007aff"],
          }]
        },
        options: {
          cutoutPercentage: 90,
          legend: false,
          tooltips: lineChartToolTips
        }
      });
    }
    /* End Line Chart3 Initialize */
});

