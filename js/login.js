(() => {
    'use strict';

    const forms = document.querySelectorAll('.needs-validation');

    forms.forEach(function(form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const lrn = $('#Lrn').val();
            const bday = $('#bday').val();
            let Email = "";
            let lrnisValid = false;
            let BDisValid = false;
            let isvalid = false;
            $.ajax({
                type: "POST",
                url: "database/stu.php",
            })
            .done(function(msg) {
                const candidatelist = JSON.parse(msg);

                candidatelist.forEach(function(element) {

                  console.log(element.LRN)
                  console.log(element.BirthDate)
                if(bday == element.BirthDate && lrn != element.LRN ) {
                    BDisValid = true;
                    lrnisValid = false;
                }
                if(bday != element.BirthDate && lrn == element.LRN ){
                        lrnisValid = true;
                        BDisValid = false;
                }  
                if(bday == element.BirthDate && lrn == element.LRN ){
                    isvalid = true;
                    Email = element.email
                    console.log(Email)
                    return
                }
                
                });
                if(!lrnisValid){
                    $('#Lrn').val('');
                    form.classList.add('was-validated');
                }
                if(!BDisValid){
                    $('#bday').val('');
                    form.classList.add('was-validated');
                }

                if (isvalid) {
                    form.reset();
                    form.classList.remove('was-validated');
                    console.log(Email)
                    
                    $.ajax({
                        url: "database/otpsender.php",
                        type: 'POST',
                        data: {email: Email},
                        success: function(response) {
                            console.log('Response from PHP:', response);
                        },
                                         
                    });
                    window.location.href = "secondverification.php";
                }
            }); 
        }, false);
    });

})();
