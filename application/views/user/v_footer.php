
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<footer class="footer bg-white">
  <div class="container-fluid clearfix">
    <span class=" d-block text-center text-sm-left d-sm-inline-block">Copyright © Simoneva <?= date('Y'); ?> All Right Reserved.</span>

  </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

<!-- <script type="text/javascript">
      coba();
      function coba(){
        swal({
           title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  buttons: false,
showConfirmButton: false,
  timer: "5000"
        });
      }
    </script>-->
<!-- container-scroller -->
<!-- plugins:js -->


<script src="<?= base_url('assets/template/back/assets') ?>/vendors/js/vendor.bundle.base.js"></script>
<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>

<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base_url('assets/template/back/assets') ?>/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url('assets/template/back/assets') ?>/js/off-canvas.js"></script>
<script src="<?= base_url('assets/template/back/assets') ?>/js/hoverable-collapse.js"></script>
<script src="<?= base_url('assets/template/back/assets') ?>/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?= base_url('assets/template/back/assets') ?>/js/dashboard.js"></script>
<script src="<?= base_url('assets/template/back/assets') ?>/js/todolist.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<!-- End custom js for this page -->

<script>
  function myFunction1() {
    var dots = document.getElementByClass("dots1");
    var moreText = document.getElementByClass("more");
    var btnText = document.getElementByClass("myBtn");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "<i class='mdi mdi-eye'></i> Lihat Deskripsi";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "<i class='mdi mdi-eye-off'></i> Tutup Deskripsi";
      moreText.style.display = "inline";
    }
  }

  function myFunction2() {
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("myBtn2");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "<i class='mdi mdi-eye'></i> Lihat Deskripsi";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "<i class='mdi mdi-eye-off'></i> Tutup Deskripsi";
      moreText.style.display = "inline";
    }
  }

  function myFunction3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("myBtn3");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "<i class='mdi mdi-eye'></i> Lihat Deskripsi";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "<i class='mdi mdi-eye-off'></i> Tutup Deskripsi";
      moreText.style.display = "inline";
    }
  }

  function myFunction4() {
    var dots = document.getElementById("dots4");
    var moreText = document.getElementById("more4");
    var btnText = document.getElementById("myBtn4");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "<i class='mdi mdi-eye'></i> Lihat Deskripsi";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "<i class='mdi mdi-eye-off'></i> Tutup Deskripsi";
      moreText.style.display = "inline";
    }
  }

  function myFunction5() {
    var dots = document.getElementById("dots5");
    var moreText = document.getElementById("more5");
    var btnText = document.getElementById("myBtn5");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "<i class='mdi mdi-eye'></i> Lihat Deskripsi";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "<i class='mdi mdi-eye-off'></i> Tutup Deskripsi";
      moreText.style.display = "inline";
    }
  }


  (function($) {
    'use strict';
    $(function() {
      $('.file-upload-browse').on('click', function() {
        var file = $(this).parent().parent().parent().find('.file-upload-default');
        file.trigger('click');
      });
      $('.file-upload-default').on('change', function() {
        $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
      });
    });
  })(jQuery);
  $(document).ready(function() {
    $('#tabel5s').DataTable({
      "responsive": true
    });
  });
  $(document).ready(function() {
    $('#tablearea').DataTable();
  });
  $(document).ready(function() {
    $('#tablekaarea').DataTable();
  });
  $(document).ready(function() {
    $('#tableaudit1').DataTable();
  });
  $(document).ready(function() {
    $('#tableaudit2').DataTable();
  });
  $(document).ready(function() {
    $('#tableaudit3').DataTable();
  });
  $(document).ready(function() {
    $('#tableaudit4').DataTable();
  });
  $(document).ready(function() {
    $('#tableaudit5').DataTable();
  });


  $(function() {
    /* ChartJS
     * -------
     * Data and config for chartjs
     */



    'use strict';
    var data = {
      // DISINI THUN
      labels: ["2013", "2014", "2014", "2015", "2016", "2017"],
      datasets: [{
        label: '# of Votes',
        // ISI NILAIIIIIIIIIIIIII
        data: [10, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1,
        fill: false
      }]
    };
    var dataDark = {
      labels: ["2013", "2014", "2014", "2015", "2016", "2017"],
      datasets: [{
        label: '# of Votes',
        data: [10, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1,
        fill: false
      }]
    };
    var multiLineData = {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [{
          label: 'Dataset 1',
          data: [12, 19, 3, 5, 2, 3],
          borderColor: [
            '#587ce4'
          ],
          borderWidth: 2,
          fill: false
        },
        {
          label: 'Dataset 2',
          data: [5, 23, 7, 12, 42, 23],
          borderColor: [
            '#ede190'
          ],
          borderWidth: 2,
          fill: false
        },
        {
          label: 'Dataset 3',
          data: [15, 10, 21, 32, 12, 33],
          borderColor: [
            '#f44252'
          ],
          borderWidth: 2,
          fill: false
        }
      ]
    };
    var options = {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      },
      legend: {
        display: false
      },
      elements: {
        point: {
          radius: 0
        }
      }

    };
    var optionsDark = {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          },
          gridLines: {
            color: '#322f2f',
            zeroLineColor: '#322f2f'
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero: true
          },
          gridLines: {
            color: '#322f2f',
          }
        }],
      },
      legend: {
        display: false
      },
      elements: {
        point: {
          radius: 0
        }
      }

    };
    var doughnutPieData = {
      datasets: [{
        data: [30, 40, 30],
        backgroundColor: [
          'rgba(255, 99, 132, 0.5)',
          'rgba(54, 162, 235, 0.5)',
          'rgba(255, 206, 86, 0.5)',
          'rgba(75, 192, 192, 0.5)',
          'rgba(153, 102, 255, 0.5)',
          'rgba(255, 159, 64, 0.5)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
      }],

      // These labels appear in the legend and in the tooltips when hovering different arcs
      labels: [
        'Pink',
        'Blue',
        'Yellow',
      ]
    };
    var doughnutPieOptions = {
      responsive: true,
      animation: {
        animateScale: true,
        animateRotate: true
      }
    };
    var areaData = {
      labels: ["2013", "2014", "2015", "2016", "2017"],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1,
        fill: true, // 3: no fill
      }]
    };

    var areaDataDark = {
      labels: ["2013", "2014", "2015", "2016", "2017"],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1,
        fill: true, // 3: no fill
      }]
    };

    var areaOptions = {
      plugins: {
        filler: {
          propagate: true
        }
      }
    }

    var areaOptionsDark = {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          },
          gridLines: {
            color: '#322f2f',
            zeroLineColor: '#322f2f'
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero: true
          },
          gridLines: {
            color: '#322f2f',
          }
        }],
      },
      plugins: {
        filler: {
          propagate: true
        }
      }
    }

    var multiAreaData = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
          label: 'Facebook',
          data: [8, 11, 13, 15, 12, 13, 16, 15, 13, 19, 11, 14],
          borderColor: ['rgba(255, 99, 132, 0.5)'],
          backgroundColor: ['rgba(255, 99, 132, 0.5)'],
          borderWidth: 1,
          fill: true
        },
        {
          label: 'Twitter',
          data: [7, 17, 12, 16, 14, 18, 16, 12, 15, 11, 13, 9],
          borderColor: ['rgba(54, 162, 235, 0.5)'],
          backgroundColor: ['rgba(54, 162, 235, 0.5)'],
          borderWidth: 1,
          fill: true
        },
        {
          label: 'Linkedin',
          data: [6, 14, 16, 20, 12, 18, 15, 12, 17, 19, 15, 11],
          borderColor: ['rgba(255, 206, 86, 0.5)'],
          backgroundColor: ['rgba(255, 206, 86, 0.5)'],
          borderWidth: 1,
          fill: true
        }
      ]
    };

    var multiAreaOptions = {
      plugins: {
        filler: {
          propagate: true
        }
      },
      elements: {
        point: {
          radius: 0
        }
      },
      scales: {
        xAxes: [{
          gridLines: {
            display: false
          }
        }],
        yAxes: [{
          gridLines: {
            display: false
          }
        }]
      }
    }

    var scatterChartData = {
      datasets: [{
          label: 'First Dataset',
          data: [{
              x: -10,
              y: 0
            },
            {
              x: 0,
              y: 3
            },
            {
              x: -25,
              y: 5
            },
            {
              x: 40,
              y: 5
            }
          ],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)'
          ],
          borderWidth: 1
        },
        {
          label: 'Second Dataset',
          data: [{
              x: 10,
              y: 5
            },
            {
              x: 20,
              y: -30
            },
            {
              x: -25,
              y: 15
            },
            {
              x: -10,
              y: 5
            }
          ],
          backgroundColor: [
            'rgba(54, 162, 235, 0.2)',
          ],
          borderColor: [
            'rgba(54, 162, 235, 1)',
          ],
          borderWidth: 1
        }
      ]
    }

    var scatterChartDataDark = {
      datasets: [{
          label: 'First Dataset',
          data: [{
              x: -10,
              y: 0
            },
            {
              x: 0,
              y: 3
            },
            {
              x: -25,
              y: 5
            },
            {
              x: 40,
              y: 5
            }
          ],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)'
          ],
          borderWidth: 1
        },
        {
          label: 'Second Dataset',
          data: [{
              x: 10,
              y: 5
            },
            {
              x: 20,
              y: -30
            },
            {
              x: -25,
              y: 15
            },
            {
              x: -10,
              y: 5
            }
          ],
          backgroundColor: [
            'rgba(54, 162, 235, 0.2)',
          ],
          borderColor: [
            'rgba(54, 162, 235, 1)',
          ],
          borderWidth: 1
        }
      ]
    }

    var scatterChartOptions = {
      scales: {
        xAxes: [{
          type: 'linear',
          position: 'bottom'
        }]
      }
    }

    var scatterChartOptionsDark = {
      scales: {
        xAxes: [{
          type: 'linear',
          position: 'bottom',
          gridLines: {
            color: '#322f2f',
            zeroLineColor: '#322f2f'
          }
        }],
        yAxes: [{
          gridLines: {
            color: '#322f2f',
            zeroLineColor: '#322f2f'
          }
        }]
      }
    }
    // Get context with jQuery - using jQuery's .get() method.
    if ($("#barChart").length) {
      var barChartCanvas = $("#barChart").get(0).getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: data,
        options: options
      });
    }
    if ($("#barChart2").length) {
      var barChartCanvas = $("#barChart2").get(0).getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var barChart2 = new Chart(barChartCanvas, {
        type: 'bar',
        data: data,
        options: options
      });
    }

    if ($("#barChartDark").length) {
      var barChartCanvasDark = $("#barChartDark").get(0).getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var barChartDark = new Chart(barChartCanvasDark, {
        type: 'bar',
        data: dataDark,
        options: optionsDark
      });
    }

    if ($("#lineChart").length) {
      var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
      var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: data,
        options: options
      });
    }

    if ($("#lineChartDark").length) {
      var lineChartCanvasDark = $("#lineChartDark").get(0).getContext("2d");
      var lineChartDark = new Chart(lineChartCanvasDark, {
        type: 'line',
        data: dataDark,
        options: optionsDark
      });
    }

    if ($("#linechart-multi").length) {
      var multiLineCanvas = $("#linechart-multi").get(0).getContext("2d");
      var lineChart = new Chart(multiLineCanvas, {
        type: 'line',
        data: multiLineData,
        options: options
      });
    }

    if ($("#areachart-multi").length) {
      var multiAreaCanvas = $("#areachart-multi").get(0).getContext("2d");
      var multiAreaChart = new Chart(multiAreaCanvas, {
        type: 'line',
        data: multiAreaData,
        options: multiAreaOptions
      });
    }

    if ($("#doughnutChart").length) {
      var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
      var doughnutChart = new Chart(doughnutChartCanvas, {
        type: 'doughnut',
        data: doughnutPieData,
        options: doughnutPieOptions
      });
    }

    if ($("#pieChart").length) {
      var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
      var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: doughnutPieData,
        options: doughnutPieOptions
      });
    }

    if ($("#areaChart").length) {
      var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
      var areaChart = new Chart(areaChartCanvas, {
        type: 'line',
        data: areaData,
        options: areaOptions
      });
    }

    if ($("#areaChartDark").length) {
      var areaChartCanvas = $("#areaChartDark").get(0).getContext("2d");
      var areaChart = new Chart(areaChartCanvas, {
        type: 'line',
        data: areaDataDark,
        options: areaOptionsDark
      });
    }

    if ($("#scatterChart").length) {
      var scatterChartCanvas = $("#scatterChart").get(0).getContext("2d");
      var scatterChart = new Chart(scatterChartCanvas, {
        type: 'scatter',
        data: scatterChartData,
        options: scatterChartOptions
      });
    }

    if ($("#scatterChartDark").length) {
      var scatterChartCanvas = $("#scatterChartDark").get(0).getContext("2d");
      var scatterChart = new Chart(scatterChartCanvas, {
        type: 'scatter',
        data: scatterChartDataDark,
        options: scatterChartOptionsDark
      });
    }

    if ($("#browserTrafficChart").length) {
      var doughnutChartCanvas = $("#browserTrafficChart").get(0).getContext("2d");
      var doughnutChart = new Chart(doughnutChartCanvas, {
        type: 'doughnut',
        data: browserTrafficData,
        options: doughnutPieOptions
      });
    }
  });
</script>
</body>

</html>