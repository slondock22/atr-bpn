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
if ($.exists("#grafik_pengaduan_chart")) {
  var ctx1 = document.querySelector("#grafik_pengaduan_chart");
  var myChart1 = new Chart(ctx1, {
    type: "line",
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sept", "Okt","Nov","Des"],
      datasets: [{
          data: [200, 150, 130, 105, 100, 50, 80, 60, 90, 30, 20, 10, 7],
          backgroundColor: "rgba(0, 122, 255, 0.1)",
          borderColor: "#007aff",
          borderWidth: 3,
          lineTension: 0,
          pointBackgroundColor: "#fff",
          pointDotRadius: 10
        },
        {
          data: [50, 70, 100, 120, 80, 70, 60, 110, 90, 140, 150, 155],
          backgroundColor: "rgba(52, 199, 89, 0.1)",
          borderColor: "#34c759",
          borderWidth: 3,
          lineTension: 0,
          pointBackgroundColor: "#fff",
          pointDotRadius: 10
        },
        {
          data: [50, 50, 60, 70, 80, 90, 100, 40, 150, 200, 190, 180],
          backgroundColor: "rgba(169, 43, 171, 0.1)",
          borderColor: "#a92bab",
          borderWidth: 3,
          lineTension: 0,
          pointBackgroundColor: "#fff",
          pointDotRadius: 10
        },
        {
          data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 120, 150],
          backgroundColor: "rgba(210, 21, 43, 0.1)",
          borderColor: "#d2152b",
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


if ($.exists("#aduan_populer_chart")) {
  var ctx = document.querySelector("#aduan_populer_chart").getContext("2d");
  var myChart = new Chart(ctx, {
   type: 'bar',
    data: {
      labels: ["#SengketaTanah", "#PengadaanTanah", "#SertifikatTanah", "#InfoATRBPN", "#PerijinanTanah"],
      datasets: [{
        label: 'Aduan',
        data: [5, 7, 3, 8, 10],
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

$.get(base_url+"/statistik/kanwil",function(result){
  console.log(result);
    if ($.exists("#sla_kanwil_chart")) {
      var ctx = document.querySelector("#sla_kanwil_chart");
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Kanwil Jawa Timur", "Kanwil Maluku", "Kanwil Maluku", "Kanwil Kaltim", "Kanwil Jawa Barat", "Kanwil Jawa Tengah", "Kanwil Gorontalo", "Kanwil Lampung", "Kanwil Sumut", "Kanwil Sumbar"],
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

$.get(base_url+"/statistik/kanwil",function(result){
  console.log(result);
    if ($.exists("#sla_kantah_chart")) {
      var ctx = document.querySelector("#sla_kantah_chart");
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Kantah Surabaya", "Kantah Pringsewu", "Kantah Banten", "Kantah Luwuk", "Kantah Purwakarta", "Kantah Ambon", "Kantah Medan", "Kantah B.Lampung", "Kantah Tanggamus", "Kantah Solo"],
          datasets: [{
            label: 'Hari',
            data: [3, 2, 1, 6, 5, 4, 6, 2, 1, 6],
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


// Type3
if ($.exists("#aduan_terjawab_chart")) {
  var ctx3 = document.querySelector("#aduan_terjawab_chart").getContext("2d");
  var myChart3 = new Chart(ctx3, {
    type: "pie",
    data: {
      labels: ["Terjawab", "Sent"],
      datasets: [{
        backgroundColor: ["#007aff", "rgba(0, 0, 0, 0.1)"],
        hoverBackgroundColor: ["#007aff", "rgba(0, 0, 0, 0.1)"],
        data: [70, 30],
        borderWidth: 0,
        hoverBorderColor: ["#007aff", "rgba(0, 0, 0, 0.1)"],
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


