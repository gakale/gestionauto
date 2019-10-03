
<script>
    new Chart(document.getElementById("line-chart"), {
      type: 'line',
      data: {
        labels: ['jan','fev','mar','avr','mai','jui','juil','aou','sep','oct'],
        datasets: [{
            data: [25,114,3000,106,107,2000,133,1000,783,2478],
            label: "Africa",
            borderColor: "blue",

            fill: false
          }, {
            data: [0,350,411,5000,3000,809,947,1402,3700,5267],
            label: "Asia",
            borderColor: "#a106eb",
            fill: false
          }, {
            data: [5000,170,178,3000,203,276,408,547,675,734],
            label: "Europe",
            borderColor: "green",
            fill: false
          }, {
            data: [0,20,5000,16,24,7000,74,167,508,784],
            label: "Latin America",
                backgroundColor:"red",
                borderColor: "red",

            fill: false
          }, {
            data: [0,3,2000,2,7,3200,82,5000,312,5300],
            label: "North America",
            backgroundColor:"#c45850",
            borderColor: "#c45850",
            fill: false
          }
        ]
      },
      options: {
        title: {
          display: true,
          text: 'Evolution des coûts'
        }
      }

      });


    </script>
