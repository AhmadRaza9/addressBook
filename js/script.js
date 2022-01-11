$(document).ready(function(){
    $('#loaderImage').show();

    showContacts();

});

function showContacts() {
    setTimeout(() => {
        $('#loaderImage').hide();
        $('#pageContent').load('./add_contact.php');
    }, 2000);
}