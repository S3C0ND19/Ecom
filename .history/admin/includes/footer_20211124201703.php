</div>  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    
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

    </script>
    
</body>
</html>