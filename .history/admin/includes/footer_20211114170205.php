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
        let myChart = document.getElementById('myChart').getContext('2d');
        // Global Options
        Chart.defaults.global.defaultFontFamily = 'Lato';
        Chart.defaults.global.defaultFontSize = 18;
        Chart.defaults.global.defaultFontColor = '#777';
        let massPopChart = new Chart(myChart, {
        type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data:{
            labels: labels,
  datasets: [
    {
      label: 'Dataset 1',
      data: Utils.numbers(NUMBER_CFG),
      borderColor: Utils.CHART_COLORS.red,
      backgroundColor: Utils.transparentize(Utils.CHART_COLORS.red, 0.5),
      yAxisID: 'y',
    },
    {
      label: 'Dataset 2',
      data: Utils.numbers(NUMBER_CFG),
      borderColor: Utils.CHART_COLORS.blue,
      backgroundColor: Utils.transparentize(Utils.CHART_COLORS.blue, 0.5),
      yAxisID: 'y1',
    }
  ]
        },
        options:{
            title:{
            display:true,
            text:'Sales Analytics',
            fontSize:25
            },
            legend:{
            display:true,
            position:'right',
            labels:{
                fontColor:'#000'
            }
            },
            layout:{
            padding:{
                left:50,
                right:0,
                bottom:0,
                top:0
            }
            },
            tooltips:{
            enabled:true
            }
        }
        });
    </script>
    
</body>
</html>