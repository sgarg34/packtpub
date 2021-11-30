$('#load-more').click(function() {  
    var page = $(this).data('paginate');  
    loadMoreData(page);
    $(this).data('paginate', page+1);
    
});
var appUrl = window.location.href;
// run function when user click load more button
function loadMoreData(paginate) {
    $.ajax({
        url: appUrl+'getRecords/' + paginate,
        type: 'GET',
        beforeSend: function() {
            $('#load-more').text('Loading...');
        },
        success: function (data) {
            console.log(data);
            if(data.length == 0) {
                $('#load-more').hide();
                return;
            } else {
                $('#load-more').text('Load more...');
                $('.books').append(data);
            }
        },error:function(){ 
             console.log(data);
        }
    })
}