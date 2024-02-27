
document.addEventListener('DOMContentLoaded', function () {
    const search_course = document.querySelector('#searches');
    const courses = document.querySelectorAll('tbody tr td .d-flex');
    search_course.addEventListener('input', function () {
    const search_item = search_course.value.trim().toLowerCase();
            courses.forEach(function (course) {
            const course_name = course.querySelector('.d-flex h5 a').textContent.toLowerCase();
            if (course_name.includes(search_item)) {
                course.parentElement.parentElement.style.display = 'table-row';
            } else {
                course.parentElement.parentElement.style.display = 'none';
            }
        });
    });
});