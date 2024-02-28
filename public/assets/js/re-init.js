// {{-- ----------------------------------- re-render functions ------------------ --}}

$(document).ready(function () {
    $(".dropdown-menu").dropdown();
});

// {{-- :: reloadPage if back/forward --}}

window.addEventListener("popstate", function (event) {
    window.location.reload();
});

// {{-- close-modal --}}

window.addEventListener("close-modal", (event) => {
    // 1: get modalParams
    targetModal = event.detail.modal;
    $(targetModal).modal("hide");

    $(".modal-backdrop").each(function () {
        $(this).remove();
    });
});

// {{-- reset-select2 --}}

window.addEventListener("reset-select", (event) => {
    $(document).ready(function () {
        $(".init--modal-select").each(function () {
            $(this).val("").trigger("change");
        }); // end loop
    });
});

// {{-- reset-file --}}

window.addEventListener("reset-file", (event) => {
    $(document).ready(function () {
        targetFile = event.detail.file;
        $(targetFile).val("");
    });
});

// {{-- init-expand --}}

window.addEventListener("init-expand", (event) => {
    $(document).ready(function () {
        $(".expand--paragraph").each(function () {
            if ($(this).height() <= 70) {
                $(this).addClass("no-events");
                $(this).find("i").addClass("d-none");
            }
        });
    });
});

// {{-- init-tooltip --}}

window.addEventListener("init-tooltip", (event) => {
    $(document).ready(function () {
        var tooltipTriggerList = [].slice.call(
            document.querySelectorAll("[data-bss-tooltip]")
        );

        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
});

// {{-- init select2 --}}
window.addEventListener("init-select", (event) => {
    $(document).ready(function () {
        $(".init--select").each(function () {
            setupValue = $(this).attr("value");
            setupClear = $(this).attr("data-clear") ? true : false;
            setupPlaceholder = $(this).attr("data-placeholder");

            if (setupValue == undefined) {
                $(this).select2({
                    allowClear: setupClear,
                    placeholder: setupPlaceholder ? setupPlaceholder : "",
                });
            } else {
                $(this)
                    .select2({
                        allowClear: setupClear,
                        placeholder: setupPlaceholder ? setupPlaceholder : "",
                    })
                    .val(setupValue)
                    .trigger("change");
            } // end else
        }); // end loop

        $(".init--modal-select").each(function () {
            setupValue = $(this).attr("value");
            setupClear = $(this).attr("data-clear") ? true : false;
            setupModal = $(this).attr("data-modal");
            setupPlaceholder = $(this).attr("data-placeholder");

            if (setupValue == undefined) {
                $(this).select2({
                    dropdownParent: setupModal,
                    allowClear: setupClear,
                    placeholder: setupPlaceholder ? setupPlaceholder : "",
                });
            } else {
                $(this)
                    .select2({
                        dropdownParent: setupModal,
                        allowClear: setupClear,
                        placeholder: setupPlaceholder ? setupPlaceholder : "",
                    })
                    .val(setupValue)
                    .trigger("change");
            } // end else
        }); // end loop
    });
});

// {{-- init child-select2 --}}
window.addEventListener("init-child-select", (event) => {
    $(document).ready(function () {
        $(".child--select").each(function () {
            if (!$(this).hasClass("select2-hidden-accessible")) {
                setupClear = $(this).attr("data-clear") ? true : false;
                setupPlaceholder = $(this).attr("data-placeholder");

                $(this).select2({
                    allowClear: setupClear,
                    placeholder: setupPlaceholder ? setupPlaceholder : "",
                });
            } // end if
        }); // end loop

        $(".child--modal-select").each(function () {
            if (!$(this).hasClass("select2-hidden-accessible")) {
                setupModal = $(this).attr("data-modal");
                setupClear = $(this).attr("data-clear") ? true : false;
                setupPlaceholder = $(this).attr("data-placeholder");

                $(this).select2({
                    dropdownParent: setupModal,
                    allowClear: setupClear,
                    placeholder: setupPlaceholder ? setupPlaceholder : "",
                });
            } // end if
        }); // end loop
    });
});
