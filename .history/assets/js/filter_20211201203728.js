$(document).ready(function(){
    filter_data();
    function filter_data()
    {
        $('.filter_data');      
        var action = 'fetch_data';
        var category = get_filter('category');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, category:category},
            success:function(data){
                $('.filter_data').html(data);                 
            }
        });
    }
    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }



});
