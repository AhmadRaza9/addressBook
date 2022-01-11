<?php 

include "core/init.php"; 

$db = new Database;
$query = $db->query("SELECT * FROM contacts ORDER BY id DESC ");
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
            <td class="contact_id_<?php echo $contact->id;?>"><a href="contact.html"><?php echo $contact->first_name . ' ' . $contact->last_name; ?></a></td>
            <td><?php echo $contact->phone;?></td>
            <td><?php echo $contact->email;?></td>
            <td>
              <ul style="list-style: none;">
                <li><?php echo $contact->address1; ?>, <?php echo $contact->city; ?>, <?php echo $contact->zipcode; ?></li>
                <li><?php if($contact->address2) echo $contact->address2; ?></li>
              </ul>
            </td>
            <td class="contact_group"><p><?php echo $contact->contact_group;?></p></td>
            <td width="200">
              <ul class="button-group align-spaced" style="list-style: none;">
                <li>
                <button class="button" data-open="editModal<?php echo $contact->id; ?>" data-reveal-id="editModal<?php echo $contact->id; ?>" data-contact-id="<?php echo $contact->id; ?>">Edit</button>
                    <div class="reveal" id="editModal<?php echo $contact->id; ?>" data-cid="editModal<?php echo $contact->id; ?>" data-reveal>
                        <h2>Add Contact</h2>
                        <form id="addContact" action="#" method="post">
                        <div class="grid-x">
                            <div class="large-6 columns">
                            <label>First Name </label>
                            <input name="first_name" type="text" placeholder="Enter First Name" value="<?php echo $contact->first_name; ?>"/>
                            </div>
                            <div class="large-6 columns">
                            <label>Last Name </label>
                            <input name="last_name" type="text" placeholder="Enter Last Name" value="<?php echo $contact->last_name; ?>"/>
                            </div>
                        </div>
                        <div class="grid-x">
                            <div class="large-4 columns">
                            <label>Email </label>
                            <input name="email" type="email" placeholder="Enter Email address" value="<?php echo $contact->email; ?>"/>
                        </div>
                            <div class="large-4 columns">
                            <label>Phone Number</label>
                                <input name="phone" type="tel" placeholder="315-550-8712" value="<?php echo $contact->phone; ?>"/>
                            </div>
                            <div class="large-4 columns">
                            <label>Contact Group</label> 
                            <select name="contact_group">
                                <option value="family" <?php if($contact->contact_group == 'family') echo 'selected'; ?>>Family</option>
                                <option value="friends" <?php if($contact->contact_group == 'friends') echo 'selected'; ?>>Friends</option>
                                <option value="business" <?php if($contact->contact_group == 'business') echo 'selected'; ?>>Business</option>
                            </select>
                        </div>
                        </div>
                        <div class="grid-x">
                            <div class="large-6 columns">
                            <label>Address1 </label>
                            <input name="address1" type="text" placeholder="Enter Street, House Number, GPO" value="<?php echo $contact->address1; ?>"/>
                            </div>
                            <div class="large-6 columns">
                            <label>Address2 </label>
                            <input name="address2" type="text" placeholder="Enter Additional Address" value="<?php echo $contact->address2; ?>"/>
                            </div>
                        </div>
                        <div class="grid-x">
                            <div class="large-4 columns">
                            <label>City </label>
                            <input name="city" type="text" placeholder="Enter Your City" value="<?php echo $contact->city; ?>"/>
                        </div>
                            <div class="large-4 columns">
                            <label>State </label>
                            <select name="state">
                                <?php foreach($states as $key => $value): ?>

                                    <?php 
                                        if($key == $contact->state){
                                            $selected = 'selected';
                                        } else {
                                            $selected = '';
                                        }
                                    ?>

                                    <option value="<?php echo $key; ?>" <?php echo $selected; ?>><?php echo $value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                            <div class="large-4 columns">
                            <label>Zipcode </label>
                                <input name="zipcode" type="text" placeholder="Enter Zone or State" value="<?php echo $contact->zipcode; ?>"/>
                            </div>
                        </div>
                        <div class="grid-x">
                            <div class="large-12 columns">
                            <label>Notes</label>
                                <textarea name="notes" placeholder="Enter Optional Notes"><?php echo $contact->notes; ?></textarea>
                            </div>
                        </div>
                        <input name="submit" type="submit" data-close aria-label="Close modal" class="add-btn button right small" value="Add Contact" />
                        </form>
                        <button class="close-button" data-close aria-label="Close modal" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
                <li><a href="#" class="button [secondary alert success]">Delete</a></li>
              </ul>
            </td>
          </tr>

          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>