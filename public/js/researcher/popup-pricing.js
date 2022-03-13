$(function () {
    loadPricing();
    $("#btnModalClose").on("click", closeButtonClick);
});

function loadPricing() {
    if (shouldShowAgain()) {
        $("#pricingModal").modal("show");
    }
}

function shouldShowAgain() {
    if (localStorage.getItem("show_pricing") == null) {
        return true;
    }

    return false;
}

function closeButtonClick() {
    let checkbox = document.getElementById("hidePricing");
    if (checkbox.checked && localStorage.getItem("show_pricing") == null) {
        localStorage.setItem("show_pricing", false);
    }
}
