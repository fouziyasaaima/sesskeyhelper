<?php
defined('MOODLE_INTERNAL') || die();

function local_sesskeyhelper_before_http_headers() {
    global $PAGE, $USER;

    if (!isloggedin() || isguestuser()) {
        return;
    }

    $sesskey = sesskey();

    $js = <<<EOD
<script>
document.addEventListener("DOMContentLoaded", function () {
    var sesskey = "{$sesskey}";

    document.querySelectorAll("form").forEach(function(form) {
        if (
            form.method.toLowerCase() === "post" &&
            !form.querySelector('[name="sesskey"]')
        ) {
            var input = document.createElement("input");
            input.type = "hidden";
            input.name = "sesskey";
            input.value = sesskey;
            form.appendChild(input);
        }
    });
});
</script>
EOD;

    $PAGE->requires->js_amd_inline($js);
}
