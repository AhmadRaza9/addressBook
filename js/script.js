$(document).ready(function(){
    $('#loaderImage').show();
    showContacts();
    
    // Add Contacts
    $(document).on('submit', '#addContact', function() {
        $('#loaderImage').show();

        $.post('add_contact.php', $(this).serialize()).done(function(){
            showContacts();
        });
        return false;
    });

    // Edit Contacts
    $(document).on('submit', '#editContact', function() {
        $('#loaderImage').show();

        $.post('edit_contact.php', $(this).serialize()).done(function(){
            showContacts();
        });
        return false;
    });

});

function showContacts() {
    setTimeout(() => {
        $('#loaderImage').hide();
        $('#pageContent').load('contacts.php');
    }, 2000);
}