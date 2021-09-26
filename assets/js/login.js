let optExpired = 60;

const sendOtp = () => {
  optExpired = 60;
  countDownTimeExpired();
};

const countDownTimeExpired = () => {
  let timeExpired = setInterval(() => {
    if (optExpired <= 1) {
      clearInterval(timeExpired);
      document.getElementById("timeExpired").innerHTML = "Hết hạn";
    }
    document.getElementById("timeExpired").innerHTML = `00:${optExpired - 1}`;
    optExpired -= 1;
  }, 1000);
};

const handleCheckPhoneNumber = () => {
  const phoneNumber = document.getElementById("phoneNumber").value;
  const vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
  if (phoneNumber !== "") {
    if (vnf_regex.test(phoneNumber) == false) {
      alert("Số điện thoại của bạn không đúng định dạng!");
    } else {
      localStorage.setItem("PhoneNumber", phoneNumber);
      document.getElementById("submitBtn").name = "checkOtp";
      document.getElementById("otpVerifyInput").style.display = "inline-block";
      document.getElementById("phoneNumberOtp").innerText = phoneNumber;
      countDownTimeExpired();
    }
  } else {
    alert("Bạn chưa điền số điện thoại!");
  }
};

const handleCheckOtp = () => {
  const otpCode = document.getElementById("otpCode").value;
  if (otpCode === "") {
    alert("Hãy điền mã OTP.");
  } else {
    console.log(otpCode);
    /**
     * * fetch OTP verify
     * * direct infor page
     */
  }
};

const handleOnSubmit = () => {
  const btnName = document.getElementById("submitBtn").name;
  switch (btnName) {
    case "checkPhoneNumber":
      handleCheckPhoneNumber();
      break;
    case "checkOtp":
      handleCheckOtp();
      break;
    default:
      break;
  }
};
