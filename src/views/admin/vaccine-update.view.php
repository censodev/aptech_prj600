<form method="post" class="d-flex flex-column gap-2">
    <input hidden name="id" value="<?php echo $_GET['id'] ?>">
    <div class="d-flex gap-2">
        <div class="flex-grow-1">
            <label class="label">Tên vaccine</label>
            <input class="form-control" name="name" value="<?php echo $v['name'] ?>">
        </div>
        <div>
            <label class="label">Số ngày hẹn tiêm</label>
            <input type="number" class="form-control" name="appointment_days" value="<?php echo $v['appointment_days'] ?>">
        </div>
    </div>
    <div class="d-flex gap-2">
        <div class="flex-grow-1">
            <label class="label">Số lô</label>
            <input class="form-control" name="lot" value="<?php echo $v['lot'] ?>">
        </div>
        <div>
            <label class="label">Số liều</label>
            <input class="form-control" name="doses" type="number" value="<?php echo $v['doses'] ?>"
                   min="<?php echo $v['doses'] ?>">
        </div>
        <div class="flex-grow-1">
            <label class="label">Ngày hết hạn</label>
            <input class="form-control" name="expire_date" type="date" value="<?php echo $v['expire_date'] ?>">
        </div>
    </div>
    <div class="d-flex gap-2">
        <div class="flex-grow-1">
            <label class="label">Nhà sản xuất</label>
            <input class="form-control" name="producer" value="<?php echo $v['producer'] ?>">
        </div>
        <div class="flex-grow-1">
            <label class="label">Nhà cung cấp</label>
            <input class="form-control" name="supplier" value="<?php echo $v['supplier'] ?>">
        </div>
    </div>
    <div class="d-flex justify-content-center pt-2">
        <button class="btn btn-primary">Cập nhật</button>
    </div>
</form>
