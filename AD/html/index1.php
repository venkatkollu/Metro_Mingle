<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 50px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>

<h2>Submitted Event Details</h2>

<table>
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo htmlspecialchars($_POST['user-name']); ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo htmlspecialchars($_POST['email']); ?></td>
    </tr>
    <tr>
        <td>Area</td>
        <td><?php echo htmlspecialchars($_POST['area']); ?></td>
    </tr>
    <tr>
        <td>Event Date</td>
        <td><?php echo htmlspecialchars($_POST['dob']); ?></td>
    </tr>
    <tr>
        <td>Event Time</td>
        <td><?php echo htmlspecialchars($_POST['time']); ?></td>
    </tr>
    <tr>
        <td>Budget</td>
        <td><?php echo htmlspecialchars($_POST['budget']); ?></td>
    </tr>
    <tr>
        <td>Event Type</td>
        <td><?php echo htmlspecialchars($_POST['event']); ?></td>
    </tr>
    <tr>
        <td>Add-ons</td>
        <td><?php echo htmlspecialchars($_POST['addons']); ?></td>
    </tr>
</table>

<a href="regform.html">Back to Registration</a>

</body>
</html>
