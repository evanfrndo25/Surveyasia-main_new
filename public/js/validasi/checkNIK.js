//checkNIK apakah polanya benar atau tidak
document.getElementById("nik").onchange = () => {
    let btnSubmit = document.getElementById("btn-submit");
    let nik = document.getElementById("nik").value;
    let messageNIK = document.getElementById("messageNIK");
    const pattern =
        /^(1[1-9]|21|[37][1-6]|5[1-3]|6[1-5]|[89][12])\d{2}\d{2}([04][1-9]|[1256][0-9]|[37][01])(0[1-9]|1[0-2])\d{2}\d{4}$/;

    if (!pattern.test(nik)) {
        messageNIK.innerHTML = "Pola NIK yang anda masukan salah!";
        messageNIK.removeAttribute("hidden");
        btnSubmit.setAttribute("disabled", "true");
    } else {
        btnSubmit.removeAttribute("disabled");
        messageNIK.setAttribute("hidden", "true");
    }
};
