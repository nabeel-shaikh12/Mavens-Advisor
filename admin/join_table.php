<?php
include '../db/dbCon.php';
$error = "";
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
} 
else {
    $sql = "SELECT c.*, s.business_description, s.business_size, s.business_category, s.business_name, s.firstname, s.lastname, s.email, s.phone_no 
    FROM calculator c
    LEFT JOIN subscription_form s ON c.id = s.id";
    $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Your description here">
    <title>Your Title Here</title>
    <link rel="stylesheet" href="path/to/your/css/styles.css">
</head>
<body>

<div class="container">
    <h2>Calculator and Subscription Form Data</h2>
    <?php if(isset($result) && $result->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Transaction Price</th>
                    <th>Invoice Price</th>
                    <th>Payroll Price</th>
                    <th>Cashflow Price</th>
                    <th>Budget Price</th>
                    <th>Setup Price</th>
                    <th>Total Price</th>
                    <th>Discount Price</th>
                    <th>Business Description</th>
                    <th>Business Size</th>
                    <th>Business Category</th>
                    <th>Business Name</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['transactionPrice']; ?></td>
                    <td><?php echo $row['invoicePrice']; ?></td>
                    <td><?php echo $row['payrollPrice']; ?></td>
                    <td><?php echo $row['cashflowPrice']; ?></td>
                    <td><?php echo $row['budgetPrice']; ?></td>
                    <td><?php echo $row['setupPrice']; ?></td>
                    <td><?php echo $row['totalPrice']; ?></td>
                    <td><?php echo $row['discountPrice']; ?></td>
                    <td><?php echo $row['business_description']; ?></td>
                    <td><?php echo $row['business_size']; ?></td>
                    <td><?php echo $row['business_category']; ?></td>
                    <td><?php echo $row['business_name']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone_no']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No records found.</p>
    <?php endif; ?>
</div>

<script src="path/to/your/js/scripts.js"></script>
</body>
</html>

<?php
$conn->close();
?>
