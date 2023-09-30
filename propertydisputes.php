<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Dispute Case Filing</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Basic CSS for layout and spacing */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .buttons {
            text-align: center;
        }
        input[type="reset"],
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="reset"] {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Property Dispute Case Filing</h1>
        <form action="prop.php" method="post">
            <label for="victim_name">Full Name:</label>
            <input type="text" id="victim_name" name="victim_name" required>

            <label for="aadhar no">Aadhar no.:</label>
            <input type="text" id="aadhar_no" name="aadhar_no" required>

            <label for="victim_address">Address:</label>
            <textarea id="victim_address" name="victim_address" rows="4" required></textarea>

            <label for="property_address">Property Address:</label>
            <textarea id="property_address" name="property_address" rows="4" required></textarea>

            <label for="case_description">Case Description:</label>
            <textarea id="case_description" name="case_description" rows="6" required></textarea>

            
            <label for="email">Email:</label>
              <input type= "text" id="email" name="email" required>

              
             <label for="contact_no">Contact no:</label>
              <input type= "text" id="contact_no" name="contact_no" required>

            <label for="evidence">Upload Evidence:</label>
            <input type="file" id="evidence" name="evidence" accept=".pdf, .jpg, .png" required>

            <div class="buttons">
                <input type="reset" value="Reset">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>