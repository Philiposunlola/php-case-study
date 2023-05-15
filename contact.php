<!DOCTYPE html>
<html>
<head>
  <title>Contact List</title>
</head>
<body>
  <h1>Contact List</h1>
  
  <?php
    // Define an array of contacts
    $contacts = array(
      array(
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        'phone' => '123-456-7890'
      ),
      array(
        'name' => 'Jane Smith',
        'email' => 'janesmith@example.com',
        'phone' => '987-654-3210'
      ),
      array(
        'name' => 'Michael Johnson',
        'email' => 'michaeljohnson@example.com',
        'phone' => '555-123-4567'
      )
    );
  ?>
  
  <ul>
    <?php foreach ($contacts as $contact): ?>
    <li>
      <h2><?php echo $contact['name']; ?></h2>
      <p>Email: <?php echo $contact['email']; ?></p>
      <p>Phone: <?php echo $contact['phone']; ?></p>
    </li>
    <?php endforeach; ?>
  </ul>
  
</body>
</html>