google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
            ['', ''],
            ["King's pawn (e4)", 46],
            ["Queen's pawn (d4)", 20],
            ["Knight to King 3 (Nf3)", 20],
            ["Queen's bishop pawn (c4)", 20],
            ['Other', 3]
            ]);

            var options = {
            legend: { position: 'none' },
            bars: 'horizontal', // Required for Material Bar Charts.
            axes: {
                x: {
                0: { side: 'top', label: ''} // Top x-axis.
                }
            },
            bar: { groupWidth: "" }
            };

            var chart = new google.charts.Bar(document.getElementById('top_x_div'));
            chart.draw(data, options);
        };
