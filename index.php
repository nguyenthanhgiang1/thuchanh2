<?php
$conn= mysqli_connect('localhost','root','','music');
if(!$conn){
    echo "ket noi that bai roi";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     <div class="container  mb-5">
           <div class="row">
           <div class="col-md-6 mt-5">
           <form class="">
            <div class="form-group ">
            <label for="exampleInputEmail1"><h1>Tìm kiếm bài viết</h1></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nội dung muốn tìm">
            </div>
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
           </form>
           </div>
           </div> 
     </div>
  <div class="container">
  <div class="row">
  <div class="col">
  <h1>Danh sách các bài viết</h1>
  </div>
  </div>
  </div>
  <?php 
$sql="select * from baiviet,tacgia,theloai where baiviet.ma_tgia=tacgia.ma_tgia and baiviet.ma_tloai=theloai.ma_tloai order by baiviet.ma_bviet";
$result=mysqli_query($conn,$sql);
foreach($result as $key => $value):
    
    $tt=$value['tomtat'];
    if(strlen($tt)>50){
    $tt=mb_substr($tt,0,50);
    $tt=$tt."...";
    }
    
?> <hr>
      <div class="container mt-5">
      <div class="row">
      <div class="col-md-2">Mã bài viết</div><div class="col-md-10"><?php echo $value['ma_bviet'] ?></div>
      </div>
      <div class="row">
      <div class="col-md-2">Tiêu đề</div><div class="col-md-10"><?php echo $value['tieude'] ?></div>
      </div>
      <div class="row">
      <div class="col-md-2">Tác giả</div><div class="col-md-10"><?php echo $value['ten_tgia'] ?></div>
      </div>
      <div class="row">
      <div class="col-md-2">Ngày viết</div><div class="col-md-10"><?php echo $value['ngayviet'] ?></div>
      </div>
      <div class="row">
      <div class="col-md-2">Bài viết</div><div class="col-md-10"><?php echo $value['ten_bhat'] ?></div>
      </div>
      <div class="row">
      <div class="col-md-2">Thể loại</div><div class="col-md-10"><?php echo $value['ten_tloai'] ?></div>
      </div>
      <div class="row">
      <div class="col-md-2">Tóm tắt</div><div class="col-md-10"><?php  echo $tt ?></div>
      </div>
      </div>
      <?php endforeach;$conn -> close(); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



        