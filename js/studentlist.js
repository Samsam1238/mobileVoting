
LoadData();

function LoadData() {
    $.ajax({
            type: "POST",
            url: "database/stu.php",
        })
        .done(function(msg) {
            var candidatelist = JSON.parse(msg);
            $("#cantable> tbody").empty();
            candidatelist.forEach(element => {
                var row = "<tr>"
                row = row + "<td>" + element.LRN+ "</td>"
                row = row + "<td>" + element.FirstName + "</td>"
                row = row + "<td>" + element.LastName + "</td>"
                row = row + "<td>" + element.MiddleName + "</td>"
                row = row + "<td>" + element.BirthDate + "</td>"
                row = row + "<td>" + element.Grade + "</td>"
                row = row + "<td>" + element.Section + "</td>"
                row = row + "<td>" + element.VoteStatus + "</td>"
                row = row + "<td>" + element.email + "</td>"
                btnEdit = "<button>EDIT</button>"
                btnDelete = "<button>DELETE</button>"
                row = row + "<td>" + btnEdit + "</td>"
                row = row + "<td>" + btnDelete + "</td>"
                row = row + "</tr>"
                $("#cantable > tbody").append(row);
            });
        });

}