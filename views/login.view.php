<link rel="stylesheet" href="assets/css/login.css" />
<section>
  <div class="container d-flex justify-content-center py-5">
    <div class="form-layout text-center">
      <form method="post" id="frmLogin">
        <img
          src="assets/img/9d8ed5_651b6cb038ff4917bcdbe0c58ca2c241_mv2.png"
          alt=""
          srcset=""
        />
        <h3>Hệ thống quản lý tiêm chủng</h3>
        <span
          >Đăng kí ngay hôm nay để có cơ hội trở thành người đầu tiên được
          tiêm vaccine Covid-19</span
        >
        <div class="phoneNumber-input">
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
            />
          </div>
        </div>
        <button class="btn btn-primary" id="btnSendOTP">Tiếp tục</button>
        <div class="otpVerify-input d-none" id="otpVerifyInput">
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"
              ><i class="fa fa-commenting" aria-hidden="true"></i></i
            ></span>
            <input
              type="text"
              class="form-control"
              placeholder="Nhập mã OTP"
              aria-label="otpCode"
              name="otpCode"
              id="otpCode"
            />
          </div>
        </div>
        <button class="btn btn-primary d-none" id="btnVerifyOTP">Xác nhận</button>
      </form>
    </div>
  </div>
</section>
<script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-firestore-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-auth-compat.js"></script>
<script>
    const firebaseApp = firebase.initializeApp({
        apiKey: "AIzaSyC2OG2VfLq49_DkrVN0vgSYb_AFYiMtivw",
        authDomain: "utc-vms.firebaseapp.com",
        projectId: "utc-vms",
        storageBucket: "utc-vms.appspot.com",
        messagingSenderId: "972397558908",
        appId: "1:972397558908:web:f1624736b29d1d35c19df9",
        measurementId: "G-T2M4BJVGVX"
    });
    const auth = firebaseApp.auth();
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('btnSendOTP', {
        'size': 'invisible',
        'callback': (response) => {
            document.querySelector('#otpVerifyInput').classList.remove('d-none')
            document.querySelector('#btnVerifyOTP').classList.remove('d-none')
            document.querySelector('#btnSendOTP').classList.add('d-none')
        },
    });

    const sendOTP = async phone => {
        return await auth.signInWithPhoneNumber(phone, window.recaptchaVerifier)
    }

    document.querySelector('#btnSendOTP').addEventListener('click', async e => {
        const phone = document.querySelector("#phoneNumber").value
        try {
            window.confirmationResult = await sendOTP(`+84${phone.slice(1)}`)
        } catch (e) {
            console.log(e)
        }
    })

    document.querySelector('#btnVerifyOTP').addEventListener('click', async e => {
        const otp = document.querySelector("#otpCode").value;
        try {
            await window.confirmationResult.confirm(otp)
            await fetch(`api/login-otp?phone=${document.querySelector("#phoneNumber").value}`)
            location.href = "<?php echo Helper::url('') ?>"
        } catch (e) {
            console.log(e)
            alert('Đăng nhập không thành công')
        }
    })

    document.querySelector('#frmLogin').addEventListener('submit', e => e.preventDefault())
</script>
