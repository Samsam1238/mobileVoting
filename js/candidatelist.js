LoadData();
var CID = "";
var condi = "";
(() => {
    'use strict';

    const forms = document.querySelectorAll('.needs-validation');

    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            
            if (form.checkValidity()) {
                inserter()
                location.reload()
                form.reset(); 
                form.classList.remove('was-validated');
            } else {
                event.preventDefault();
                event.stopPropagation();
                form.classList.add('was-validated');
            }
            event.preventDefault();
        }, false);
    });
})();



function LoadData() {
    $.ajax({
        type: "POST",
        url: "database/candi.php",
    }).done(function(msg) {
        var candidatelist = JSON.parse(msg);
        $("#cantable> tbody").empty();
        candidatelist.forEach(element => {
            var row = "<tr>"
            row += "<td>" + element.Positionname + "</td>"
            row += "<td>" + element.CFirstname + "</td>"
            row += "<td>" + element.CLastname + "</td>"
            row += "<td>" + element.CMiddlename + "</td>"
            row += "<td>" + element.CExtension + "</td>"
            row += "<td>" + element.Partylist + "</td>"
            row += "<td><button class='edit-btn'>EDIT</button></td>"
            row += "<td><button class='delete-btn'>DELETE</button></td>"
            row += "<td><button class='view-btn'>View</button></td>"
            row += "</tr>"
            $("#cantable > tbody").append(row);
        });

        // Add event listeners for edit and delete buttons outside the loop
        $(".edit-btn").click(function() {
            var index = $(this).closest("tr").index();
            var editData = candidatelist[index];
            displayEditForm(editData);
            showmodal();
            console.log("Edit clicked for candidate: ", editData);
            condi = "edit";
        });

        $(".delete-btn").click(function() {
            var index = $(this).closest("tr").index();
            var deleteData = candidatelist[index];
            datadelete(deleteData);
            console.log("Delete clicked for candidate: ", deleteData);
            deletemodal()
        });

        $(".view-btn").click(function() {
            var index = $(this).closest("tr").index();
            var deleteData = candidatelist[index];
            fullview(deleteData)
            viewmodal()
        });

    });
}

function showmodal() {
    const modal = new bootstrap.Modal(document.getElementById('Modal'));
    modal.show();
}

function deletemodal(){
    const modal = new bootstrap.Modal(document.getElementById('Modal2'));
    modal.show();
    $("#YesButton").click(function(){
        condi = "delete";
        inserter()
        location.reload() 
    });
}

function viewmodal(){
    const modal = new bootstrap.Modal(document.getElementById('Modal3'));
    modal.show();
}



function displayEditForm(data) {
    CID = data.candidateID;
    $('#FirstName').val(data.CFirstname);
    $('#LastName').val(data.CLastname);
    $('#MiddleName').val(data.CMiddlename);
    $('#Extention').val(data.CExtension);
    $('#GradeLevel').val(data.GradeLevel);
    $('#Section').val(data.Section);
    $('#Partylist').val(data.Partylist);
    var positionName = data.Positionname;
    $('#Position option').each(function() {
        if ($(this).text() === positionName) {
            $(this).prop('selected', true);
        }
    });
}

$(document).ready(function() {
    $.ajax({
        url: 'database/position.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Populate the select options
            data.forEach(function(position) {
                $('#Position').append('<option value="' + position.PositionID + '">' + position.Positionname + '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error('Failed to fetch positions: ' + error);
        }
    });
});



function inserter(){

    var datas ={
        condition: condi,
        candidateID: CID,
        Firstname: $('#FirstName').val(),
        LastName: $('#LastName').val(),
        MiddleName: $('#MiddleName').val(),
        Extention: $('#Extention').val(),
        GradeLevel: $('#GradeLevel').val(),
        Section: $('#Section').val(),
        Position: $('#Position').val(),
        Partylist: $('#Partylist').val()
        
    }
    console.log(datas)
    $.ajax({
        url: "database/edit.php",
        type: 'POST',
        data: datas,
        success: function(response) {
            console.log('Response from PHP:', response);
        },
                         
    });

}


function datadelete(data){
CID = data.candidateID;
}

function fullview(data){
    $("#modalcantable> tbody").empty();
    var row = "<tr>"
    row += "<td>" + data.candidateID + "</td>"
    row += "<td>" + data.Positionname + "</td>"
    row += "<td>" + data.CFirstname + "</td>"
    row += "<td>" + data.CLastname + "</td>"
    row += "<td>" + data.CMiddlename + "</td>"
    row += "<td>" + data.CExtension + "</td>"
    row += "<td>" + data.GradeLevel + "</td>"
    row += "<td>" + data.Section + "</td>"
    row += "<td>" + data.Partylist + "</td>"
    row += "</tr>"
    $("#modalcantable > tbody").append(row);
}