$(document).ready(function(){
    $('#loaderImage').show();

    showContacts();

});

function showContacts() {
    setTimeout(() => {
        $('#loaderImage').hide();
        $('#pageContent').load('./contacts.php');
    }, 2000);
}