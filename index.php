<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Vacancy Form</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="success-popup" id="popup">
    Application Submitted Successfully.<br>
    Our team will contact you within 24 hours.
</div>

<div class="container">

    <h1>Job Application Form</h1>

    <form action="submit.php" method="POST">

        <input
            type="text"
            name="name"
            placeholder="Full Name"
            required
        >

        <input
            type="tel"
            name="mobile"
            placeholder="Mobile Number"
            maxlength="10"
            pattern="[0-9]{10}"
            required
        >

        <input
            type="text"
            name="district"
            placeholder="District"
            required
        >

        <input
            type="number"
            name="age"
            placeholder="Age"
            required
        >

        <button type="submit">
            Submit Application
        </button>

    </form>

</div>

<script src="script.js"></script>

</body>
</html>
