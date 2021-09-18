<script>
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
                //'rgb(246, 66, 66)'
                '#f64242',
                '#F6F3F3'
                // 'rgb(54, 162, 235)'
                
            ],

            borderColor: [
                'rgb(54, 162, 235)',
                'rgb(54, 162, 235)'

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
</script>