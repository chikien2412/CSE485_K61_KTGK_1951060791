<?php
    include './header.php';
    include './config.php';
?>

<main class="container">
    <h2>Thêm thông tin bài thi</h2>
    <form action="add.php" method="post">
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Mã bài thi:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="eID" name="eID">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Tên bài thi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="eName" name="eName">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Ngày thi</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="eDate" name="eDate">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Thời gian làm bài</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="eTime" name="eTime">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Số câu hỏi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="eQues" name="eQues">
            </div>
        </div>

       
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Điểm mỗi câu trả lời đúng </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ePoint" name="ePoint">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Ngày tạo bài thi</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="eDate1" name="eDate1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Trạng thái</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="eStatus" name="eStatus">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Mã truy cập</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="eCode" name="eCode">
                        </div>
                    </div>
                   

                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="saveBtn" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" name="Save" class="btn btn-success">Lưu lại</button>
            </div>
        </div>
    </form>
</main>
<?php
if (isset($_POST['Save'])) {
    $id = $_POST['eID'];
    $name = $_POST['eName'];
    $date = $_POST['eDate'];
    $time = $_POST['eTime'];
    $ques =  $_POST['eQues'];                                     // strtoupper($_POST['Bgroup']);
    $point = $_POST['ePoint'];
    $date1 =$_POST['eDate1'];
    $status =$_POST['eStatus'];
    $code =$_POST['eCode'];
    //? câu lệnh
    $sql = "INSERT INTO `exams`(`id`,`exam_title`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`,`created_on`,`status`,`exam_code`)
    VALUES ('$id','$name','$date','$time','$ques','$point','$date1','$status','$code')";
   

    //? kiểm tra và thực thi lệnh
    $result = mysqli_query($conn, $sql);
    if ($result > 0) {
        header('location:./full_index.php');
    } else {
        header('location:Error.php');
    }
} ?>

<?php
    include './footer.php';
?>