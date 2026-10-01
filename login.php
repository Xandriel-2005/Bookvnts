<?php
include('include/header.php');
?>
<div class="container mt-5 pt-5 pb-5 d-flex justify-content-center">
    <div class="login-hub-card" style="width: 100%; max-width: 450px;">
        <div class="text-center mb-4">
            <div class="icon-circle mx-auto mb-3" style="width: 56px; height: 56px; background: #E0F2FE; color: var(--primary); font-size: 20px;"><i class="fa-solid fa-arrow-right-to-bracket"></i></div>
            <h2 class="section-title" style="font-size: 24px;">Welcome Back</h2>
            <p class="text-muted small">Log in to book tickets and manage your events.</p>
        </div>
        
        <form method="post" action="login.php">
            <div class="mb-3">
                <label class="form-label text-muted small fw-bold" style="font-size: 11px;">User ID</label>
                <input type="text" name="usr_id" class="form-control bg-light border-0" placeholder="Enter Your User-Id" style="padding: 12px 16px;">
            </div>
            <div class="mb-4">
                <div class="d-flex justify-content-between">
                    <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Password</label>
                </div>
                <input type="password" name="password" class="form-control bg-light border-0" placeholder="••••••••••••" style="padding: 12px 16px;">
            </div>
            <button type="submit" name="submit" class="btn btn-dark-custom w-100 py-3 mb-3">Login</button>
            <div class="text-center">
                <span class="text-muted small">Don't have an account? <a href="signup.php" class="text-primary-custom fw-bold text-decoration-none">Sign Up</a></span>
            </div>
        </form>
    </div>
</div>
<?php
include('include/footer.php');
if($_SERVER['REQUEST_METHOD']==='POST'&&isset($_POST['submit'])){
    $usr_id = trim($_POST['usr_id']);
    $password = trim($_POST['password']);

    if(empty($usr_id)||empty($password)){
        echo '<script>alert("Please fill in both fields.");</script>';
    } else {
        $query="SELECT * FROM signup_frm_data WHERE usr_name='$usr_id'";
        $result=mysqli_query($conn, $query);

        if(mysqli_num_rows($result)===0){
            echo '<script>alert("User not found. Please sign up.");</script>';
        }else{
            $user=mysqli_fetch_assoc($result);

            if(md5($password)===$user['password']){
                $_SESSION['usr_id']=$user['S.No.'];
                $_SESSION['usr_name']=$user['usr_name'];
                $date = date('Y-m-d');
                $session_start = date('H:i:s');
                $user_ip = Userip();
                $browser_agent = BrowserAgent();
                $log_sql="INSERT INTO login_details(usr_id, usr_name, date, session_start, user_ip, browser_agent) VALUES('{$user['S.No.']}', '{$user['usr_name']}', '$date', '$session_start', '$user_ip', '$browser_agent')";
                if(mysqli_query($conn, $log_sql)){
                    $_SESSION['session_no'] = mysqli_insert_id($conn);
                }
                echo '<script>alert("You are logged in!!"); window.location.href="events.php";</script>';
            } else {
                echo '<script>alert("Incorrect password.");</script>';
            }
        }
    }
}
?>