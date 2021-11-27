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