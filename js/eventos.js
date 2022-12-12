function onFileSelected(event) {
    console.log(event.target)
    var selectedFile = event.target.files[0]
    var reader = new FileReader()
    var imgtag = document.getElementById("image-"+event.target.id)
    imgtag.title = selectedFile.name
    document.getElementById("img-in-"+event.target.id).style.display = "none"
    imgtag.style.display = 'block'
    reader.onload = function(event) {
      imgtag.src = event.target.result
    };
  
    reader.readAsDataURL(selectedFile)
  }