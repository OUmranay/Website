    // Get the form data from the query parameters in the URL
    const params = new URLSearchParams(window.location.search);

    // Display the form data in the HTML
    document.getElementById('name').textContent = params.get('name');
    document.getElementById('email').textContent = params.get('email');
    document.getElementById('gender').textContent = params.get('gender');
    document.getElementById('languages').textContent = params.get('languages');
    document.getElementById('birthdate').textContent = params.get('birthdate');
    document.getElementById('accept').textContent = params.get('accept');
    document.getElementById('message').textContent = params.get('message');