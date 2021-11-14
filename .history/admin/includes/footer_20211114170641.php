</div>  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <script>
        const alertNotification = document.querySelector('.alert')
        const getText = document.querySelectorAll('.textfill')
        function deleteAlert() {
            alertNotification.style.display = 'none';
        }
        getText.forEach( el => {
            if(el.innerText == 'User' || el.innerText == 'Ẩn' ){
               el.classList.add('fillred')
            }
        })
        var data = {
    "datasets": [
      {
        "backgroundColor": "rgb(156, 39, 176)",
        "borderColor": "rgb(156, 39, 176)",
        "fill": false,
        "data": [
          10,
          120,
          80,
          134
        ],
        "id": "amount",
        "label": "Purchase amount (USD)",
				"yAxisID":"left"
      },
      {
        "backgroundColor": "rgb(39, 176, 200)",
        "borderColor": "rgb(39, 176, 200)",
        "fill": false,
        "data": [
          300,
          -1200,
          500,
          -340
        ],
        "id": "amount",
        "label": "Purchase amount (USD)",
				"yAxisID":"right"

      }
    ],
    "labels": [
      "2017-01-02",
      "2017-04-02",
      "2017-07-02",
      "2018-01-02"
    ]
  };
var options = {
    "elements": {
      "rectangle": {
        "borderWidth": 2
      }
    },
    "layout": {
      "padding": 0
    },
    "legend": {
      "display": true,
      "labels": {
        "boxWidth": 16
      }
    },
    "maintainAspectRatio": false,
    "responsive": true,
    "scales": {
      "xAxes": [
        {
          "gridLines": {
            "display": false
          },
          "scaleLabel": {
            "display": true,
            "labelString": "Date"
          },
          "stacked": false,
          "ticks": {
            "autoSkip": true,
            "beginAtZero": true
          },
          "time": {
            "tooltipFormat": "[Q]Q - YYYY",
            "unit": "quarter"
          },
          "type": "time"
        }
      ],
      "yAxes": [
        {
          "scaleLabel": {
            "display": true,
            "labelString": "Purchase amount (USD)"
          },
					"id": "left",
          "stacked": false,
          "ticks": {
            "beginAtZero": true
          }
        },
        {
          "scaleLabel": {
            "display": true,
            "labelString": "Purchase count"
          },
					"id": "right",
					"position": "right",
          "stacked": false,
          "ticks": {
            "beginAtZero": true
          }
        }
      ]
    },
    "title": {
      "display": false
    },
    "tooltips": {
      "intersect": false,
      "mode": "index",
      "position": "nearest",
      "callbacks": {}
    }
  }
var type = "line";

var myChart = new Chart(document.getElementById("myChart").getContext('2d'), {options, data, type});
var myChart2 = new Chart(document.getElementById("myChart2").getContext('2d'), {
	options: {
		...options,
		scales: {
			...options.scales,
			yAxes: [
					{
						"scaleLabel": {
							"display": true,
							"labelString": "Purchase amount (USD)"
						},
						"id": "left",
						"stacked": false,
						"ticks": {
							"beginAtZero": true,
							suggestedMin: -200,
							suggestedMax: 200
						}
					},
					{
						"scaleLabel": {
							"display": true,
							"labelString": "Purchase count"
						},
						"id": "right",
						"position": "right",
						"stacked": false,
						"ticks": {
							"beginAtZero": true,
							suggestedMin: -2000,
							suggestedMax: 2000
						}
					}
			]
		}
	},
	data,
	type
});
    </script>
    
</body>
</html>