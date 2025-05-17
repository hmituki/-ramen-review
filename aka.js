document.addEventListener('DOMContentLoaded', function() {
    fetch('fetch_user_accounts.php')
        .then(response => response.json())
        .then(data => {
            const accountInfoDiv = document.getElementById('account-info');
            if (data.error) {
                accountInfoDiv.innerHTML = `<strong>Error:</strong> ${data.error}`;
            } else {
                data.forEach(account => {
                    const accountDiv = document.createElement('div');
                    accountDiv.innerHTML = `<strong>Username:</strong> ${account.USERNAME} <br> <strong>Password:</strong> ${account.PASSWORD}`;
                    accountInfoDiv.appendChild(accountDiv);
                });
            }
        })
        .catch(error => console.error('Error fetching account data:', error));
});
