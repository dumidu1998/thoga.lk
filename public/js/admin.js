var modal = document.getElementById("signup");
var span = document.getElementsByClassName("close")[0];
function showadd() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


function _(el) {
    return document.getElementById(el);
}

function uploadFile() {
    fileValidation();
    var file = _("file").files[0];
    // alert(file.name+" | "+file.size+" | "+file.type);
    var formdata = new FormData();
    formdata.append("file", file);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.addEventListener("load", completeHandler, false);
    ajax.addEventListener("error", errorHandler, false);
    ajax.addEventListener("abort", abortHandler, false);
    ajax.open("POST", "upload/file_upload_parser.php");
    ajax.send(formdata);
}

function fileValidation() { 
    var fileInput = document.getElementById('file'); 
    var filePath = fileInput.value; 
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.JPEG|\.JPG)$/i; 
    if (!allowedExtensions.exec(filePath)) { 
        alert('Invalid file type. Upload files with format .jpg, .jpeg, .png'); 
        fileInput.value = ''; 
        return false; 
    }  
}

function progressHandler(event) {
    _("loaded_n_total").innerHTML =  event.loaded + " bytes / " + event.total + " bytes";
    var percent = (event.loaded / event.total) * 100;
    _("progressBar").value = Math.round(percent);
    _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
}


function completeHandler(event) {
    _("status").innerHTML = event.target.responseText;
  }
  
function errorHandler(event) {
    _("status").innerHTML = "Upload Failed";
  }
  
function abortHandler(event) {
    _("status").innerHTML = "Upload Aborted";
  }