<?php
// Retrieve the contacts data sent via AJAX
$contacts = $_POST['contacts'];

// Process the contacts and add them to your app's friend list
foreach ($contacts as $contact) {
    $name = $contact['name'];
    $phoneNumbers = $contact['phoneNumbers'];
    
    // Iterate through phone numbers
    foreach ($phoneNumbers as $phoneNumber) {
        $number = $phoneNumber['value'];
        
        // Save the contact details in your database or perform any other desired action
        // Example: Insert the contact into the "friends" table
        // $query = "INSERT INTO friends (name, phone) VALUES ('$name', '$number')";
        // $result = mysqli_query($connection, $query);
        
        // Echo a success message or perform additional actions
        echo "Contact added: $name ($number)\n";
    }
}
?>
