<script>
var dashctx = document.getElementById("dash_prkChart");
var dash_myprkChart = new Chart(dashctx, {
    type: 'bar',
    data: {

        labels: ["Prk. 1", "Prk. 2", "Prk. 3", "Prk. 4", "Prk. 5", "Prk. 6", "Prk. 7", "Prk. 8",
            "Prk. 9",
            "Prk. 10", "Prk. 11", "Prk. 12", "Prk. 13"
        ],

        datasets: [{
            label: " Population per Purok",
            data: [

                <?php echo $prk1_count['prk1Count']; ?>,
                <?php echo $prk2_count['prk2Count']; ?>,
                <?php echo $prk3_count['prk3Count'];?>,
                <?php echo $prk4_count['prk4Count'];?>,
                <?php echo $prk5_count['prk5Count'];?>,
                <?php echo $prk6_count['prk6Count'];?>,
                <?php echo $prk7_count['prk7Count'];?>,
                <?php echo $prk8_count['prk8Count'];?>,
                <?php echo $prk9_count['prk9Count'];?>,
                <?php echo $prk10_count['prk10Count'];?>,
                <?php echo $prk11_count['prk11Count'];?>,
                <?php echo $prk12_count['prk12Count'];?>,
                <?php echo $prk13_count['prk13Count'];?>

            ],

            backgroundColor: [
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgb(246, 66, 66)',
                'rgba(54, 162, 235)'
            ],

            borderColor: [
                'rgba(54, 162, 235)',
                'rgba(54, 162, 235)',
                'rgba(54, 162, 235)',
                'rgba(54, 162, 235)',
                'rgba(54, 162, 235)',
                'rgba(54, 162, 235)',
                'rgba(54, 162, 235)',
                'rgba(54, 162, 235)',
                'rgba(54, 162, 235)',
                'rgba(54, 162, 235)',
                'rgba(54, 162, 235)',
                'rgba(54, 162, 235)',
                'rgba(54, 162, 235)'

            ],

            borderColor: "transparent"
        }]
    },
    options: {

        responsive: false,
        maintainAspectRatio: false,


        legend: {
            position: 'top',
            display: true
        }


    },
});


var dash2ctx = document.getElementById("dash_VotersChart");
var dash_myVotersChart = new Chart(dash2ctx, {
    type: 'pie',
    data: {

        labels: ["Registered", "Not Registered"],

        datasets: [{
            label: "",
            data: [

                <?php echo $registered_votersCount['registeredVotersCount']; ?>,
                <?php echo $not_registered_votersCount['notRegisteredVotersCount']; ?>,


            ],

            backgroundColor: [
                // 'rgb(246, 66, 66)'
                '#f64242',
                'rgba(54, 162, 235)'
            ],

            borderColor: [
                'rgba(54, 162, 235)',
                'rgba(54, 162, 235)'

            ],

            borderColor: "transparent"
        }]
    },
    options: {

        responsive: false,
        maintainAspectRatio: false,


        legend: {
            position: 'bottom',
            display: true
        }


    },
});


var ctx2 = document.getElementById("ageChart");
var myageChart = new Chart(ctx2, {
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
                beginAtZero: false
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