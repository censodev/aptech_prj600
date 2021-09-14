<!-- <?php echo 'login' ?> -->

<link rel="stylesheet" href="assets/css/login.css" />
<section>
  <div class="container">
    <div class="form-layout text-center">
      <form>
        <img
          src="/assets/img/9d8ed5_651b6cb038ff4917bcdbe0c58ca2c241_mv2.png"
          alt=""
          srcset=""
        />
        <h3>Hệ thống quản lý tiêm chủng</h3>
        <span
          >Đăng kí ngay hôm nay để có cơ hội trở thành người đầu tiên được
          tiêm vaccine Covid-19</span
        >
        <div class="phoneNumber-input">
          <label>Số điện thoại:</label>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"
              ><i class="fa fa-phone" aria-hidden="true"></i
            ></span>
            <input
              type="text"
              class="form-control"
              placeholder="Số điện thoại"
              aria-label="phoneNumber"
              name="phoneNumber"
              id="phoneNumber"
              required
            />
          </div>
        </div>
        <div class="otpVerify-input" id="otpVerifyInput">
          <label>Nhập mã OTP được gửi đến số điện thoại: <span id="phoneNumberOtp"></span></label>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"
              ><i class="fa fa-commenting-o" aria-hidden="true"></i></i
            ></span>
            <input
              type="text"
              class="form-control"
              placeholder="Mã OTP được gửi đến"
              aria-label="otpCode"
              name="otpCode"
              id="otpCode"
              required
            />
          </div>
          <span class="time-expired" id="timeExpired"></span>
          <span class="try-again" id="tryAgain" onclick={sendOtp()}> hoặc chọn vào đây để gửi lại mã OTP</span>
        </div>
        <button 
        type="button" 
        class="btn btn-primary" 
        class="loginBtn" 
        id="submitBtn" 
        name="checkPhoneNumber" 
        onClick={handleOnSubmit()}>
          Tiếp tục
        </button>
      </form>
    </div>
  </div>
</section>
<script src="assets/js/login.js"></script>
