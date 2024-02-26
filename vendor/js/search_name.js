document.addEventListener('DOMContentLoaded', function () {
    const search_course = document.querySelector('');
    const courses = document.querySelectorAll(' .col-sm-6');
    search_course.addEventListener('input', function () {
    const search_item = search_course.value.trim().toLowerCase();
            courses.forEach(function (course) {
            const course_name = course.querySelector('.card-text').firstElementChild.textContent.toLowerCase();
            if (course_name.includes(search_item)) {
                course.style.display = 'block';
            } else {
                course.style.display = 'none';
            }
        });
    });
});