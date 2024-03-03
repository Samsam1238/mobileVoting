
(() => {
    'use strict';

    const forms = document.querySelectorAll('.needs-validation');

    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            
            if (form.checkValidity()) {
                inserter()
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



function inserter(){

    var datas ={
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
        url: "database/candilistdb.php",
        type: 'POST',
        data: datas,
        success: function(response) {
            console.log('Response from PHP:', response);
        },
                         
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
