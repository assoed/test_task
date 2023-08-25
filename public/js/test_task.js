document.addEventListener('DOMContentLoaded', function() {
    const textForm = document.getElementById('text-form');
    const outputBlock = document.getElementById('output-block');

    textForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const inputValue = document.getElementById('INN-input').value;

        fetch(textForm.action, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'X-CSRF-TOKEN':  csrfToken
            },
            body: `INN-input=${encodeURIComponent(inputValue)}`
        })

            .then(response => response.json()) // Convert the response to JSON

            .then(data => {
                outputBlock.textContent = JSON.stringify(data, null, 2); // Display the JSON data as a string

            });
    });
});
