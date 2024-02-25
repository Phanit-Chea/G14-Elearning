
// JavaScript functions to open and close the modal
function change_background(form){
    form.style.backgroundColor = 'black';

}
console.log(document.body);
function openModal() {
    document.getElementById('modal').style.display = 'block';
}

function closeModal() {
    document.getElementById('modal').style.display = 'none';
}
let form = document.querySelector('.container');
// JavaScript code to handle form submission
// console.log(document.getElementById('create-course-form'));
document.getElementById('create-course-form').addEventListener('submit', function (event) {
    event.preventDefault();

    // Retrieve form values

    // Display the captured values (you can modify this part according to your requirements)

    // Reset the form
    document.getElementById('create-course-form').reset();
    document.body.style.backgroundColor = 'black';
    // Close the modal
    closeModal();
});


