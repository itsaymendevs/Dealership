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
                dropdownParent: $(setupModal),
                allowClear: setupClear,
                placeholder: setupPlaceholder ? setupPlaceholder : "",
            });
        } else {
            $(this)
                .select2({
                    dropdownParent: $(setupModal),
                    allowClear: setupClear,
                    placeholder: setupPlaceholder ? setupPlaceholder : "",
                })
                .val(setupValue)
                .trigger("change");
        } // end else
    }); // end loop
}); // end function

// navigate
document.addEventListener(
    "livewire:navigated",
    function () {
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
                            placeholder: setupPlaceholder
                                ? setupPlaceholder
                                : "",
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
                        dropdownParent: $(setupModal),
                        allowClear: setupClear,
                        placeholder: setupPlaceholder ? setupPlaceholder : "",
                    });
                } else {
                    $(this)
                        .select2({
                            dropdownParent: $(setupModal),
                            allowClear: setupClear,
                            placeholder: setupPlaceholder
                                ? setupPlaceholder
                                : "",
                        })
                        .val(setupValue)
                        .trigger("change");
                } // end else
            }); // end loop
        }); // end function
    },
    false
);
