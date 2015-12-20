$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// dismiss the global search overlay
(function(){
    $(".close-search-overlay").click(function(){
        $("#search-overlay").fadeOut();
    });
})();

// lanuch the global search overlay
(function() {
    $(".search-icon").click(function() {
        var entity = $(this).data('entity');
        entity = entity.charAt(0).toUpperCase() + entity.slice(1);
        $("#search-overlay span.entity").html(entity);
        $("#search-overlay").fadeIn();
        $(".entity-type-button").html(entity);
    });
})();

(function() {
    $(".entity-dropdown-item").click(function() {
        var entity = $(this).html();
        $(".entity-dropdown-item").removeClass("active");
        $(this).addClass("active");
        $("#search-overlay span.entity").html(entity);
        $(".entity-type-button").html(entity);
        $("#global-search").attr('placeholder', 'Search for ' + entity);
    });
})();

(function() {
    $(".global-search-button").click(function() {
        // get the search query
        var entity = $(".entity-dropdown-item.active").html();
        var query = $("#global-search").val();
        if (query.length > 0) {
            $.getJSON('/admin/search/', {entity: entity, query: query}, function(response){
                console.log(response);
            });
        } else {
            $("#global-search").attr('placeholder', 'You must enter something to search for!');
            setTimeout(function() {
                
                $("#global-search").attr('placeholder', 'Search for ' + entity);
            }, 3000)
        }
    });
})();

(function() {
    $("#add-subscriber-form").submit(function() {
        $("#add-subscriber-button").html('Adding...');
        $("#add-subscriber-button").attr('disabled', 'disabled');
    });
})();
//# sourceMappingURL=admin.js.map
