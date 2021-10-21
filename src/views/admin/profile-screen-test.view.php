<script>
    Swal.fire({
        title: '<?php echo $msg ?>',
        text: 'Kết quả khám sàng lọc của <?php echo $profile['full_name'] ?>',
        icon: "<?php echo $status == ProfileStatus::SCREENED ? 'success' : 'error' ?>",
    }).then(() => {
        window.location = '<?php echo Helper::url('admin/home?status=' . ProfileStatus::CHECKED_IN) ?>';
    });
</script>
