
document.addEventListener('DOMContentLoaded', function () {
    const search_course = document.querySelector('#search');
    const courses = document.querySelectorAll('.cards');
    search_course.addEventListener('input', function () {
    const search_item = search_course.value.trim().toLowerCase();
            courses.forEach(function (course) {
            const course_name = course.querySelector('.card .card-body .card-title h5').textContent.toLowerCase() ;
            console.log(course_name);
            console.log(course);
            if (course_name.includes(search_item)) {
                course.style.display = 'block';
            } else {
                course.style.display = 'none';
            }
        });
    });
});
