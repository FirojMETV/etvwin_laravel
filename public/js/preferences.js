
    document.addEventListener("DOMContentLoaded", function() {
        var checkboxes = document.querySelectorAll(".read-more-state");
        checkboxes.forEach(function(checkbox) {
            var label = checkbox.nextElementSibling;
            label.classList.remove("followed"); // Remove the "followed" class initially

            label.addEventListener("click", function() {
                if (checkbox.checked) {
                    checkbox.checked = false;
                    label.classList.remove("followed");
                } else {
                    checkbox.checked = true;
                    label.classList.add("followed");
                }
            });
        });
    });

    // for active tv page code 
    $(".activate-tv-input").keydown(function(e) {
        if (e.which === 8 && this.value.length === 0) {
            $(this).prev('.activate-tv-input').focus();
        }
    });

    $(".activate-tv-input").keyup(function(e) {
        if (this.value.length === this.maxLength) {
            $(this).next('.activate-tv-input').focus();
        }
    });