$(document).ready(function () {
    $("#VisitorDt").DataTable();
    $(".dataTables_length").addClass("bs-select");
});
function getServicesData() {
    axios
        .get("/getServicesData")
        .then(function (res) {
            var jsonData = res.data;
            // console.log(jsonData);
            var tr = "";
            $.each(jsonData, function (index, item) {
                console.log(item.id);
                tr +=
                    "<tr>" +
                    "<td> <img class='table-img'src='" +
                    item.service_image +
                    "'></td>" +
                    "<td>" +
                    item.service_name +
                    "</td>" +
                    "<td>" +
                    item.service_descirption +
                    "</td>" +
                    "<th class='th-sm'><a href='' ><i class='fas fa-edit'></i></a></th>" +
                    "<th class='th-sm'><a href='' ><i class='fas fa-trash-alt'></i></a></th>" +
                    "</tr>";
            });

            // console.log(tr);
            $("#service_table").append(tr);
        })
        .catch(function (err) {});
}
