<?php include "core/init.php"; ?>
<?php 

$db = new Database;
$query = $db->query("SELECT * FROM contacts ");
$contacts = $db->resultset();

?>

<div class="grid-container grid-x align-middle">
    <div class="columns large-12">
      <table>
        <thead>
          <tr>
            <th width="200">Name</th>
            <th width="130">Phone</th>
            <th width="200">Email</th>
            <th width="250">Address</th>
            <th width="100">Group</th>
            <th width="150">Actions</th>
          </tr>
        </thead>
        <tbody>

        <?php foreach($contacts as $contact) : ?>
        
          <tr>
            <td><a href="contact.html"><?php echo $contact->first_name . ' ' . $contact->last_name; ?></a></td>
            <td><?php echo $contact->phone;?></td>
            <td><?php echo $contact->email;?></td>
            <td>
              <ul style="list-style: none;">
                <li><?php echo $contact->address1;?></li>
                <li><?php if($contact->address2) echo $contact->address2; ?></li>
              </ul>
            </td>
            <td><?php echo $contact->contact_group;?></td>
            <td width="200">
              <ul class="button-group align-spaced" style="list-style: none;">
                <li><a href="#" class="button" data-reveal-id="myModal">Edit</a></li>
                <li><a href="#" class="button [secondary alert success]">Delete</a></li>
              </ul>
            </td>
          </tr>

          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>