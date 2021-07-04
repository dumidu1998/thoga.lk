var tabButtons = document.querySelectorAll(".tabContainer .buttonContainer button");
var tabPanels = document.querySelectorAll(".tabContainer  .tabPanel");

function showPanel(panelIndex, colorCode) {
    tabButtons.forEach(function (node) {
        node.style.backgroundColor = "";
        node.style.color = "";
        node.style.borderRadius = '2%';
        node.style.borderTopLeftRadius = '10px';
        node.style.borderTopRightRadius = '10px';
        node
    });
    tabButtons[panelIndex].style.backgroundColor = colorCode;
    tabButtons[panelIndex].style.color = "black";
    // tabButtons[panelIndex].style.borderRadius = '1%';
    tabPanels.forEach(function (node) {
        node.style.display = "none";
    });
    tabPanels[panelIndex].style.display = "block";
    tabPanels[panelIndex].style.backgroundColor = colorCode;
    // tabPanels[panelIndex].style.padding = '10px';
    tabPanels[panelIndex].style.borderRadius = '1%';
    tabPanels[panelIndex].style.borderTopLeftRadius = '0';
    tabPanels[panelIndex].style.borderTopRightRadius = '0';

}
showPanel(0, ' #fff');

function _(el) {
    return document.getElementById(el);
}

function uploadFile1() {
    fileValidation1();
    var file = _("file1").files[0];
    //alert(file.name+" | "+file.size+" | "+file.type);
    var formdata = new FormData();
    formdata.append("file1", file);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler1, false);
    ajax.addEventListener("load", completeHandler1, false);
    ajax.addEventListener("error", errorHandler1, false);
    ajax.addEventListener("abort", abortHandler1, false);
    ajax.open("POST", "upload/file_upload_parser.php");
    ajax.send(formdata);
}

function uploadFile2() {
    fileValidation2();
    var file = _("file2").files[0];
    //alert(file.name+" | "+file.size+" | "+file.type);
    var formdata = new FormData();
    formdata.append("file1", file);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler2, false);
    ajax.addEventListener("load", completeHandler2, false);
    ajax.addEventListener("error", errorHandler2, false);
    ajax.addEventListener("abort", abortHandler2, false);
    ajax.open("POST", "upload/file_upload_parser.php");
    ajax.send(formdata);
}

function uploadFile3() {
    fileValidation3();
    var file = _("file3").files[0];
    //alert(file.name+" | "+file.size+" | "+file.type);
    var formdata = new FormData();
    formdata.append("file1", file);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler3, false);
    ajax.addEventListener("load", completeHandler3, false);
    ajax.addEventListener("error", errorHandler3, false);
    ajax.addEventListener("abort", abortHandler3, false);
    ajax.open("POST", "upload/file_upload_parser.php");
    ajax.send(formdata);
}

function uploadFile4() {
    fileValidation4();
    var file = _("file4").files[0];
    //alert(file.name+" | "+file.size+" | "+file.type);
    var formdata = new FormData();
    formdata.append("file1", file);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler4, false);
    ajax.addEventListener("load", completeHandler4, false);
    ajax.addEventListener("error", errorHandler4, false);
    ajax.addEventListener("abort", abortHandler4, false);
    ajax.open("POST", "upload/file_upload_parser.php");
    ajax.send(formdata);
}

function fileValidation4() {
    var fileInput = document.getElementById('file4');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.JPEG|\.JPG)$/i;
    if (!allowedExtensions.exec(filePath)) {
        alert('Invalid file type. Upload files with format .jpg, .jpeg, .png');
        fileInput.value = '';
        return false;
    }
}

function fileValidation3() {
    var fileInput = document.getElementById('file3');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.JPEG|\.JPG)$/i;
    if (!allowedExtensions.exec(filePath)) {
        alert('Invalid file type. Upload files with format .jpg, .jpeg, .png');
        fileInput.value = '';
        return false;
    }
}

function fileValidation2() {
    var fileInput = document.getElementById('file2');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.JPEG|\.JPG)$/i;
    if (!allowedExtensions.exec(filePath)) {
        alert('Invalid file type. Upload files with format .jpg, .jpeg, .png');
        fileInput.value = '';
        return false;
    }
}

function fileValidation1() {
    var fileInput = document.getElementById('file1');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.JPEG|\.JPG)$/i;
    if (!allowedExtensions.exec(filePath)) {
        alert('Invalid file type. Upload files with format .jpg, .jpeg, .png');
        fileInput.value = '';
        return false;
    }
}

function progressHandler1(event) {
    _("loaded_n_total1").innerHTML = event.loaded + " bytes / " + event.total + " bytes";
    var percent = (event.loaded / event.total) * 100;
    _("progressBar1").value = Math.round(percent);
    _("status1").innerHTML = Math.round(percent) + "% uploaded... please wait";
}

function progressHandler2(event) {
    _("loaded_n_total2").innerHTML = event.loaded + " bytes / " + event.total + " bytes";
    var percent = (event.loaded / event.total) * 100;
    _("progressBar2").value = Math.round(percent);
    _("status2").innerHTML = Math.round(percent) + "% uploaded... please wait";
}

function progressHandler3(event) {
    _("loaded_n_total3").innerHTML = event.loaded + " bytes / " + event.total + " bytes";
    var percent = (event.loaded / event.total) * 100;
    _("progressBar3").value = Math.round(percent);
    _("status3").innerHTML = Math.round(percent) + "% uploaded... please wait";
}

function progressHandler4(event) {
    _("loaded_n_total4").innerHTML = event.loaded + " bytes / " + event.total + " bytes";
    var percent = (event.loaded / event.total) * 100;
    _("progressBar4").value = Math.round(percent);
    _("status4").innerHTML = Math.round(percent) + "% uploaded... please wait";
}

function completeHandler1(event) {
    _("status1").innerHTML = event.target.responseText;
}

function errorHandler1(event) {
    _("status1").innerHTML = "Upload Failed";
}

function abortHandler1(event) {
    _("status1").innerHTML = "Upload Aborted";
}

function completeHandler2(event) {
    _("status2").innerHTML = event.target.responseText;
}

function errorHandler2(event) {
    _("status2").innerHTML = "Upload Failed";
}

function abortHandler2(event) {
    _("status2").innerHTML = "Upload Aborted";
}

function completeHandler3(event) {
    _("status3").innerHTML = event.target.responseText;
}

function errorHandler3(event) {
    _("status3").innerHTML = "Upload Failed";
}

function abortHandler3(event) {
    _("status3").innerHTML = "Upload Aborted";
}

function completeHandler4(event) {
    _("status4").innerHTML = event.target.responseText;
}

function errorHandler4(event) {
    _("status4").innerHTML = "Upload Failed";
}

function abortHandler4(event) {
    _("status4").innerHTML = "Upload Aborted";
}

function pwdvalidatebuyer() {
    button = document.getElementById('Bsignupbtn');
    if (document.getElementById('Bpwd').value ==
        document.getElementById('Bcpwd').value) {
        document.getElementById('Bmessage').style.color = 'green';
        document.getElementById('Bmessage').innerHTML = 'Matching';

    } else {
        document.getElementById('Bmessage').style.color = 'red';
        document.getElementById('Bmessage').innerHTML = 'Not Matching';
        button.disabled = true;
    }
}

function buttonOnbuyer() {
    button = document.getElementById('Bsignupbtn');
    checkbox = document.getElementById('Bcbox');
    if (document.getElementById('Bmessage').innerHTML == "Matching") {
        if (checkbox.checked == true) {
            button.disabled = false;
        } else {
            button.disabled = true;
        }
    }
}

function pwdvalidatefarmer() {
    button = document.getElementById('Fsignupbtn');
    if (document.getElementById('Fpwd').value ==
        document.getElementById('Fcpwd').value) {
        document.getElementById('Fmessage').style.color = 'green';
        document.getElementById('Fmessage').innerHTML = 'Matching';

    } else {
        document.getElementById('Fmessage').style.color = 'red';
        document.getElementById('Fmessage').innerHTML = 'Not Matching';
        button.disabled = true;
    }
}

function buttonOnfarmer() {
    button = document.getElementById('Fsignupbtn');
    checkbox = document.getElementById('Fcbox');
    if (document.getElementById('Fmessage').innerHTML == "Matching") {
        if (checkbox.checked == true) {
            button.disabled = false;
        } else {
            button.disabled = true;
        }
    }
}

function pwdvalidatedriver() {
    button = document.getElementById('Dsignupbtn');
    if (document.getElementById('Dpwd').value ==
        document.getElementById('Dcpwd').value) {
        document.getElementById('Dmessage').style.color = 'green';
        document.getElementById('Dmessage').innerHTML = 'Matching';

    } else {
        document.getElementById('Dmessage').style.color = 'red';
        document.getElementById('Dmessage').innerHTML = 'Not Matching';
        button.disabled = true;
    }
}

function buttonOndriver() {
    button = document.getElementById('Dsignupbtn');
    checkbox = document.getElementById('Dcbox');
    if (document.getElementById('Dmessage').innerHTML == "Matching") {
        if (checkbox.checked == true) {
            button.disabled = false;
        } else {
            button.disabled = true;
        }
    }
}


function pwdvalidatementor() {
    button = document.getElementById('Msignupbtn');
    if (document.getElementById('Mpwd').value ==
        document.getElementById('Mcpwd').value) {
        document.getElementById('Mmessage').style.color = 'green';
        document.getElementById('Mmessage').innerHTML = 'Matching';

    } else {
        document.getElementById('Mmessage').style.color = 'red';
        document.getElementById('Mmessage').innerHTML = 'Not Matching';
        button.disabled = true;
    }
}

function buttonOnmentor() {
    button = document.getElementById('Msignupbtn');
    checkbox = document.getElementById('Mcbox');
    if (document.getElementById('Mmessage').innerHTML == "Matching") {
        if (checkbox.checked == true) {
            button.disabled = false;
        } else {
            button.disabled = true;
        }
    }
}

function bselectvalidate1() { if (document.getElementById('BProvince').value == 0) alert("Please Select your Province"); }

function bselectvalidate2() { if (document.getElementById('Bdistrict').value == 0) alert("Please Select your Province"); }

function bselectvalidate3() { if (document.getElementById('Bcity').value == 0) alert("Please Select your Province"); }

function bselectvalidate4() { if (document.getElementById('Bncity1').value == 0) alert("Please Select your Province"); }

function bselectvalidate5() { if (document.getElementById('Bncity2').value == 0) alert("Please Select your Province"); }

function fselectvalidate1() { if (document.getElementById('FProvince').value == 0) alert("Please Select your Province"); }

function fselectvalidate2() { if (document.getElementById('Fdistrict').value == 0) alert("Please Select your Province"); }

function fselectvalidate3() { if (document.getElementById('Fcity').value == 0) alert("Please Select your Province"); }

function fselectvalidate4() { if (document.getElementById('Fncity1').value == 0) alert("Please Select your Province"); }

function fselectvalidate5() { if (document.getElementById('Fncity2').value == 0) alert("Please Select your Province"); }

function dselectvalidate1() { if (document.getElementById('DProvince').value == 0) alert("Please Select your Province"); }

function dselectvalidate2() { if (document.getElementById('Ddistrict').value == 0) alert("Please Select your Province"); }

function dselectvalidate3() { if (document.getElementById('Dcity').value == 0) alert("Please Select your Province"); }

function dselectvalidate4() { if (document.getElementById('Dncity1').value == 0) alert("Please Select your Province"); }

function dselectvalidate5() { if (document.getElementById('Dncity2').value == 0) alert("Please Select your Province"); }

function mselectvalidate1() { if (document.getElementById('MProvince').value == 0) alert("Please Select your Province"); }

function mselectvalidate2() { if (document.getElementById('Mdistrict').value == 0) alert("Please Select your Province"); }

function mselectvalidate3() { if (document.getElementById('Mcity').value == 0) alert("Please Select your Province"); }

function mselectvalidate4() { if (document.getElementById('Mncity1').value == 0) alert("Please Select your Province"); }

function mselectvalidate5() { if (document.getElementById('Mncity2').value == 0) alert("Please Select your Province"); }

$(document).ready(function () {
    $('.js-example-responsive').select2({
        allowClear: true,
        placeholder: {
            id: "0",
            text: "Select an Option" //Should be text not placeholder
        }

    });
});

$(document).ready(function () {
    $('.s2').select2({
        allowClear: true,
        placeholder: {
            id: "0",
            text: "Select an Option" //Should be text not placeholder
        }
    });
});