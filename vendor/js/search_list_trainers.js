document.addEventListener('DOMContentLoaded', function () {
    const search_name = document.querySelector('#trainer');
    const trainer_list = document.querySelectorAll('.card'); 
    search_name.addEventListener('input', function () {
        const search_items = search_name.value.trim().toLowerCase();
        trainer_list.forEach(function (name) {
            const trainer_name = name.querySelector('.card a').textContent.toLowerCase();
            if (trainer_name.includes(search_items)) {
                name.style.display = 'block';
            } else {
                name.style.display = 'none';
            }
        });
    });
});