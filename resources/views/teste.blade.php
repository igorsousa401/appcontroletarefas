

<h1 name="impression" id="impression"></h1>
<input type="text" name="write" id="write">

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script>
    $('#write').keyup(function() {
        $('#impression').text($(this).val());
    });
</script>