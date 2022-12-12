window.onload = function () {
    let submit_button = document.getElementById("submit");
    let err_body = document.getElementById("err-body");
    console.log(err_body);

    update_button = () => {
        submit_button.disabled = Boolean(err_body.innerHTML);
    }

    document.getElementById("body").onchange = function(event)  {
        let status = event.target.value;
        let submit_button = document.getElementById("submit");
        if (status.length < 16) {
            err_body.innerHTML =
                "Body must contain atleast 16 characters";
            submit_button.disabled = true;
        } else {
            err_body.innerHTML = "";
            submit_button.disabled = false;
        };

        update_button();
    };
}