</div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
    <script src="./js/toast.js"></script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
    <script>
        getText.forEach( el => {
            if(el.innerText == 'User' || el.innerText == 'Ẩn' || el.innerText == 'Chưa Giao'){
               el.classList.add('fillred')
            }
        })
        const dropZoneImg = document.querySelector('.dropzone-img');
        dropZoneImg.addEventListener('change', (e) => {
          let file = e.target.files[0]
          if (!file) return
          let img = document.createElement('img')
          img.src = URL.createObjectURL(file)
          document.querySelector('#dropzoneFrom').appendChild(img).setAttribute("name" , "productImage");        
        })
        const dropZoneImg2 = document.querySelector('.dropzone-img2');
        dropZoneImg2.addEventListener('change', (e) => {
          let file = e.target.files[0]
          if (!file) return
          let img2 = document.createElement('img')
          img2.src = URL.createObjectURL(file)
          document.querySelector('#dropzoneFrom2').appendChild(img2).setAttribute("name" , "productImage2");        
        })
        // chart
        var ctx = document.getElementById('chart').getContext('2d');
        new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['Visit 1', 'Visit 2', 'Visit 3', 'Visit 4', 'Visit 5'],
            datasets: [{
              label: 'LVEF % (Echo)',
              yAxisID: 'A',
              borderColor: '#ffbaa2',
              backgroundColor: 'white',
              data: [80, 70, 30, 20, 35],
              fill: false
            }, {
              label: 'Rhythm',
              yAxisID: 'B',
              borderColor: '#91cf96',
              backgroundColor: 'white',
              data: [80, 76, 79, 82, 80],
              fill: false
            }, {
              label: 'Height',
              yAxisID: 'C',
              borderColor: '#c881d2',
              backgroundColor: 'white',
              data: [185, 184, 183, 184, 185],
              fill: false
            }, {
              label: 'Weight',
              yAxisID: 'D',
              borderColor: '#29b6f6',
              backgroundColor: 'white',
              data: [65, 65, 65, 65, 65],
              fill: false
            }]
          },
          options: {
            tooltips: {
              mode: 'nearest'
            },
            scales: {
              yAxes: [{
                id: 'A',
                type: 'linear',
                position: 'left',
                ticks: {
                  min: 0,
                  max: 100,
                  stepSize: 20,
                  fontColor: '#ffbaa2',
                  callback: function(value, index, values) {
                    return value + ' %';
                  }
                }
              }, {
                id: 'B',
                type: 'linear',
                position: 'right',
                ticks: {
                  min: 60,
                  max: 140,
                  stepSize: 16,
                  fontColor: '#91cf96',
                  callback: function(value, index, values) {
                    return value + ' bpm';
                  }
                }
              }, {
                id: 'C',
                type: 'linear',
                position: 'right',
                ticks: {
                  min: 160,
                  max: 190,
                  stepSize: 6,
                  fontColor: '#c881d2',
                  callback: function(value, index, values) {
                    return value + ' cm';
                  }
                }
              }, {
                id: 'D',
                type: 'linear',
                position: 'right',
                ticks: {
                  min: 50,
                  max: 100,
                  stepSize: 10,
                  fontColor: '#29b6f6',
                  callback: function(value, index, values) {
                    return value + ' kg';
                  }
                },
                scaleLabel: {
                  display: false
                },
              }]
            },
            elements: {
              line: {
                tension: 0, // disables bezier curves
              },
              point: {
                radius: 4,
                borderWidth: 2,
                pointStyle: 'circle'
              }
            }

          }
        });
    </script>
    
</body>
</html>