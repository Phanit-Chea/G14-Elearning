document.addEventListener('DOMContentLoaded', function () {
    let search = document.querySelector('#search');
    let list_course = document.querySelectorAll('body tr ');
    console.log(list_course);
    search.addEventListener('input', function () {
        const search_item = search.value.trim().toLowerCase();
        list_course.forEach(function (course) {

            const course_name = course.querySelector('.align-items-center h6 a');
            if (course_name != null) {
                const text = course_name.textContent.toLowerCase();
                console.log(text);
                if (text.includes(search_item)) {
                    course.style.display = 'table-row';
                } else {
                    course.style.display = 'none';
                }
            }

        });
    });

});
