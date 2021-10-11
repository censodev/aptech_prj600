<form method="post" class="d-flex flex-column gap-2">
    <div class="flex-grow-1">
        <label class="label">Tên vaccine</label>
        <input class="form-control" name="name">
    </div>
    <div class="d-flex gap-2">
        <div class="flex-grow-1">
            <label class="label">Số lô</label>
            <input class="form-control" name="lot">
        </div>
        <div>
            <label class="label">Số liều</label>
            <input class="form-control" name="doses" type="number">
        </div>
        <div class="flex-grow-1">
            <label class="label">Ngày hết hạn</label>
            <input class="form-control" name="expire_date" type="date">
        </div>
    </div>
    <div class="d-flex gap-2">
        <div class="flex-grow-1">
            <label class="label">Nhà sản xuất</label>
            <input class="form-control" name="producer">
        </div>
        <div class="flex-grow-1">
            <label class="label">Nhà cung cấp</label>
            <input class="form-control" name="supplier">
        </div>
    </div>
    <div class="d-flex justify-content-center pt-2">
        <button class="btn btn-primary">Tạo mới</button>
    </div>
</form>