! function(e) {
    "use strict";
    var a = function() {};
    a.prototype.createLineChart = function(e, a, r, t, o, i) {
        Morris.Line({
            element: e,
            data: a,
            xkey: r,
            ykeys: t,
            labels: o,
            hideHover: "auto",
            gridLineColor: "#eef0f2",
            resize: !0,
            lineColors: i
        })
    }, a.prototype.createDonutChart = function(e, a, r) {
        Morris.Donut({
            element: e,
            data: a,
            resize: !0,
            colors: r
        })
    }, a.prototype.init = function() {
        this.createLineChart("morris-line-example", [{
            y: "2012",
            a: 45,
            b: 65
        }, {
            y: "2013",
            a: 75,
            b: 95
        }, {
            y: "2014",
            a: 50,
            b: 40
        }, {
            y: "2015",
            a: 95,
            b: 65
        }, {
            y: "2016",
            a: 50,
            b: 40
        }, {
            y: "2017",
            a: 65,
            b: 75
        }, {
            y: "2018",
            a: 80,
            b: 90
        }], "y", ["a", "b"], ["Series A", "Series B"], ["#5985ee", "#46cd93"]);
        this.createDonutChart("morris-donut-example", [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }], ["#4bbbce", "#5985ee", "#46cd93"])
    }, e.Dashboard = new a, e.Dashboard.Constructor = a
}(window.jQuery),
function(e) {
    "use strict";
    window.jQuery.Dashboard.init()
}();