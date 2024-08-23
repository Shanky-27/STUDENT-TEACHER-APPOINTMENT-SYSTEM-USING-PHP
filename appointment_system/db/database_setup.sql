CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100) NOT NULL,
    teacher_name VARCHAR(100) NOT NULL,
    appointment_date DATETIME NOT NULL
);
