@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="dashboard-main-box">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-sm-6 dashboard-box">
                <div class="dashboard-box-inner">
                    <div class="title-box d-flex align-items-center justify-content-center">
                        <img class="me-2" src="{{ asset('/assets_admin/images/total-user-profile.png')}}" alt="Total Users">
                        <h2 class="mb-0">Total Users</h2>
                    </div>
                    <p class="mb-0"><span>18.5K</span></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 dashboard-box">
                <div class="dashboard-box-inner">
                    <div class="title-box d-flex align-items-center justify-content-center">
                        <img class="me-2" src="{{ asset('/assets_admin/images/total-agents.png')}}" alt="Total Agents">
                        <h2 class="mb-0">Total Agents</h2>
                    </div>
                    <p class="mb-0"><span>8K</span></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 dashboard-box">
                <div class="dashboard-box-inner">
                    <div class="title-box d-flex align-items-center justify-content-center">
                        <img class="me-2" src="{{ asset('/assets_admin/images/total-hotal.png')}}" alt="Total Agents">
                        <h2 class="mb-0">Total Hotels</h2>
                    </div>
                    <p class="mb-0"><span>58K</span></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 dashboard-box">
                <div class="dashboard-box-inner">
                    <div class="title-box d-flex align-items-center justify-content-center">
                        <img class="me-2" src="{{ asset('/assets_admin/images/total-order.png')}}" alt="Total Agents">
                        <h2 class="mb-0">Total Orders</h2>
                    </div>
                    <p class="mb-0"><span>18.5K</span></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 dashboard-box">
                <div class="dashboard-box-inner">
                    <div class="title-box d-flex align-items-center justify-content-center">
                        <img class="me-2" src="{{ asset('/assets_admin/images/total-payment.png')}}" alt="Total Payment">
                        <h2 class="mb-0">Total Payment</h2>
                    </div>
                    <p class="mb-0"><span>18.5K</span></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 dashboard-box">
                <div class="dashboard-box-inner">
                    <div class="title-box d-flex align-items-center justify-content-center">
                        <img class="me-2" src="{{ asset('/assets_admin/images/cancelled-orders.png')}}" alt="Cancelled Orders">
                        <h2 class="mb-0">Cancelled Orders</h2>
                    </div>
                    <p class="mb-0"><span>18.5K</span></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 dashboard-box">
                <div class="dashboard-box-inner">
                    <div class="title-box d-flex align-items-center justify-content-center">
                        <img class="me-2" src="{{ asset('/assets_admin/images/completed-orders.png')}}" alt="Completed Orders">
                        <h2 class="mb-0">Completed Orders</h2>
                    </div>
                    <p class="mb-0"><span>18.5K</span></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 dashboard-box">
                <div class="dashboard-box-inner">
                    <div class="title-box d-flex align-items-center justify-content-center">
                        <img class="me-2" src="{{ asset('/assets_admin/images/agent-commission.png')}}" alt="Agent Commission">
                        <h2 class="mb-0">Agent Commission</h2>
                    </div>
                    <p class="mb-0"><span>18.5K</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="report-section">
        <div class="row">
            <div class="col-lg-6 col-md-6 report-block daily-report">
                <h2 class="section-block-title">Daily Report</h2>
                <div class="report-block-inner">
                    <div id="dailyreport"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 report-block weekly-report">
                <div class="section-block-flex-content d-flex align-items-center justify-content-between">
                    <h2 class="section-block-title">Weekly Report</h2>
                    <div class="custom-nice-select-dropdown">
                        <select class=" nice-select">
                            <option>Select</option>
                            <option>Hotels</option>
                            <option>Agents </option>
                            <option>Users</option>
                        </select>
                    </div>
                    <div class="chart-date-report">
                        <input type="hidden" name='datepicker' class="form-control" value="Select date" id="chartdatepicker" ng-required="true" placeholder="MM/DD/YYYY">
                        <img class="icon-calendar" src="{{ asset('/assets_admin/images/calendar-2.png')}}" alt="calendar">
                    </div>
                </div>
                <div class="report-block-inner">
                    <div id="weeklyreport"></div>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 report-block monthly-report">
                <div class="section-block-flex-content d-flex align-items-center justify-content-between">
                    <h2 class="section-block-title">Monthly Report</h2>
                    <div class="chart-date-report">
                        <input type="hidden" class="form-control" value="Select date" id="monthdatepicker" ng-required="true" placeholder="MM/DD/YYYY">
                        <img class="monthicon-calendar" src="{{ asset('/assets_admin/images/calendar-2.png')}}" alt="calendar">
                    </div>
                </div>
                <div class="report-block-inner">
                    <div id="monthlyreport"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 report-block yearly-report">
                <div class="section-block-flex-content d-flex align-items-center justify-content-between">
                    <h2 class="section-block-title">Yearly Report</h2>
                    <div class="chart-date-report">
                        <input type="hidden" class="form-control" value="Select date" id="yeardatepicker" ng-required="true" placeholder="MM/DD/YYYY">
                        <img class="yearicon-calendar" src="{{ asset('/assets_admin/images/calendar-2.png')}}" alt="calendar">
                    </div>
                </div>
                <div class="report-block-inner">
                    <div id="yearlyreport"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="report-section">
        <div class="row">
            <div class="col-lg-6 col-md-6 report-block revenue-report">
                <h2 class="section-block-title">Revenue Analysis</h2>
                <div class="report-block-inner">
                    <div id="revenue-analysis"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 report-block feedback-report">
                <h2 class="section-block-title">User Feedback Report</h2>
                <div class="report-block-inner">
                    <div id="userfeedback"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent') 
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Responsive.js"></script>

    <script type="text/javascript">
        $("#chartdatepicker").datepicker();
        $('.icon-calendar').click(function() {
            $("#chartdatepicker").focus();
        });
    
        $("#monthdatepicker").datepicker();
        $('.monthicon-calendar').click(function() {
            $("#monthdatepicker").focus();
        });
    
        $("#yeardatepicker").datepicker();
        $('.yearicon-calendar').click(function() {
            $("#yeardatepicker").focus();
        });
    
        $(".nice-select").niceSelect();
    
        am5.ready(function() {
    
          var myTheme = am5.Theme.new(root);
    
          myTheme.rule("Label").setAll({
            fill: am5.color(0x000000),
            fontSize: "11px"
          });
    
          var root = am5.Root.new("dailyreport");
    
          root.numberFormatter.set("numberFormat", "$#,###");
    
          root.setThemes([
            am5themes_Animated.new(root),
            myTheme
          ]);
    
          var chart = root.container.children.push(am5xy.XYChart.new(root, {
            panX: true,
            panY: true,
            wheelX: "panX",
            wheelY: "zoomX",
            pinchZoomX: true,
            paddingLeft:0,
            layout: root.verticalLayout
          }));
    
          chart.set("colors", am5.ColorSet.new(root, {
            colors: [
              am5.color(0x20485C),
              am5.color(0x20485C),
              am5.color(0x20485C),
              am5.color(0x20485C),
              am5.color(0x20485C),
              am5.color(0x20485C),
              am5.color(0x20485C)
            ]
          }))
    
          var xRenderer = am5xy.AxisRendererX.new(root, {
            minGridDistance: 30,
            minorGridEnabled: true
          });
    
          xRenderer.grid.template.setAll({
            location: 1
          })
    
          var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
            maxDeviation: 0.1,
            categoryField: "budget",
            renderer: xRenderer,
            tooltip: am5.Tooltip.new(root, {})
          }));
    
          var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
            maxDeviation: 0.1,
            min: 0,
            renderer: am5xy.AxisRendererY.new(root, {
              strokeOpacity: 0.1
            })
          }));
    
          var series = chart.series.push(am5xy.ColumnSeries.new(root, {
            name: "Series 1",
            xAxis: xAxis,
            yAxis: yAxis,
            valueYField: "value",
            categoryXField: "budget",
            tooltip: am5.Tooltip.new(root, {
              labelText: "{valueY}"
            }),
          }));
    
          var xRenderer = xAxis.get("renderer");
    
          xRenderer.labels.template.setAll({
            tooltipText: "{category}",
            oversizedBehavior: "wrap",
             textAlign: "center",
            maxWidth: 80,
             paddingTop:15,
          });
    
          xRenderer.labels.template.setup = function(target) {
            target.set("background", am5.Rectangle.new(root, {
              fill: am5.color(0x20485C),
              fillOpacity: 0
            }));
          };
    
          series.columns.template.setAll({
            tooltipY: 0,
            tooltipText: "{categoryX}: {valueY}",
            shadowOpacity: 0.1,
            shadowOffsetX: 2,
            shadowOffsetY: 2,
            shadowBlur: 1,
            strokeWidth: 0,
            stroke: am5.color(0x20485C),
            shadowColor: am5.color(0x20485C),
            cornerRadiusTL: 10,
            cornerRadiusTR: 10,
            width: 11,
            fillGradient: am5.LinearGradient.new(root, {
              stops: [
                {},
                { color: am5.color(0x20485C) }
              ]
            }),
            fillPattern: am5.GrainPattern.new(root, {
              maxOpacity: 0.15,
              density: 0.5,
              colors: [am5.color(0x20485C), am5.color(0x20485C), am5.color(0x20485C)]
            })
          });
    
          series.columns.template.states.create("hover", {
            shadowOpacity: 1,
            shadowBlur: 10,
            cornerRadiusTL: 10,
            cornerRadiusTR: 10
          })
    
          series.columns.template.adapters.add("fill", function (fill, target) {
            return chart.get("colors").getIndex(series.columns.indexOf(target));
          });
    
          // Set data
          var data = [{
            budget: "7",
            value: 100
          },{
            budget: "8",
            value: 200
          }, {
            budget: "9",
            value: 300
          }, {
            budget: "10",
            value: 400
          },{
            budget: "11",
            value: 500
          },{
            budget: "12",
            value: 600
          }];
    
          xAxis.data.setAll(data);
          series.data.setAll(data); 
    
          series.appear(1000);
          chart.appear(1000, 100);
    
      });
    
      am5.ready(function() {
    
        var myTheme = am5.Theme.new(root);
    
        myTheme.rule("Label").setAll({
          fill: am5.color(0x000000),
          fontSize: "11px"
        });
    
        var root = am5.Root.new("weeklyreport");
    
        root.numberFormatter.set("numberFormat", "$#,###");
    
        root.setThemes([
          am5themes_Animated.new(root),
          myTheme
        ]);
    
        var chart = root.container.children.push(am5xy.XYChart.new(root, {
          panX: true,
          panY: true,
          wheelX: "panX",
          wheelY: "zoomX",
          pinchZoomX: true,
          paddingLeft:0,
          layout: root.verticalLayout
        }));
    
        chart.set("colors", am5.ColorSet.new(root, {
          colors: [
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C)
          ]
        }))
    
        var xRenderer = am5xy.AxisRendererX.new(root, {
          minGridDistance: 30,
          minorGridEnabled: true
        });
    
        xRenderer.grid.template.setAll({
          location: 1
        })
    
        var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
          maxDeviation: 0.1,
          categoryField: "budget",
          renderer: xRenderer,
          tooltip: am5.Tooltip.new(root, {})
        }));
    
        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
          maxDeviation: 0.1,
          min: 0,
          renderer: am5xy.AxisRendererY.new(root, {
            strokeOpacity: 0.1
          })
        }));
    
        var series = chart.series.push(am5xy.ColumnSeries.new(root, {
          name: "Series 1",
          xAxis: xAxis,
          yAxis: yAxis,
          valueYField: "value",
          categoryXField: "budget",
          tooltip: am5.Tooltip.new(root, {
            labelText: "{valueY}"
          }),
        }));
    
        var xRenderer = xAxis.get("renderer");
    
        xRenderer.labels.template.setAll({
          tooltipText: "{category}",
          oversizedBehavior: "wrap",
           textAlign: "center",
          maxWidth: 80,
           paddingTop:15,
        });
    
        xRenderer.labels.template.setup = function(target) {
          target.set("background", am5.Rectangle.new(root, {
            fill: am5.color(0x20485C),
            fillOpacity: 0
          }));
        };
    
        series.columns.template.setAll({
          tooltipY: 0,
          tooltipText: "{categoryX}: {valueY}",
          shadowOpacity: 0.1,
          shadowOffsetX: 2,
          shadowOffsetY: 2,
          shadowBlur: 1,
          strokeWidth: 0,
          stroke: am5.color(0x20485C),
          shadowColor: am5.color(0x20485C),
          cornerRadiusTL: 10,
          cornerRadiusTR: 10,
          width: 11,
          fillGradient: am5.LinearGradient.new(root, {
            stops: [
              {},
              { color: am5.color(0x20485C) }
            ]
          }),
          fillPattern: am5.GrainPattern.new(root, {
            maxOpacity: 0.15,
            density: 0.5,
            colors: [am5.color(0x20485C), am5.color(0x20485C), am5.color(0x20485C)]
          })
        });
    
        series.columns.template.states.create("hover", {
          shadowOpacity: 1,
          shadowBlur: 10,
          cornerRadiusTL: 10,
          cornerRadiusTR: 10
        })
    
        series.columns.template.adapters.add("fill", function (fill, target) {
          return chart.get("colors").getIndex(series.columns.indexOf(target));
        });
    
        // Set data
        var data = [{
          budget: "Sun",
          value: 100
        },{
          budget: "Mon",
          value: 150
        }, {
          budget: "Tue",
          value: 350
        }, {
          budget: "Wed",
          value: 200
        },{
          budget: "Thu",
          value: 300
        },{
          budget: "Fri",
          value: 250
        },{
          budget: "Sat",
          value: 700
        }
    
        ];
    
        xAxis.data.setAll(data);
        series.data.setAll(data); 
    
        series.appear(1000);
        chart.appear(1000, 100);
      });
    
      am5.ready(function() {
    
        var myTheme = am5.Theme.new(root);
    
        myTheme.rule("Label").setAll({
          fill: am5.color(0x000000),
          fontSize: "11px"
        });
    
        var root = am5.Root.new("monthlyreport");
    
        root.numberFormatter.set("numberFormat", "$#,###");
    
        root.setThemes([
          am5themes_Animated.new(root),
          myTheme
        ]);
    
        var chart = root.container.children.push(am5xy.XYChart.new(root, {
          panX: true,
          panY: true,
          wheelX: "panX",
          wheelY: "zoomX",
          pinchZoomX: true,
          paddingLeft:0,
          layout: root.verticalLayout
        }));
    
        chart.set("colors", am5.ColorSet.new(root, {
          colors: [
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C)
          ]
        }))
    
        var xRenderer = am5xy.AxisRendererX.new(root, {
          minGridDistance: 30,
          minorGridEnabled: true
        });
    
        xRenderer.grid.template.setAll({
          location: 1
        })
    
        var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
          maxDeviation: 0.1,
          categoryField: "budget",
          renderer: xRenderer,
          tooltip: am5.Tooltip.new(root, {})
        }));
    
        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
          maxDeviation: 0.1,
          min: 0,
          renderer: am5xy.AxisRendererY.new(root, {
            strokeOpacity: 0.1
          })
        }));
    
        var series = chart.series.push(am5xy.ColumnSeries.new(root, {
          name: "Series 1",
          xAxis: xAxis,
          yAxis: yAxis,
          valueYField: "value",
          categoryXField: "budget",
          tooltip: am5.Tooltip.new(root, {
            labelText: "{valueY}"
          }),
        }));
    
        var xRenderer = xAxis.get("renderer");
    
        xRenderer.labels.template.setAll({
          tooltipText: "{category}",
          oversizedBehavior: "wrap",
           textAlign: "center",
          maxWidth: 80,
           paddingTop:15,
        });
    
        xRenderer.labels.template.setup = function(target) {
          target.set("background", am5.Rectangle.new(root, {
            fill: am5.color(0x20485C),
            fillOpacity: 0
          }));
        };
    
        series.columns.template.setAll({
          tooltipY: 0,
          tooltipText: "{categoryX}: {valueY}",
          shadowOpacity: 0.1,
          shadowOffsetX: 2,
          shadowOffsetY: 2,
          shadowBlur: 1,
          strokeWidth: 0,
          stroke: am5.color(0x20485C),
          shadowColor: am5.color(0x20485C),
          cornerRadiusTL: 10,
          cornerRadiusTR: 10,
          width: 11,
          fillGradient: am5.LinearGradient.new(root, {
            stops: [
              {},
              { color: am5.color(0x20485C) }
            ]
          }),
          fillPattern: am5.GrainPattern.new(root, {
            maxOpacity: 0.15,
            density: 0.5,
            colors: [am5.color(0x20485C), am5.color(0x20485C), am5.color(0x20485C)]
          })
        });
    
        series.columns.template.states.create("hover", {
          shadowOpacity: 1,
          shadowBlur: 10,
          cornerRadiusTL: 10,
          cornerRadiusTR: 10
        })
    
        series.columns.template.adapters.add("fill", function (fill, target) {
          return chart.get("colors").getIndex(series.columns.indexOf(target));
        });
    
        // Set data
        var data = [{
          budget: "5",
          value: 100
        },{
          budget: "10",
          value: 150
        }, {
          budget: "15",
          value: 350
        }, {
          budget: "20",
          value: 200
        },{
          budget: "25",
          value: 300
        },{
          budget: "30",
          value: 250
        } ];
    
        xAxis.data.setAll(data);
        series.data.setAll(data); 
    
        series.appear(1000);
        chart.appear(1000, 100);
      });
    
      am5.ready(function() {
    
        var myTheme = am5.Theme.new(root);
    
        myTheme.rule("Label").setAll({
          fill: am5.color(0x000000),
          fontSize: "11px"
        });
    
        var root = am5.Root.new("yearlyreport");
    
        root.numberFormatter.set("numberFormat", "$#,###");
    
        root.setThemes([
          am5themes_Animated.new(root),
          myTheme
        ]);
    
        var chart = root.container.children.push(am5xy.XYChart.new(root, {
          panX: true,
          panY: true,
          wheelX: "panX",
          wheelY: "zoomX",
          pinchZoomX: true,
          paddingLeft:0,
          layout: root.verticalLayout
        }));
    
        chart.set("colors", am5.ColorSet.new(root, {
          colors: [
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C),
            am5.color(0x20485C)
          ]
        }))
    
        var xRenderer = am5xy.AxisRendererX.new(root, {
          minGridDistance: 30,
          minorGridEnabled: true
        });
    
        xRenderer.grid.template.setAll({
          location: 1
        })
    
        var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
          maxDeviation: 0.1,
          categoryField: "budget",
          renderer: xRenderer,
          tooltip: am5.Tooltip.new(root, {})
        }));
    
        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
          maxDeviation: 0.1,
          min: 0,
          renderer: am5xy.AxisRendererY.new(root, {
            strokeOpacity: 0.1
          })
        }));
    
        var series = chart.series.push(am5xy.ColumnSeries.new(root, {
          name: "Series 1",
          xAxis: xAxis,
          yAxis: yAxis,
          valueYField: "value",
          categoryXField: "budget",
          tooltip: am5.Tooltip.new(root, {
            labelText: "{valueY}"
          }),
        }));
    
        var xRenderer = xAxis.get("renderer");
    
        xRenderer.labels.template.setAll({
          tooltipText: "{category}",
          oversizedBehavior: "wrap",
           textAlign: "center",
          maxWidth: 80,
           paddingTop:15,
        });
    
        xRenderer.labels.template.setup = function(target) {
          target.set("background", am5.Rectangle.new(root, {
            fill: am5.color(0x20485C),
            fillOpacity: 0
          }));
        };
    
        series.columns.template.setAll({
          tooltipY: 0,
          tooltipText: "{categoryX}: {valueY}",
          shadowOpacity: 0.1,
          shadowOffsetX: 2,
          shadowOffsetY: 2,
          shadowBlur: 1,
          strokeWidth: 0,
          stroke: am5.color(0x20485C),
          shadowColor: am5.color(0x20485C),
          cornerRadiusTL: 10,
          cornerRadiusTR: 10,
          width: 11,
          fillGradient: am5.LinearGradient.new(root, {
            stops: [
              {},
              { color: am5.color(0x20485C) }
            ]
          }),
          fillPattern: am5.GrainPattern.new(root, {
            maxOpacity: 0.15,
            density: 0.5,
            colors: [am5.color(0x20485C), am5.color(0x20485C), am5.color(0x20485C)]
          })
        });
    
        series.columns.template.states.create("hover", {
          shadowOpacity: 1,
          shadowBlur: 10,
          cornerRadiusTL: 10,
          cornerRadiusTR: 10
        })
    
        series.columns.template.adapters.add("fill", function (fill, target) {
          return chart.get("colors").getIndex(series.columns.indexOf(target));
        });
    
        // Set data
        var data = [{
          budget: "Jan",
          value: 100
        },{
          budget: "Fab",
          value: 150
        }, {
          budget: "Mar",
          value: 350
        }, {
          budget: "Apr",
          value: 200
        },{
          budget: "May",
          value: 300
        },{
          budget: "Jun",
          value: 250
        },{
          budget: "Jul",
          value: 350
        },{
          budget: "Aug",
          value: 500
        },{
          budget: "Sep",
          value: 300
        },{
          budget: "Oct",
          value: 250
        },{
          budget: "Nov",
          value: 420
        },{
          budget: "Dec",
          value: 500
        }];
    
        xAxis.data.setAll(data);
        series.data.setAll(data); 
    
        series.appear(1000);
        chart.appear(1000, 100);
      });
    
      /* revenue-analysis */
      var myTheme = am5.Theme.new(root);
    
      myTheme.rule("Label").setAll({
        fill: am5.color(0x000000),
        fontSize: "10px"
      });
    
      var root = am5.Root.new("revenue-analysis");
    
      root.numberFormatter.set("numberFormat", "$#,###");
    
      var responsive = am5themes_Responsive.newEmpty(root);
    
      responsive.addRule({
        relevant: am5themes_Responsive.widthM,
        applying: function() {
          chart.set("layout", root.verticalLayout);
          legend.setAll({
            y: null,
            centerY: null,
            x: am5.p0,
            centerX: am5.p0,
          });
        },
        removing: function() {
          chart.set("layout", root.horizontalLayout);
          legend.setAll({
            y: am5.p50,
            centerY: am5.p50,
            x: null,
            centerX: null
          });
        }
      });
    
      root.setThemes([
        am5themes_Animated.new(root),
        am5themes_Responsive.new(root),  
        myTheme,
        responsive
      ]);
    
      var chart = root.container.children.push( 
        am5percent.PieChart.new(root, {
          layout: root.verticalLayout
        }) 
      );
    
      var data = [{
        revenue: "Others",
        sales: 1212,
        sliceSettings: {
          fill: am5.color(0x274F63),
          stroke: am5.color(0x274F63)
        }
      }, {
        revenue: "Flight Booking",
        sales: 8569,
        sliceSettings: {
          fill: am5.color(0x20485C),
          stroke: am5.color(0x20485C)
        }
      }, {
        revenue: "Cars/Bus Booking",
        sales: 2874,
        sliceSettings: {
          fill: am5.color(0x173F53),
          stroke: am5.color(0x173F53)
        }
      }, {
        revenue: "Hotels Booking",
        sales: 8345,
        sliceSettings: {
          fill: am5.color(0x20485C),
          stroke: am5.color(0x20485C)
        }
      }];
    
      // Create series
      var series = chart.series.push(
        am5percent.PieSeries.new(root, {
          name: "Series",
          valueField: "sales",
          categoryField: "revenue"
        })
      );
    
      series.slices.template.setAll({
        templateField: "sliceSettings"
      });
    
      series.slices.template.set('tooltipText', '{category}: {value}');
      series.labels.template.set('text', '{category}: {value}');
    
      series.labels.template.setup = function(label, dataItem) {
        label.events.on("dataitemchanged", function(ev) {
          label.set("background", am5.RoundedRectangle.new(root, {
            fill: ev.target.dataItem.get("slice").get("fill")
          }));
        });
      }
    
      series.data.setAll(data);
    
      series.labels.template.setAll({
        fontSize: 10,
        fill: am5.color(0xffffff),
        text: "{category}",
        textType: "adjusted",
      })
    
      var legend = chart.children.push(am5.Legend.new(root, {
        width: am5.percent(60),
        centerX: am5.percent(50),
        x: am5.percent(50),
        paddingTop: 30,
        layout: am5.GridLayout.new(root, {
          maxColumns: 2,
          fixedWidthGrid: false
        })
      }) );
    
      legend.data.setAll(series.dataItems);
    
      /* User Feedback */
    
      var myTheme = am5.Theme.new(root);
    
      myTheme.rule("Label").setAll({
        fill: am5.color(0x000000),
        fontSize: "10px"
      });
    
      var root = am5.Root.new("userfeedback");
    
      var responsive = am5themes_Responsive.newEmpty(root);
    
      responsive.addRule({
        relevant: am5themes_Responsive.widthM,
        applying: function() {
          chart.set("layout", root.verticalLayout);
          legend.setAll({
            y: null,
            centerY: null,
            x: am5.p0,
            centerX: am5.p0,
            paddingBottom: 0
          });
        },
        removing: function() {
          chart.set("layout", root.horizontalLayout);
          legend.setAll({
            y: am5.p50,
            centerY: am5.p50,
            x: null,
            centerX: null
          });
        }
      });
    
      root.setThemes([
        am5themes_Animated.new(root),
        am5themes_Responsive.new(root),  
        myTheme,
        responsive
      ]);
    
      var chart = root.container.children.push( 
        am5percent.PieChart.new(root, {
          layout: root.verticalLayout
        }) 
      );
    
      var data = [{
        revenue: "Excellence",
        sales: 5,
        sliceSettings: {
          fill: am5.color(0x274F63),
          stroke: am5.color(0x274F63)
        }
      }, {
        revenue: "Bad",
        sales: 1,
        sliceSettings: {
          fill: am5.color(0x20485C),
          stroke: am5.color(0x20485C)
        }
      },{
        revenue: "Average",
        sales: 3,
        sliceSettings: {
          fill: am5.color(0x20485C),
          stroke: am5.color(0x20485C)
        }
      },{
        revenue: "Good",
        sales: 4,
        sliceSettings: {
          fill: am5.color(0x20485C),
          stroke: am5.color(0x20485C)
        }
      }];
    
      // Create series
      var series = chart.series.push(
        am5percent.PieSeries.new(root, {
          name: "Series",
          valueField: "sales",
          categoryField: "revenue"
        })
      );
    
      series.slices.template.setAll({
        templateField: "sliceSettings"
      });
    
      series.slices.template.set('tooltipText', '{category}: {value}');
      series.labels.template.set('text', '{category}: {value}');
    
      series.labels.template.setup = function(label, dataItem) {
        label.events.on("dataitemchanged", function(ev) {
          label.set("background", am5.RoundedRectangle.new(root, {
            fill: ev.target.dataItem.get("slice").get("fill")
          }));
        });
      }
    
      series.data.setAll(data);
    
      series.labels.template.setAll({
        fontSize: 9,
        fill: am5.color(0xffffff),
        text: "{category}",
        textType: "adjusted",
      })
    
      var legend = chart.children.push(am5.Legend.new(root, {
        width: am5.percent(60),
        centerX: am5.percent(50),
        x: am5.percent(50),
        paddingTop: 30,
        layout: am5.GridLayout.new(root, {
          maxColumns: 2,
          fixedWidthGrid: false
        })
      }) );
    
      legend.data.setAll(series.dataItems);
    </script>
@endsection