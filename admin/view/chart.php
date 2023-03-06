<script>
    /* global Chart:false */
    $(function () {
        'use strict'

        var ticksStyle = {
            fontColor: '#495057',
            fontStyle: 'bold'
        }

        var mode = 'index'
        var intersect = true

        var $salesChart = $('#sales-chart')
        // eslint-disable-next-line no-unused-vars
        <?php
        $arr = superadmin_Model::monthWithMoney();
        $data = array();
        $data1 = array();
        foreach ($arr as $item) {
            $month_name = date("M", mktime(0, 0, 0, $item[0], 10));
            $data[] = "'" . $month_name . "'";
            $data1[] = $item[1];
        }
        $month = strtoupper(implode(",", $data));
        $money = implode(",", $data1);
        ?>
        var salesChart = new Chart($salesChart, {
            type: 'bar',
            data: {
                labels: [<?= $month ?>],
                datasets: [
                    {
                        backgroundColor: '#007bff',
                        borderColor: '#007bff',
                        data: [<?= $money ?>]
                    },
                    {
                        backgroundColor: '#ced4da',
                        borderColor: '#ced4da',
                        data: [700, 1700, 2700, 2000, 1800, 1500, 2000]
                    }
                ]
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    mode: mode,
                    intersect: intersect
                },
                hover: {
                    mode: mode,
                    intersect: intersect
                },
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        // display: false,
                        gridLines: {
                            display: true,
                            lineWidth: '4px',
                            color: 'rgba(0, 0, 0, .2)',
                            zeroLineColor: 'transparent'
                        },
                        ticks: $.extend({
                            beginAtZero: true,

                            // Include a dollar sign in the ticks
                            callback: function (value) {
                                if (value >= 1000) {
                                    value /= 1000
                                    value += 'k'
                                }

                                return '$' + value
                            }
                        }, ticksStyle)
                    }],
                    xAxes: [{
                        display: true,
                        gridLines: {
                            display: false
                        },
                        ticks: ticksStyle
                    }]
                }
            }
        })

    })

    // lgtm [js/unused-local-variable]
</script>