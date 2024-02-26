    document.addEventListener('DOMContentLoaded', function () {
    const search_course = document.querySelector('#search');
    const courses = document.querySelectorAll('#course .col-sm-6');
    console.log(courses);
    search_course.addEventListener('input', function () {
    const search_item = search_course.value.trim().toLowerCase();
            courses.forEach(function (course) {
            const course_name = course.querySelector('.form-select').firstElementChild.textContent.toLowerCase();
            if (course_name.includes(search_item)) {
                course.style.display = 'block';
            } else {
                course.style.display = 'none';
            }
        });
    });
});