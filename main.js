function login() {
    // Get values from the form
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Simple validation
    if (username === 'user' && password === 'password') {
        // Redirect to dashboard and pass username to display welcome message
        window.location.href = 'dashboard.html?user=' + username;
        return false; // Prevent form submission
    } else {
        alert('Invalid credentials. Try again.');
        return false; // Prevent form submission
    }
}

function logout() {
    // Redirect to the login page
    window.location.href = 'index.html';
}

// Extract username from the URL and display a welcome message
function displayWelcomeMessage() {
    var urlParams = new URLSearchParams(window.location.search);
    var user = urlParams.get('user');
    
    if (user) {
        document.getElementById('welcomeMessage').innerHTML = 'Welcome, ' + user + '!';
    }
}

// Call the function when the dashboard page loads
displayWelcomeMessage();
