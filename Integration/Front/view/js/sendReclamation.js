
window.onload = function () {
    googleTranslateElementInit();
    let submit_button = document.getElementById("submit");
    let err_subject = document.getElementById("err-subject");
    let err_body = document.getElementById("err-body");

    update_button = () => {
        submit_button.disabled = Boolean(err_subject.innerHTML || err_body.innerHTML);
    }

    document.getElementById("subject").onchange = function(event)  {
        let status = event.target.value;
        let regex = /^[a-zA-Z ]+$/;
        
        if (!regex.test(status)) {
            err_subject.innerHTML =
                "Subject must contain only letters and spaces";
        } else if (status.length < 4) {
            err_subject.innerHTML =
                "Subject must contain atleast 4 characters";
        } else {
            err_subject.innerHTML = "";
        };

        update_button();
    };

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