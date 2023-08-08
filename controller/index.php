
    <?php

      require "../view/home.php";
      // require "../pdo.php";
      require "../model/product.php";
      require "../model/table.php";
      require "../model/class.php";
      require "../model/customer.php";
      require "../model/order.php";
      require "../model/ca.php";
      require "../model/comment.php";


    
    if(isset($_GET['act'])){
      $act = $_GET['act'];
      switch ($act) {
        case 'pro' :

          $list_course = product_selectAll();
          require_once "../view/table-data-product.php";
          require_once "../view/footer.php";
          break;
        case 'add_pro':
          if (isset($_POST['them']) && ($_POST['them'])){
            $fullname = $_POST['ten'];
            $gia = $_POST['gia'];
            $mota = $_POST['mota'];
            $errer = [];
            if (empty($fullname)) {
              $errer['ten'] = "Tên khóa học không được để trống!";
            }
            if (empty($gia)) {
              $errer['gia'] = "Giá khóa học không được để trống!";
            }
            if (empty($mota)) {
              $errer['mota'] = "Mô tả khóa học không được để trống!";
            }             
            if (empty($errer)) {
              add_pro($fullname, $gia, $mota);
              $thongbao = "Thêm thành công";
            }
          }
          require_once "../view/form-add-course.php";
          require_once "../view/footer.php";
          break;
        case 'del_pro':
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            del_course($_GET['id']);
          }
          $list_course = product_selectAll();
          require_once "../view/table-data-product.php";
          require_once "../view/footer.php";
          break;
        case 'edit_pro':         
          if (isset($_GET['id']) && ($_GET['id'])) {
            $edit_pro = edit_pro($_GET['id']);
          }
          require_once "../view/form-update-course.php";
          require_once "../view/footer.php";
          break;
        case 'up_pro':
          if (isset($_POST['them']) && ($_POST['them'])){
            $ma_us=$_GET['id'];
            $fullname = $_POST['ten'];
            $gia = $_POST['gia'];
            $mota = $_POST['mota'];
            $errer = [];
            if (empty($fullname)) {
              $errer['ten'] = "Tên khóa học không được để trống!";
            }
            if (empty($gia)) {
              $errer['gia'] = "Giá khóa học không được để trống!";
            }
            if (empty($mota)) {
              $errer['mota'] = "Mô tả khóa học không được để trống!";
            }             
            if (empty($errer)) {
              up_pro($ma_us,$fullname, $gia, $mota);
              $thongbao = "Thêm thành công";
            }
          }
          $list_course = product_selectAll();
          require_once "../view/table-data-product.php";
          require_once "../view/footer.php";
          break;

        case 'mem':
          $list_member = member_selectAll();
          require_once "../view/table-data-table.php";
          require_once "../view/footer.php";
          break;
        case 'add_mem':
          if (isset($_POST['them']) && ($_POST['them'])){
            $name = $_POST['ten'];
            $mail = $_POST['email'];

            $pass = $_POST['pass'];

            $loca = $_POST['loca'];

            $phone = $_POST['num'];

            if($_FILES['img-member']) {
              $anh = $_FILES['img-member'];
            }
            

            $errer = [];

            if(empty($name)){
              $errer['ten']="Họ tên không được bỏ trống!";
            }
            if(empty($mail)){
              $errer['mail']="Email không được bỏ trống!";
            }
            if(empty($pass)){
              $errer['pass']="Mật khẩu không được bỏ trống!";
            }
            if(empty($loca)){
              $errer['loca']="Địa chỉ không được bỏ trống!";
            }
            if(empty($phone)){
              $errer['num']="Số điện thoại không được bỏ trống!";
            }
            if ($anh['size'] <= 0) {
              $errer['img-member'] = "Vui lòng chọn file ảnh";
              } else {
              $duoianh = ['jpg', 'png', 'jpeg', 'gif'];
              $duoi = pathinfo($anh['name'], PATHINFO_EXTENSION);
              if (!in_array($duoi, $duoianh)) {
                  $errer['img-member'] = "File không phải là ảnh";
              } else {
                  $img = $anh['name'];
              }
            }

            if (empty($errer)) {
              move_uploaded_file($anh['tmp_name'], '../img_upload/' . $img);
              add_mem($name, $pass, $mail, $anh['name'], $loca, $phone);
              $thongbao = "Thêm thành công";
            }

          }
          require_once "../view/form-add-member.php";
          require_once "../view/footer.php";
          break;
        case 'del_mem':
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            del_mem($_GET['id']);
          }
        $data_mem = member_selectAll();
        require_once "../view/table-data-table.php";
        require_once "../view/footer.php";
        break;
        case 'edit_mem':

          if (isset($_GET['id']) && ($_GET['id'])) {
            $edit_mem = edit_member($_GET['id']);
          }
          require_once "../view/form-update-member.php";
          require_once "../view/footer.php";
          break;
        case 'up_mem':
          if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $ma_us=$_GET['id'];
            $name = $_POST['ten'];
            $mail = $_POST['email'];
            $loca = $_POST['loca'];
            $phone = $_POST['num'];

            $pass = $_POST['pass'];
            $anh = $_POST['img-member'];
            $anh_moi = $_FILES['anh'];
            $errer = [];

            if(empty($name)){
              $errer['ten']="Họ tên không được bỏ trống!";
            }
            if(empty($mail)){
              $errer['email']="Email không được bỏ trống!";
            }            
            if(empty($loca)){
              $errer['loca']="Địa chỉ không được bỏ trống!";
            }
            if(empty($phone)){
              $errer['num']="Số điện thoại không được bỏ trống!";
            }
            if(empty($pass)){
              $errer['pass']="Mật khẩu không được bỏ trống!";
            }
            if ($anh_moi['size'] > 0) {
              $duoianh = ['jpg', 'png', 'jpeg', 'gif'];
              $duoi = pathinfo($anh_moi['name'], PATHINFO_EXTENSION);
              if (!in_array($duoi, $duoianh)) {
                  $errer['img-member'] = "File không phải là ảnh";
              } else {
                  $img = $anh_moi['name'];
              }

          } else {
              $img = $anh;
          }

            if (empty($errer)) {
              move_uploaded_file($anh_moi['tmp_name'], '../img_upload/' . $img);

              up_mem($ma_us,$name,$pass, $mail, $img, $loca, $phone);
              $thongbao = "Thêm thành công";
            }
          }
          $list_member = member_selectAll();

          require_once "../view/table-data-table.php";
          require_once "../view/footer.php";
          break;
        case 'cus':
          $list_customer = customer_selectAll();
          require_once "../view/table-data-customer.php";
          require_once "../view/footer.php";
          break;
        case 'add_cus':
          if (isset($_POST['them']) && ($_POST['them'])){
            $name = $_POST['name-nv'];
            $mail = $_POST['email-nv'];
            $loca = $_POST['location-nv'];
            $phone = $_POST['phone-nv'];

            $pass = $_POST['pass-nv'];
            $date = $_POST['date-nv'];

            if($_FILES['img-nv']) {
              $anh = $_FILES['img-nv'];
            }
            

            $errer = [];

            if(empty($name)){
              $errer['name-nv']="Họ tên không được bỏ trống!";
            }
            if(empty($mail)){
              $errer['email-nv']="Email không được bỏ trống!";
            }            
            if(empty($loca)){
              $errer['location-nv']="Địa chỉ không được bỏ trống!";
            }
            if(empty($phone)){
              $errer['phone-nv']="Số điện thoại không được bỏ trống!";
            }
            if(empty($pass)){
              $errer['pass-nv']="Mật khẩu không được bỏ trống!";
            }
            if(empty($date)){
              $errer['date-nv']="Ngày sinh không được bỏ trống!";
            }

            if ($anh['size'] <= 0) {
              $errer['img'] = "Vui lòng chọn file ảnh";
              } else {
              $duoianh = ['jpg', 'png', 'jpeg', 'gif'];
              $duoi = pathinfo($anh['name'], PATHINFO_EXTENSION);
              if (!in_array($duoi, $duoianh)) {
                  $errer['img-nv'] = "File không phải là ảnh";
              } else {
                  $img = $anh['name'];
              }
            }

            if (empty($errer)) {
              move_uploaded_file($anh['tmp_name'], '../img_customer/' . $img);
              add_cus($name, $pass, $mail, $phone, $loca,$anh['name'],$date);
              $thongbao = "Thêm thành công";
            }

          }
          require_once "../view/form-add-customer.php";
          require_once "../view/footer.php";
          break;
        case 'del_cus':
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            del_cus($_GET['id']);
          }
          $list_customer = customer_selectAll();
          require_once "../view/table-data-customer.php";
          require_once "../view/footer.php";
          break;
        case 'edit_cus':

          if (isset($_GET['id']) && ($_GET['id'])) {
            $edit_cus = edit_customer($_GET['id']);
          }
          require_once "../view/form-update-customer.php";
          require_once "../view/footer.php";
          break;
        case 'up_cus':
          if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            
            $name = $_POST['name-nv'];
            $mail = $_POST['email-nv'];
            $loca = $_POST['location-nv'];
            $phone = $_POST['phone-nv'];

            $pass = $_POST['pass-nv'];
            $date = $_POST['date-nv'];
            $anh = $_POST['img-nv'];
            $anh_moi = $_FILES['anh'];
            $errer = [];

            if(empty($name)){
              $errer['name-nv']="Họ tên không được bỏ trống!";
            }
            if(empty($mail)){
              $errer['email-nv']="Email không được bỏ trống!";
            }            
            if(empty($loca)){
              $errer['location-nv']="Địa chỉ không được bỏ trống!";
            }
            if(empty($phone)){
              $errer['phone-nv']="Số điện thoại không được bỏ trống!";
            }
            if(empty($pass)){
              $errer['pass-nv']="Mật khẩu không được bỏ trống!";
            }
            if(empty($date)){
              $errer['date-nv']="Ngày sinh không được bỏ trống!";
            }
            if ($anh_moi['size'] > 0) {
              $duoianh = ['jpg', 'png', 'jpeg', 'gif'];
              $duoi = pathinfo($anh_moi['name'], PATHINFO_EXTENSION);
              if (!in_array($duoi, $duoianh)) {
                  $errer['img-nv'] = "File không phải là ảnh";
              } else {
                  $img = $anh_moi['name'];
              }

          } else {
              $img = $anh;
          }

            if (empty($errer)) {
              move_uploaded_file($anh_moi['tmp_name'], '../img_customer/' . $img);

              up_cus($_GET['id'],$name,$pass, $mail, $img, $phone, $loca, $date);
              $thongbao = "Thêm thành công";
            }
          }
          $list_customer = customer_selectAll();

          require_once "../view/table-data-customer.php";
          require_once "../view/footer.php";
          break;

        case 'class':
          if(isset($_GET['id'])){
            $id = $_GET['id'];
            $list_class = class_selectAllByID($id);
            $list_course = product_selectAll();
            foreach($list_class as $lClass) {
              $count_id[$lClass["id"]] = count_num($lClass["id"])[0]["count_lop_id"];
            }
            require_once "../view/table-data-class.php";
            require_once "../view/footer.php";
          } else
          $list_class = class_selectAll();
          $list_course = product_selectAll();
          foreach($list_class as $lClass) {
						$count_id[$lClass["id"]] = count_num($lClass["id"])[0]["count_lop_id"];
					}
          require_once "../view/table-data-class.php";
          require_once "../view/footer.php";
          break;
        case 'get_class':
          $id_class = $_GET['id'];
          $get_class = member_class($id_class);
          require_once "../view/chi-tiet-class.php";
          require_once "../view/footer.php";
          break;
          

        case 'add_class':
          $list_course = product_selectAll();
          $list_ca = ca_hoc_selectAll();
          $list_gv = gv_selectAll();
          if (isset($_POST['them']) && ($_POST['them'])){
            $name = $_POST['ten'];
            $khoaHoc = $_POST['course'];
            $caHoc = $_POST['ca'];
            $giangVien = $_POST['gv'];
            $ngayHoc = $_POST['ngay'];
            $errer = [];

            if(empty($name)){
              $errer['ten']="Tên lớp học không được bỏ trống!";
            }
            if(empty($khoaHoc)){
              $errer['course']="Vui lòng chọn khóa học!";
            }            
            if(empty($caHoc)){
              $errer['ca']="Vui lòng chọn ca học!";
            }
            if(empty($giangVien)){
              $errer['gv']="Vui lòng chọn giảng viên!";
            }
            if(empty($ngayHoc)){
              $errer['ngay']="Vui lòng chọn ngày học!";
            }
            if (empty($errer)) {
              add_class($khoaHoc,$name , $giangVien,$caHoc,$ngayHoc);
              $thongbao = "Thêm thành công";
            }

          }
          $list_class = class_selectAll();
          foreach($list_class as $lClass) {
						$count_id[$lClass["id"]] = count_num($lClass["id"])[0]["count_lop_id"];
					}
          require_once "../view/form-add-class.php";
          require_once "../view/footer.php";
          break;
          case 'del_class':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
              del_class($_GET['id']);
            }
            $list_class = class_selectAll();
            foreach($list_class as $lClass) {
              $count_id[$lClass["id"]] = count_num($lClass["id"])[0]["count_lop_id"];
            }
            require_once "../view/table-data-class.php";
            require_once "../view/footer.php";
            break;
          case 'edit_class':
              if (isset($_GET['id']) && ($_GET['id'])) {
                $edit_class = edit_class($_GET['id']);
              }
              $list_course = product_selectAll();
              $list_ca = ca_hoc_selectAll();
              $list_gv = gv_selectAll();
              $list_class = class_selectAll();
              foreach($list_class as $lClass) {
                $count_id[$lClass["id"]] = count_num($lClass["id"])[0]["count_lop_id"];
              }
              require_once "../view/form-update-class.php";
              require_once "../view/footer.php";
            break; 
          case 'up_class':
            $list_course = product_selectAll();
            $list_ca = ca_hoc_selectAll();
            $list_gv = gv_selectAll();
            if (isset($_POST['them']) && ($_POST['them'])){
              $name = $_POST['ten'];
              $caHoc = $_POST['ca'];
              $giangVien = $_POST['gv'];
              $ngayHoc = $_POST['ngay'];
              $time = $_POST['time'];
              $ma_us=$_GET['id'];
              $errer = [];
  
              if(empty($name)){
                $errer['ten']="Tên lớp học không được bỏ trống!";
              }         
              if(empty($caHoc)){
                $errer['ca']="Vui lòng chọn ca học!";
              }
              if(empty($giangVien)){
                $errer['gv']="Vui lòng chọn giảng viên!";
              }
              if(empty($ngayHoc)){
                $errer['ngay']="Vui lòng chọn ngày học!";
              }
              if (empty($errer)) {
                up_class($ma_us,$name,$caHoc,$time,$giangVien,$ngayHoc);
                $thongbao = "Thêm thành công";
              }
  
            }
            $list_class = class_selectAll();
            foreach($list_class as $lClass) {
              $count_id[$lClass["id"]] = count_num($lClass["id"])[0]["count_lop_id"];
            }
            require_once "../view/table-data-class.php";
            require_once "../view/footer.php";
            break;         
          case 'order':
              $list_order = order_selectAll();
            require_once "../view/table-data-oder.php";
            require_once "../view/footer.php";
            break;
          case 'order_y':
            $list_order = order_selectAll_y();
            require_once "../view/table-data-oder.php";
            require_once "../view/footer.php";
            break;
          case 'order_n':
            $list_order = order_selectAll_n();
            require_once "../view/table-data-oder.php";
            require_once "../view/footer.php";
            break;
          case 'del_order':            
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            del_order($_GET['id']);
          }
          $list_order = order_selectAll();
          require_once "../view/table-data-oder.php";
          require_once "../view/footer.php";
          break;
          case 'edit_order':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
              date_default_timezone_set("Asia/Ho_Chi_Minh");
              $getDate = date("Y-m-d");
              edit_order($_GET['id'],$getDate);
            }
            echo '<script>alert("Thanh toán thành công.")</script>';
            $list_order = order_selectAll();
            require_once "../view/table-data-oder.php";
            require_once "../view/footer.php";
            break;
        case 'ca':
          $list_ca = ca_hoc_selectAll();
          require_once "../view/table-data-ca-hoc.php";
          require_once "../view/footer.php";
          break;
        case 'add_ca':
          if (isset($_POST['them']) && ($_POST['them'])){
            $name = $_POST['ten'];
            $time_s = $_POST['time-start'];
            $time_e = $_POST['time-end'];
            $errer = [];            
            if(empty($name)){
              $errer['ten']="Vui lòng chọn khóa học!";
            }            
            if(empty($time_s)){
              $errer['time-start']="Vui lòng chọn thời gian bắt đầu!";
            }
            if(empty($time_e)){
              $errer['time-end']="Vui lòng chọn thời gian kết thúc!";
            }
            if (empty($errer)) {
              add_ca($name,$time_s,$time_e);
              $thongbao = "Thêm thành công";
            }

          }
          require_once "../view/form-add-ca.php";
          break;
        case 'del_ca':
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            del_ca($_GET['id']);
          }
          $list_ca = ca_hoc_selectAll();
          require_once "../view/table-data-ca-hoc.php";
          break;
        case 'edit_ca':

            if (isset($_GET['id']) && ($_GET['id'])) {
              $edit_ca = edit_ca($_GET['id']);
            }
            require_once "../view/form-update-ca.php";
            break;
        case 'up_ca':
            if (isset($_POST['them']) && ($_POST['them'])){
              $name = $_POST['ten'];
              $time_s = $_POST['time-start'];
              $time_e = $_POST['time-end'];
              $ma_us=$_GET['id'];

              $errer = [];            
            if(empty($name)){
              $errer['ten']="Vui lòng chọn khóa học!";
            }            
            if(empty($time_s)){
              $errer['time-start']="Vui lòng chọn thời gian bắt đầu!";
            }
            if(empty($time_e)){
              $errer['time-end']="Vui lòng chọn thời gian kết thúc!";
            }
            if (empty($errer)) {
              up_ca($ma_us,$name,$time_s,$time_e);
              $thongbao = "Sửa thành công";
            }
              }
              $list_ca = ca_hoc_selectAll();
              require_once "../view/table-data-ca-hoc.php";
              break;
        case 'dt':

              $dem = count_customer();
              $demCourse = count_course();
              $demClass = count_class();
              $demOrder = count_order();
              $demNotOrder = count_not_order();
              $list_order = order_selectAll();
              $tongTien = tong_tien();
              $get = getOrder();
              date_default_timezone_set("Asia/Ho_Chi_Minh");
              $getDate = date("Y-m-d");
              $getByDay = getOrderByDay($getDate);

              require_once "../view/quan-ly-bao-cao.php";
              break;
        case 'comment':
              $listComment = getComment();
              require_once "../view/table-data-comment.php";
              require_once "../view/footer.php";
              break;
        case 'del_comment':            
              if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delComment($_GET['id']);
              }
              $listComment = getComment();
              require_once "../view/table-data-comment.php";
              require_once "../view/footer.php";
              break;
        case 'edit_comment':
              if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                editComment($_GET['id']);
              }         
              $listComment = getComment();
              require_once "../view/table-data-comment.php";
              require_once "../view/footer.php";
              break;



    }
  }else {
    // require_once "../view/home.php";
      require_once "../doc/footer.php";
  }



    