
    $(function() {
        const today = new Date();
        const lastYear = new Date(today.getFullYear() - 1, today.getMonth(), today.getDate());
        const fromField = $("#from_Date");
        const toField = $("#Today_date");
        const errorMessage = $("#error_message");

        fromField.datepicker({
            maxDate: today,
            dateFormat: "yy-mm-dd",
            onSelect: function(selectedDate) {
                validateDateRange();
            }
        });

        toField.datepicker({
            maxDate: today,
            dateFormat: "yy-mm-dd",
            onSelect: function(selectedDate) {
                validateDateRange();
            }
        });

        function validateDateRange() {
            const fromDate = fromField.datepicker("getDate");
            const toDate = toField.datepicker("getDate");
            if (fromDate && toDate && fromDate > toDate) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'To date should be greater than From date !',
                    confirmButtonColor: '#7249bf',
                    confirmButtonText: 'OK'
                });
            } else {
                errorMessage.text("");
            }
        }
    });

    $(document).ready(function() {
        $('#openFormButton').click(function() {
            $('.overlay').toggleClass('show');
            $('.open-calender').toggleClass('show');
        });
    });
