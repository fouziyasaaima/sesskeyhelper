document.addEventListener("DOMContentLoaded", function () {
    if (typeof M === 'undefined' || !M.cfg || !M.cfg.sesskey) {
        return;
    }

    document.querySelectorAll("form").forEach(function(form) {
        if (
            form.method.toLowerCase() === "post" &&
            !form.querySelector('[name="sesskey"]')
        ) {
            var input = document.createElement("input");
            input.type = "hidden";
            input.name = "sesskey";
            input.value = M.cfg.sesskey;
            form.appendChild(input);
        }
    });
});
