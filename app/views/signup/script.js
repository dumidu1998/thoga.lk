var tabButtons=document.querySelectorAll(".tabContainer .buttonContainer button");
var tabPanels=document.querySelectorAll(".tabContainer  .tabPanel");

function showPanel(panelIndex,colorCode) {
    tabButtons.forEach(function(node){
        node.style.backgroundColor="";
        node.style.color="";
    });
    tabButtons[panelIndex].style.backgroundColor=colorCode;
    tabButtons[panelIndex].style.color="white";
    tabPanels.forEach(function(node){
        node.style.display="none";
    });
    tabPanels[panelIndex].style.display="block";
    tabPanels[panelIndex].style.backgroundColor=colorCode;
}
 showPanel(0,'#a9a9a9');

 function _(el) {
    return document.getElementById(el);
  }
  
function uploadFile() {
    var file = _("file1").files[0];
    // alert(file.name+" | "+file.size+" | "+file.type);
    var formdata = new FormData();
    formdata.append("file1", file);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.addEventListener("load", completeHandler, false);
    ajax.addEventListener("error", errorHandler, false);
    ajax.addEventListener("abort", abortHandler, false);
    ajax.open("POST", "file_upload_parser.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
    //use file_upload_parser.php from above url
    ajax.send(formdata);
  }
  
function progressHandler(event) {
    _("loaded_n_total").innerHTML =  event.loaded + " bytes / " + event.total + " bytes";
    var percent = (event.loaded / event.total) * 100;
    _("progressBar").value = Math.round(percent);
    _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
  }
  
function completeHandler(event) {
    _("status").innerHTML = event.target.responseText;
    _("progressBar").value = 100; //wil clear progress bar after successful upload
  }
  
function errorHandler(event) {
    _("status").innerHTML = "Upload Failed";
  }
  
function abortHandler(event) {
    _("status").innerHTML = "Upload Aborted";
  }


document.getElementById('provincelist').addEventListener('input', function(e) {
      var input = e.target,
      list = input.getAttribute('list'),
      options = document.querySelectorAll('#' + list + ' option'),
      hiddenInput = document.getElementById(input.getAttribute('id') + '-hidden'),
      label = input.value;

      hiddenInput.value = label;

  for(var i = 0; i < options.length; i++) {
      var option = options[i];

      if(option.innerText === label) {
          hiddenInput.value = option.getAttribute('data-value');
          break;
      }
  }
});

document.getElementById('FHcity').addEventListener('input', function(e) {
  var input = e.target,
  list = input.getAttribute('list'),
  options = document.querySelectorAll('#' + list + ' option'),
  hiddenInput = document.getElementById(input.getAttribute('id') + '-hidden'),
  label = input.value;

  hiddenInput.value = label;

for(var i = 0; i < options.length; i++) {
  var option = options[i];

  if(option.innerText === label) {
      hiddenInput.value = option.getAttribute('data-value');
      break;
  }
}
});