// Function to handle form submission for creating a user
function createUser() {
    const formData = new FormData(document.getElementById("createUserForm"));
    fetch('create_user.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response
    
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

// Function to handle form submission for reading user details
function readUser() {
    const userId = document.getElementById("user_id").value;
    fetch(`read_user.php?user_id=${userId}`)
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response (user details)
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

// Function to handle form submission for updating user information
function updateUser() {
    const formData = new FormData(document.getElementById("updateUserForm"));
    fetch('update_user.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

// Function to handle form submission for deleting a user
function deleteUser() {
    const userId = document.getElementById("user_id_delete").value;
    fetch('delete_user.php', {
        method: 'POST',
        body: JSON.stringify({ user_id: userId }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response

    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

// Add event listeners to the forms
document.getElementById("createUserForm").addEventListener("submit", function(event) {
    event.preventDefault();
    createUser();
});

document.getElementById("readUserForm").addEventListener("submit", function(event) {
    event.preventDefault();
    readUser();
});

document.getElementById("updateUserForm").addEventListener("submit", function(event) {
    event.preventDefault();
    updateUser();
});

document.getElementById("deleteUserForm").addEventListener("submit", function(event) {
    event.preventDefault();
    deleteUser();
});

// Functions for CRUD operations on Student entity
function createStudent() {
    const formData = new FormData(document.getElementById("createStudentForm"));
    fetch('create_student.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response
    
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

function readStudent() {
    const studentId = document.getElementById("student_id").value;
    fetch(`read_student.php?student_id=${studentId}`)
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response (student details)

    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

function updateStudent() {
    const formData = new FormData(document.getElementById("updateStudentForm"));
    fetch('update_student.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response

    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

function deleteStudent() {
    const studentId = document.getElementById("student_id_delete").value;
    fetch('delete_student.php', {
        method: 'POST',
        body: JSON.stringify({ student_id: studentId }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response

    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

// Event listeners for Student CRUD forms
document.getElementById("createStudentForm").addEventListener("submit", function(event) {
    event.preventDefault();
    createStudent();
});

document.getElementById("readStudentForm").addEventListener("submit", function(event) {
    event.preventDefault();
    readStudent();
});

document.getElementById("updateStudentForm").addEventListener("submit", function(event) {
    event.preventDefault();
    updateStudent();
});

document.getElementById("deleteStudentForm").addEventListener("submit", function(event) {
    event.preventDefault();
    deleteStudent();
});

// Functions for CRUD operations on Course entity
function createCourse() {
    const formData = new FormData(document.getElementById("createCourseForm"));
    fetch('create_course.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response

    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

function readCourse() {
    const courseId = document.getElementById("course_id").value;
    fetch(`read_course.php?course_id=${courseId}`)
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response (course details)
   
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

function updateCourse() {
    const formData = new FormData(document.getElementById("updateCourseForm"));
    fetch('update_course.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response

    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

function deleteCourse() {
    const courseId = document.getElementById("course_id_delete").value;
    fetch('delete_course.php', {
        method: 'POST',
        body: JSON.stringify({ course_id: courseId }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response
 
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

// Event listeners for Course CRUD forms
document.getElementById("createCourseForm").addEventListener("submit", function(event) {
    event.preventDefault();
    createCourse();
});

document.getElementById("readCourseForm").addEventListener("submit", function(event) {
    event.preventDefault();
    readCourse();
});

document.getElementById("updateCourseForm").addEventListener("submit", function(event) {
    event.preventDefault();
    updateCourse();
});

document.getElementById("deleteCourseForm").addEventListener("submit", function(event) {
    event.preventDefault();
    deleteCourse();
});

// Functions for CRUD operations on Instructor entity
function createInstructor() {
    const formData = new FormData(document.getElementById("createInstructorForm"));
    fetch('create_instructor.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response

    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

function readInstructor() {
    const instructorId = document.getElementById("instructor_id").value;
    fetch(`read_instructor.php?instructor_id=${instructorId}`)
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response (instructor details)

    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

function updateInstructor() {
    const formData = new FormData(document.getElementById("updateInstructorForm"));
    fetch('update_instructor.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response
 
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

function deleteInstructor() {
    const instructorId = document.getElementById("instructor_id_delete").value;
    fetch('delete_instructor.php', {
        method: 'POST',
        body: JSON.stringify({ instructor_id: instructorId }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response
 
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

// Event listeners for Instructor CRUD forms
document.getElementById("createInstructorForm").addEventListener("submit", function(event) {
    event.preventDefault();
    createInstructor();
});

document.getElementById("readInstructorForm").addEventListener("submit", function(event) {
    event.preventDefault();
    readInstructor();
});

document.getElementById("updateInstructorForm").addEventListener("submit", function(event) {
    event.preventDefault();
    updateInstructor();
});

document.getElementById("deleteInstructorForm").addEventListener("submit", function(event) {
    event.preventDefault();
    deleteInstructor();
});

// Functions for CRUD operations on Enrollment entity
function createEnrollment() {
    const formData = new FormData(document.getElementById("createEnrollmentForm"));
    fetch('create_enrollment.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response

    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

function readEnrollment() {
    const enrollmentId = document.getElementById("enrollment_id").value;
    fetch(`read_enrollment.php?enrollment_id=${enrollmentId}`)
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response (enrollment details)

    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

function updateEnrollment() {
    const formData = new FormData(document.getElementById("updateEnrollmentForm"));
    fetch('update_enrollment.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response
   
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

function deleteEnrollment() {
    const enrollmentId = document.getElementById("enrollment_id_delete").value;
    fetch('delete_enrollment.php', {
        method: 'POST',
        body: JSON.stringify({ enrollment_id: enrollmentId }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle the response
   
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or show error messages to the user
    });
}

// Event listeners for Enrollment CRUD forms
document.getElementById("createEnrollmentForm").addEventListener("submit", function(event) {
    event.preventDefault();
    createEnrollment();
});

document.getElementById("readEnrollmentForm").addEventListener("submit", function(event) {
    event.preventDefault();
    readEnrollment();
});

document.getElementById("updateEnrollmentForm").addEventListener("submit", function(event) {
    event.preventDefault();
    updateEnrollment();
});

document.getElementById("deleteEnrollmentForm").addEventListener("submit", function(event) {
    event.preventDefault();
    deleteEnrollment();
});


