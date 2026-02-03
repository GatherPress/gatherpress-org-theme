document.addEventListener('DOMContentLoaded', () => {
            const commentField = document.getElementById('cf_comments');
            const charCount = document.getElementById('char_count');

            if (commentField && charCount) {
                commentField.addEventListener('input', () => {
                    const length = commentField.value.length;
                    charCount.textContent = `${length} Of 500 Max Characters`;
                });
            }
        });