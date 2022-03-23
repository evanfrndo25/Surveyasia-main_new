function rolesButton() {
    const researcher = document.getElementById("researcher");
    if (researcher.checked) {
        window.location.href = "/register/researcher";
    } else if (respondent.checked) {
        window.location.href = "/register/respondent";
    }
}

function addressChecked() {
    if ($(".address-id-card").is(":checked")) $(".current-address").hide();
    else $(".current-address").show();
}

$(function () {
    $(".nav-link").on("click", function (e) {
        $(".nav-link").removeClass("active");
        $(this).addClass("active");
    });
});

$(function () {
    $(".link-pricing").on("click", function (e) {
        $(".link-pricing").removeClass("link-orange text-decoration-underline");
        $(this).addClass("link-orange text-decoration-underline");
    });
});

$(function () {
    $(".link-survey-history").on("click", function (e) {
        $(".link-survey-history").removeClass(
            "link-orange text-decoration-underline"
        );
        $(this).addClass("link-orange text-decoration-underline");
    });
});

$(function () {
    $(".link-survey-history-side").on("click", function (e) {
        $(".link-survey-history-side").removeClass("link-orange");
        $(this).addClass("link-orange");
    });
});

$(function () {
    $(".link-news-category").on("click", function (e) {
        $(".link-news-category").removeClass("link-orange");
        $(this).addClass("link-orange");
    });
});

$(function () {
    $(".link-question").on("click", function (e) {
        $(".link-question").removeClass(
            "link-default text-decoration-underline"
        );
        $(this).addClass("link-default text-decoration-underline");
    });
});

function valueSlider() {
    var slider = document.getElementById("totalRespondent");
    var output = document.getElementById("valueSlider");
    output.innerHTML = slider.value; // Display the default slider value

    // Update the current slider value (each time you drag the slider handle)
    slider.oninput = function () {
        output.innerHTML = this.value;
    };
}

// Preview Profile Photo
$(document).ready(function (e) {
    $("#profile-photo").change(function () {
        let reader = new FileReader();

        reader.onload = (e) => {
            $(".profile-picture-preview").attr("src", e.target.result);
        };

        reader.readAsDataURL(this.files[0]);
    });
});

// Modal Preview Question
function modalPreviewQuestion(id) {
    var question = document.getElementById(
        "modal-question[" + id + "]"
    ).textContent;
    var previewQuestion = document.getElementById("preview-question");
    previewQuestion.innerHTML = question;
}

// Click to Copy Link
function clickToCopy() {
    /* Get the text field */
    var copyText = document.getElementById("link-input");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);
}

function pricingSwitch() {
    if ($("#pricingSwitch").is(":checked")) {
        $("#monthlyPricing").hide();
        $("#yearlyPricing").show();
        $("#yearlyPricing").removeClass("d-none");
        $("#yearlyPricing").addClass("d-block");
    } else {
        $("#monthlyPricing").show();
        $("#yearlyPricing").hide();
        $("#yearlyPricing").addClass("d-none");
        $("#yearlyPricing").removeClass("d-block");
    }
}
