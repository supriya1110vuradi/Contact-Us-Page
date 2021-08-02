<html>
<head>
    <title>Contact US</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Contact Us Form</h3>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" name="message" id="message" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="query">Query</label>
                <input type="text" name="query" id="query" class="form-control" required>
            </div>

         <div class="form-group">

        <button type= "submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>
        </form>
    </div>
</body>
</html>