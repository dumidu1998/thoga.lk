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
 showPanel(0,' #92bb00b6');

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

function pwdvalidatebuyer(){
  button = document.getElementById('Bsignupbtn');
  if (document.getElementById('Bpwd').value ==
    document.getElementById('Bcpwd').value) {
    document.getElementById('Bmessage').style.color = 'green';
    document.getElementById('Bmessage').innerHTML = 'Matching';

  } else {
    document.getElementById('Bmessage').style.color = 'red';
    document.getElementById('Bmessage').innerHTML = 'Not Matching';
    button.disabled=true;
  }
}

function buttonOnbuyer(){
  button = document.getElementById('Bsignupbtn');
  checkbox = document.getElementById('Bcbox');
  if (document.getElementById('Bmessage').innerHTML == "Matching"){
    if(checkbox.checked==true){
      button.disabled=false;
    }else{
      button.disabled=true;
    }
  }
}

function pwdvalidatefarmer(){
  button = document.getElementById('Fsignupbtn');
  if (document.getElementById('Fpwd').value ==
    document.getElementById('Fcpwd').value) {
    document.getElementById('Fmessage').style.color = 'green';
    document.getElementById('Fmessage').innerHTML = 'Matching';

  } else {
    document.getElementById('Fmessage').style.color = 'red';
    document.getElementById('Fmessage').innerHTML = 'Not Matching';
    button.disabled=true;
  }
}

function buttonOnfarmer(){
  button = document.getElementById('Fsignupbtn');
  checkbox = document.getElementById('Fcbox');
  if (document.getElementById('Fmessage').innerHTML == "Matching"){
    if(checkbox.checked==true){
      button.disabled=false;
    }else{
      button.disabled=true;
    }
  }
}

function pwdvalidatedriver(){
  button = document.getElementById('Dsignupbtn');
  if (document.getElementById('Dpwd').value ==
    document.getElementById('Dcpwd').value) {
    document.getElementById('Dmessage').style.color = 'green';
    document.getElementById('Dmessage').innerHTML = 'Matching';

  } else {
    document.getElementById('Dmessage').style.color = 'red';
    document.getElementById('Dmessage').innerHTML = 'Not Matching';
    button.disabled=true;
  }
}

function buttonOndriver(){
  button = document.getElementById('Dsignupbtn');
  checkbox = document.getElementById('Dcbox');
  if (document.getElementById('Dmessage').innerHTML == "Matching"){
    if(checkbox.checked==true){
      button.disabled=false;
    }else{
      button.disabled=true;
    }
  }
}


function pwdvalidatementor(){
  button = document.getElementById('Msignupbtn');
  if (document.getElementById('Mpwd').value ==
    document.getElementById('Mcpwd').value) {
    document.getElementById('Mmessage').style.color = 'green';
    document.getElementById('Mmessage').innerHTML = 'Matching';

  } else {
    document.getElementById('Mmessage').style.color = 'red';
    document.getElementById('Mmessage').innerHTML = 'Not Matching';
    button.disabled=true;
  }
}

function buttonOnmentor(){
  button = document.getElementById('Msignupbtn');
  checkbox = document.getElementById('Mcbox');
  if (document.getElementById('Mmessage').innerHTML == "Matching"){
    if(checkbox.checked==true){
      button.disabled=false;
    }else{
      button.disabled=true;
    }
  }
}

function bselectvalidate1(){if(document.getElementById('BProvince').value==0)alert("Please Select your Province");}
function bselectvalidate2(){if(document.getElementById('Bdistrict').value==0)alert("Please Select your Province");}
function bselectvalidate3(){if(document.getElementById('Bcity').value==0)alert("Please Select your Province");}
function bselectvalidate4(){if(document.getElementById('Bncity1').value==0)alert("Please Select your Province");}
function bselectvalidate5(){if(document.getElementById('Bncity2').value==0)alert("Please Select your Province");}

function fselectvalidate1(){if(document.getElementById('FProvince').value==0)alert("Please Select your Province");}
function fselectvalidate2(){if(document.getElementById('Fdistrict').value==0)alert("Please Select your Province");}
function fselectvalidate3(){if(document.getElementById('Fcity').value==0)alert("Please Select your Province");}
function fselectvalidate4(){if(document.getElementById('Fncity1').value==0)alert("Please Select your Province");}
function fselectvalidate5(){if(document.getElementById('Fncity2').value==0)alert("Please Select your Province");}

function dselectvalidate1(){if(document.getElementById('DProvince').value==0)alert("Please Select your Province");}
function dselectvalidate2(){if(document.getElementById('Ddistrict').value==0)alert("Please Select your Province");}
function dselectvalidate3(){if(document.getElementById('Dcity').value==0)alert("Please Select your Province");}
function dselectvalidate4(){if(document.getElementById('Dncity1').value==0)alert("Please Select your Province");}
function dselectvalidate5(){if(document.getElementById('Dncity2').value==0)alert("Please Select your Province");}

function mselectvalidate1(){if(document.getElementById('MProvince').value==0)alert("Please Select your Province");}
function mselectvalidate2(){if(document.getElementById('Mdistrict').value==0)alert("Please Select your Province");}
function mselectvalidate3(){if(document.getElementById('Mcity').value==0)alert("Please Select your Province");}
function mselectvalidate4(){if(document.getElementById('Mncity1').value==0)alert("Please Select your Province");}
function mselectvalidate5(){if(document.getElementById('Mncity2').value==0)alert("Please Select your Province");}

$(document).ready(function() {
  $('.js-example-responsive').select2({
    allowClear: true,
    placeholder: {
        id: "0",
        text: "Select an Option" //Should be text not placeholder
    }

  });
});

$(document).ready(function() {
  $('.s2').select2({
    allowClear: true,
    placeholder: {
      id: "0",
      text: "Select an Option" //Should be text not placeholder
    }
  });
});
