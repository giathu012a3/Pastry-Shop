<div style="height: 70px;"></div>
<div>
    <h2>Quản lý bình luận</h2>
    <table class="table table-dark">
        <thead class="text-light">
            <tr>
                <th>Mã bình luận</th>
                <th>Tên người dùng</th>
                <th>Tên sản phẩm được bình luận</th>
                <th>Nội dung</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $hh = new binhluan();
            $result = $hh->getBinhLuan();
            while ($set = $result->fetch()):
                ?>
                <tr>
                    <td scope="row">  <?php echo $set['mabinhluan']; ?></td>
                    <td>   <?php echo $set['TENKH']; ?></td>
                    <td>  <?php echo $set['TENBANH']; ?></td>
                    <td>  <?php echo $set['noidung']; ?></td>
                </tr>
            <?php
            endwhile;
            ?>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>