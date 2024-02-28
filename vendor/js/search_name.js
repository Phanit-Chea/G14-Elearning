document.addEventListener('DOMContentLoaded', function () {
    const search_user = document.querySelector('#search_user');
    const users = document.querySelectorAll('tbody tr');
    
    search_user.addEventListener('input', function () {
        const search_item = search_user.value.trim().toLowerCase();
        
        users.forEach(function (user) {
            const user_name = user.querySelector('td:nth-child(2)').textContent.toLowerCase();
            
            if (user_name.includes(search_item)) {
                user.style.display = 'table-row';
            } else {
                user.style.display = 'none';
            }
        });
    });
});