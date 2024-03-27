<div style="height: 70px;"></div>

<div class="card mt-3">
    <div class="card-header info">
        QUẢN LÝ LOẠI HÀNG
    </div>
    <div class="card-body">
        <form action="index.php?action=Viewdanhmuc&act=add_category" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="namecata" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Thêm</button>
                <!-- <a href="" class="btn btn-danger">Danh sách</a> -->
            </div>
        </form>
    </div>
    <table class="table text-white text-center" style="width: 50%;margin: auto">
        <thead>
            <tr>
                <th>Mã Danh Mục</th>
                <th>Tên danh mục</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            <?php
            $hh = new Viewdanhmuc();
            $result = $hh->getLoai();
            while ($set = $result->fetch()):
                ?>
                <tr>
                    <td scope="row">
                        <?php echo $set['MALOAI']; ?>
                    </td>
                    <td>
                        <?php echo $set['TENLOAI']; ?>
                    </td>

                </tr>
            <?php
            endwhile;
            ?>
        </tbody>
    </table>
</div>