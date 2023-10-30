document.addEventListener("DOMContentLoaded", invoicePaymentHistory);

function invoicePaymentHistory() {
    // payment mail in click after view payment transitions
    if (!$("#paymentHistory-tab").length) {
        return false;
    }
    setTimeout(function () {
        let activeTab = location.href;
        let tabParameter = activeTab.substring(
            activeTab.indexOf("?active") + 8
        );
        $('.nav-item button[data-bs-target="#' + tabParameter + '"]').click();
    }, 100);
}

listenChange("#clientInvoiceStatus", function () {
    window.livewire.emit("changeInvoiceStatusFilter", $(this).val());
});

listenClick("#resetClientInvoiceFilter", function () {
    $("#clientInvoiceStatus").val(7).trigger("change");
    hideDropdownManually($("#clientInvoiceFilterBtn"), $(".dropdown-menu"));
});
