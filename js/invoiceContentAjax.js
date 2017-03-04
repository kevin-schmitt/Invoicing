$(document).ready(function() {

    $('#contentInvoice').on('submit', function(e) {
        e.preventDefault(); // For stop webbrowser to submit form

        var $this = $(this); // data of form

        // Get value
        var id = $('#nbSI').val();
        var product = $('#product').val();
        var quantity = $('#quantity').val();
        var rate = $('#rate').val();

        // check if form not empty
        if(id === '' || product === '' || quantity === '' || rate === '') {
            alert('Empty value(s) in form');
        } else {
            // asynchrone
            $.ajax({
                url: $this.attr('action'), // add row Invoice controller
                type: $this.attr('method'), // post
                data: $this.serialize(), //I send data object
                success: function(html) {
                    alert(html); // J'affiche cette réponse
                }
            });
        }
    });
});
