$(document).ready(function() {
    $('.datetime-picker').datetimepicker();
    
    // Confirm when deleting a page
    $('.btn-delete-page').click(function() {
       confirm('You want to remove this page?'); 
    });
    
});