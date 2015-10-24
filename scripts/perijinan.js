var PerijinanFormTools = function() {

    var extendValidatorPlugin = function() {
        jQuery.extend(jQuery.validator.messages, {
            required: "Field ini wajib diisi.",
            remote: "Please fix this field.",
            email: "Alamat email ini tidak valid.",
            url: "Please enter a valid URL.",
            date: "Please enter a valid date.",
            dateISO: "Please enter a valid date (ISO).",
            number: "Please enter a valid number.",
            digits: "Harus diisi angka.",
            creditcard: "Please enter a valid credit card number.",
            equalTo: "Please enter the same value again.",
            accept: "Please enter a value with a valid extension.",
            maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
            minlength: jQuery.validator.format("Please enter at least {0} characters."),
            rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
            range: jQuery.validator.format("Please enter a value between {0} and {1}."),
            max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
            min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
        });
    }
    
    var handleInputMasks = function() {
        $.extend($.inputmask.defaults, {
            'autounmask': true
        });

        $(".mask-percent").inputmask({
            "mask": "9",
            "repeat": 3,
            "greedy": false
        });

        $(".mask-year").inputmask({
            "mask": "9",
            "repeat": 4,
            "greedy": false
        }); 

        $(".mask-kode-pos").inputmask({
            "mask": "9",
            "repeat": 5,
            "greedy": false
        });
        
        $(".mask-currency, .mask-quantity").inputmask({
            "alias": "numeric", 
            "radixPoint": ",", 
            "groupSeparator": ".",
            "autoGroup": true,  
            "placeholder": "0"
        });
    }

    var handleDatePickers = function() {
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                rtl: RKR.isRTL(),
                orientation: "left",
                format: 'dd/mm/yyyy',
                autoclose: true
            }).inputmask("dd/mm/yyyy", {
                 placeholder: "_"
            });
        }

        $(".form_datetime").datetimepicker({
            format: "dd MM yyyy - hh:ii",
            autoclose: true,
            todayBtn: true,
            minuteStep: 15
        });

        $('body').removeClass("modal-open"); // fix bug when inline picker is used in modal
    }

    var handleSpinners = function() {
        $('.spinner').spinner({value:0, min: 0});
    }

    var extendDropZone = function() {
        Dropzone.options.myDropzone = {
            init: function() {
                this.on("addedfile", function(file) {
                    // Create the remove button
                    var removeButton = Dropzone.createElement("<button class='btn btn-sm btn-block'>Remove file</button>");
                    
                    // Capture the Dropzone instance as closure.
                    var _this = this;

                    // Listen to the click event
                    removeButton.addEventListener("click", function(e) {
                      // Make sure the button click doesn't submit the form:
                      e.preventDefault();
                      e.stopPropagation();

                      // Remove the file preview.
                      _this.removeFile(file);
                      // If you want to the delete the file on the server as well,
                      // you can do the AJAX request here.
                    });

                    // Add the button to the file preview element.
                    file.previewElement.appendChild(removeButton);
                });
            }
        }
    }

    return {
        init: function() {
            extendValidatorPlugin();
            handleInputMasks();
            handleDatePickers();
            handleSpinners();
            extendDropZone();

            function format(state) {
                if (!state.id) return state.text; // optgroup
                return "<img class='flag' src='assets/global/img/flags/" + state.id.toLowerCase() + ".png'>&nbsp;&nbsp;" + state.text;
            }

            $(".daftar_negara").select2({
                placeholder: "Pilih Negara",
                allowClear: true,
                formatResult: format,
                formatSelection: format,
                escapeMarkup: function (m) {
                    return m;
                }
            });
        }
    };
}();