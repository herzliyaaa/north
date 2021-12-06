<script>
var ctx = document.getElementById("weeklyChart");
var weekly = new Chart(ctx, {
    type: 'bar',
    data: {

        labels: [<?php echo $weekly_label['week']; ?>],

        datasets: [{
            label: "Number of residents",
            data: [

             
                <?php echo $weekly_sales['weeklySales']; ?>

            ],

            backgroundColor: [
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)'

            ],

            borderColor: [
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)'
            ],

            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },
        maintainAspectRatio: false,
        responsive: true,


        plugins: {
            legend: {
                position: 'top',
                display: true
            }

        }
    },
});



var monthctx = document.getElementById("monthlyChart");
var monthly = new Chart(monthctx, {
    type: 'bar',
    data: {

        labels: ["Child", "Adolescent", "Adult", "Senior"],

        datasets: [{
            label: "Number of residents",
            data: [

                <?php echo $age_group_count['childcnt']; ?>,
                <?php echo $age_group_count2['adolescentcnt']; ?>,
                <?php echo $age_group_count3['adultcnt']; ?>,
                <?php echo $age_group_count4['srcnt']; ?>

            ],

            backgroundColor: [
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)'

            ],

            borderColor: [
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)'
            ],

            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },
        maintainAspectRatio: false,
        responsive: true,


        plugins: {
            legend: {
                position: 'top',
                display: true
            }

        }
    },
});





</script>