
<?php 
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include 'config.php';
 
// // berfungsi menangkap data yang dikirim
// $user = $_POST['username'];
// $pass = md5($_POST['password']);

$users = $users->find([]);
// $query = $users->find(['username' = $username and 'passowrd' == $password ]);
// $users = $users->find(['username' => $username, 'password' => $password]);


$username = $_POST['username'];
$password = $_POST['password'];

// $cursor = $users->find(array("username" => $username, "password" => $password));
// $nResults = $users->count();


// if (isset($_SESSION['role'])) {
//     header("Location: ../index.php");
// }
if (isset($_POST['submit'])){}
// if($nResults == true){
    foreach($users as $data) {

        if($data['role'] == 'admin'){
            if($data['username'] == $username && $data['password'] == $password){
                $_SESSION['username'] = $data['username'];
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['role'] = $data['role'];
                header("Location:../admin/home.php");
            }
        }elseif($data['role'] == 'qc'){
            if($data['username'] == $username && $data['password'] == $password){
                $_SESSION['username'] = $data['username'];
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['role'] = $data['role'];
                header("Location:../users/home.php");
            }    
        }else{
            header("Location:../index.php?alert=gagal");
        }
        
            // // echo $data['username'];
            // if($data['username'] == $username && $data['password'] == $password){
            //     $_SESSION ['username'] = $data['username'];
            //     $_SESSION ['nama'] = $data['nama'];
            //     $_SESSION ['role'] = $data['role'];
            //     header ("Location:../halaman/home.php");
            //     //     if($data['username'] == $username && $data['password'] == $password){
            //     //         header("Location:../halaman/home.php");
            //     //     }else{
            //     //     header("Location:../index.php?alert=gagal");
            //     // }
            // }else{
            //     header("Location:../index.php?alert=gagal");
            // }
            // // if($data['role'] == 'qc'){
            // //     if($data['username'] == $username && $data['password'] == $password){
            // //         header("Location:../users/home.php");
            // //     }else{
            // //         header("Location:../index.php?alert=gagal");
            // //     }
            // }
    }

// }
// // berfungsi menyeleksi data user dengan username dan password yang sesuai
// $sql = mysqli_query($con,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
// //berfungsi menghitung jumlah data yang ditemukan
// $cek = mysqli_num_rows($sql);

// berfungsi mengecek apakah username dan password ada pada database
// if($cek > 0){
// 	$data = mysqli_fetch_assoc($sql);

// 	// berfungsi mengecek jika user login sebagai admin
// 	if($data['level']=="admin"){
// 		// berfungsi membuat session
// 		$_SESSION['nama'] =  $data['nama_lengkap'];
// 		$_SESSION['level'] = "admin";
// 		//berfungsi mengalihkan ke halaman admin
// 		header("location:admin/index.php");
// 	// berfungsi mengecek jika user login sebagai moderator
// 	}else if($data['level']=="moderator"){
// 		// berfungsi membuat session
// 		$_SESSION['nama'] = $data['nama_lengkap'];
// 		$_SESSION['level'] = "moderator";
// 		// berfungsi mengalihkan ke halaman moderator
// 		header("location:moderator/index.php");

// 	}else{
// 		// berfungsi mengalihkan alihkan ke halaman login kembali
// 		header("location:index.php?alert=gagal");
// 	}	
// }else{
// 	header("location:index.php?alert=gagal");
// }
?>