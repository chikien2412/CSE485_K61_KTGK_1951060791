<?php
    include './header.php';
    include './config.php';
    $id = $_GET['id'];
?>

<main class="container">
    <h2>Sửa thông tin bài thi</h2>
    <form  method="post">
    <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
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
   
    $name = $_POST['eName'];
    $date = $_POST['eDate'];
    $time = $_POST['eTime'];
    $ques =  $_POST['eQues'];                                     // strtoupper($_POST['Bgroup']);
    $point = $_POST['ePoint'];
    $date1 =$_POST['eDate1'];
    $status =$_POST['eStatus'];
    $code =$_POST['eCode'];
    //? set câu lệnh
    // $sql = "UPDATE exams SET exam_title='$name', exam_datetime='$date', duration='$time', total_question='$ques',mark_per_right_answer='$point', created_on='$date1',d_status='$status',exam_code='$code' WHERE id = '$id'";
    $sql = "UPDATE `exams` SET `exam_title`='$name',`exam_datetime`='$date',`duration`='$time',`total_question`='$ques',`marks_per_right_answer`='$point',`created_on`='$date1',`status`='$status',`exam_code`='$code' WHERE id='$id' ";
    //? kiểm tra và thực thi câu lệnh
    if (mysqli_query($conn, $sql)) {
        header('location:./full_index.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

//? đóng kết nối
mysqli_close($conn);

include './footer.php';
