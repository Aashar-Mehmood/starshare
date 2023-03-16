<style>
    .pr {
        position: relative;
    }

    #alert {
        width: clamp(260px, 100%, 460px);
        opacity: 0;
        transition: opacity 0.4s ease-in-out;
        position: absolute;
        top: 25px;
        left: 50%;
        transform: translateX(-50%);
    }

    #alert.show {
        opacity: 1;
    }

    #alert #close {
        cursor: pointer;
    }
</style>
<?php
$alert_type = '';
$alert_description = '';

if (!empty($_SESSION['error_msg'])) {
    $alert_type = 'alert-danger';
    $alert_description = $_SESSION['error_msg'];
    unset($_SESSION['error_msg']);
} else if (!empty($_SESSION['success_msg'])) {
    $alert_type = 'alert-success';
    $alert_description = $_SESSION['success_msg'];
    unset($_SESSION['success_msg']);
}
?>

<!--begin::Alert-->
<div id="alert" class="alert d-flex align-items-center p-5 <?php echo $alert_type ?>">

    <h3>
        <?php echo $alert_description ?>
    </h3>
    <h1 class="ml-auto" id="close">
        &times;
    </h1>

</div>
<!--end::Alert-->

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const alert_box = document.getElementById('alert');
        const close = document.getElementById('close');
        setTimeout(() => {
            alert_box.classList.add('show');
        }, 150);
        close.addEventListener('click', () => {
            alert_box.classList.remove('show');
        });
        setTimeout(() => {
            alert_box.classList.contains('show') && alert_box.classList.remove('show');
        }, 2500);
    });
</script>