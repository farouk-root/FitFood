window.onload = function () {
    document.getElementById("search_resolution").onchange = function(event) {
        let table = document.getElementById("resolution_table");
        let status = event.target.value.toLowerCase();
        let rows = table.rows;
        for (let row of rows) {
            let subject = row.getElementsByTagName("TD")[2].innerHTML.toLowerCase();
            if (!subject.startsWith(status)) {
                row.style="display:none;"
            } else {
                row.style="";
            }
        }
    }
}