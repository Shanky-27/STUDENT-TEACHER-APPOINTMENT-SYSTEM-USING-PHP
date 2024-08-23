document.getElementById('appointmentForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const studentName = document.getElementById('studentName').value;
    const teacherName = document.getElementById('teacherName').value;
    const appointmentDate = document.getElementById('appointmentDate').value;

    fetch('submit_appointment.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            'studentName': studentName,
            'teacherName': teacherName,
            'appointmentDate': appointmentDate
        })
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('message').innerText = data;
        document.getElementById('appointmentForm').reset();
    })
    .catch(error => {
        console.error('Error:', error);
    });
});