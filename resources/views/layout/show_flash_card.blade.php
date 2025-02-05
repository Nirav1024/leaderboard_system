<?php

if (!empty(Session::has('danger'))) {
    echo alert('danger', Session::get('danger'));
    unset($_SESSION['danger']);
}

if (!empty(Session::has('success'))) {
    echo alert('success', Session::get('success'));
    unset($_SESSION['success']);
}
?>
<script>
    setTimeout(function() {
        var alertElement = document.querySelector('.alert-success');
        if (alertElement) {
            alertElement.style.display = 'none';
        }
    }, 2000);
    setTimeout(function() {
        var alertElement = document.querySelector('.alert-danger');
        if (alertElement) {
            alertElement.style.display = 'none';
        }
    }, 2000);
</script>
