<script>

    function btn_search_show() {

        var input_search = $("input[type='search']"),
                label_search = $('#example_filter label');

        $(input_search).focus();
        $(label_search).css({
            "width": "100%",
            "display": "inline"
        });

        $(input_search).css({
            "opacity": "1",
            "position": "relative",
            "right": "10px",
            "bottom": "10px",
            "height": "50px",
            "width": "calc(50% - 70px)"
        });
        $(input_search).focusout(function () {
            $(this).css({
                "opacity": "0",
                "height": "0px",
                "width": "0px"
            });
//            $(this).val("");
        });
    }


    $(document).ready(function () {

        var button_search = $('#example_filter');
        $(button_search).append("<div class='button_to_search' onclick='btn_search_show()'></div>");

        $('.button_to_search').css({
            "position": "relative",
            "text-align": "center",
            "bottom": "10px",
            "width": "50px",
            "height": "50px",
            "border-radius": "14px",
            "border": "grey .5px solid",
            "float": "right"
        });

        //Show n Entries

        $(example_length).addClass("col-md-6");
        $(example_length).css({
            "visibility": "hidden",
            "float": "left",
            "height": "100%"
        });

        $('#example_length label, #example_info').css({
            "text-transform": "capitalize",
            "word-spacing": "1px",
            "font-size": "18px",
            "position": "relative",
            "height": "54px",
            "line-height": "54px",
            "width": "100%",
            "border-radius": "14px",
            "text-align": "left",
            "bottom": "10px"
        });

        $('#example_info').css({
            "width": "50%",
            "text-align": "left"
        });

        $('.dataTables_paginate').css({
            "position": "relative",
            "width": "100%",
            "right": "0",
            "font-size": "18px",
            "word-spacing": "20px"
        })
    });


</script>