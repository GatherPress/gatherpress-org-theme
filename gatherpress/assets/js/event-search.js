    document.addEventListener('DOMContentLoaded', function () {

        // Find ONLY the Event search block
        const eventSearchForms = document.querySelectorAll('form.search-event');

        eventSearchForms.forEach(function(form) {

            // Avoid duplicate hidden fields
            if (!form.querySelector('input[name="type"]')) {
                const hidden = document.createElement('input');
                hidden.type = 'hidden';
                hidden.name = 'type';
                hidden.value = 'event';
                form.appendChild(hidden);
            }
        });

    });