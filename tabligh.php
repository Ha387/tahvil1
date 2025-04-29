<?php
include("header.php");
?>
<h1  id="a2">
    تبلیغات 
</h1>
<h1>شما برای تبلیغات به اینجا امده اید:<h1>
<p>در صورتی که با فرم زیر موافق بودید روی دکمه تایید کلیک کنید و در اسرع وقت همکارات ما با شما تماس خواهند گرفت</p>
<H2>
    فرم تایید:
</H2>
<p>
    تیم ما تبلیغات را برای شما در بهترین حالت ممکن با کمترین هزینه انجام میدهد
</p>
<p>
    این تبلیغات برای شما به صورت بسته های مختلف ارائه میشود.
</p>
<h3>
    این بسته ها به صورت زیر خواهد بود:
</h3>
<h4>
    بسته طلایی:
</h4>
<p>
    این بسته برای مدت زمان یکسال با بازدهی بسیار بالا و قیمت 5 ملیون تومان برای شما قابل خریداری است.
</p>
<h5>
    بسته نقره ای:
</h5>
<p>
    این بسته برای شما به صورت 6 ماهه با قیمت سه ملیون تومان قابل خریداری است.
</p>
<h6>
    بسته برنزی:
</h6>
<p>
    این بسته به صورت سه ماهه با قیمت 1 ملیون تومان قابل خریداری است.
</p>
<p>
    لازم به ذکر است در صورت سپردن ماموریت تبلیغ خود به ما شما نمیتوانید به سایت های رقیب ما تبلیغی اراعه کنید
</p>
<!-- From Uiverse.io by m-muzammal --> 
<div class="col-md-6 reject-checkbox">
  <div class="mb-2 text-center">
    <div class="checkbox-wrapper">
      <h1 id="h3">فرم بالا را خوانده و قوانین را تایید میکنم
    <input
      
        name="ehs_approval"
        class="form-check-label custom-radio-label"
        id="Rejected"
        type="checkbox"
        
      />
      <label for="Rejected">
        <div class="tick_mark">
          <div class="cross"></div>
        </div>
      </label>
    </div>
  </div>
</div>
</h1>
<h2 id="h3">
    در صورت مطالعه فرم بالا و تایید ان فرم زیر را کامل کنید:
</h2>

<form action="">
    <input type="text" placeholder="نام و نام خانوادگی">
    <input type="number" placeholder="شماره تلفن همراه">
    <input type="email" placeholder="ایمیل شما">
    <input type="submit" value="تایید">
</form>
<?php
include("footer.php");
?>
<style>
    span{
        font-size: 25px;
        text-align: right;
    }
    form
{

    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 80px;
     height: 50%;
}

input{
    background-color: #eee;
    border:none;
    margin: 8px 0;
    padding: 10px 15px;
    font-size: 13px;
    border-radius: 8px;
    outline: none;
    width: 50%;
    height: 50px;
}
textarea{
    background-color: #eee;
    border:none;
    margin: 8px 0;
    padding: 10px 15px;
    font-size: 13px;
    border-radius: 8px;
     
    outline: none; 
}
    #a2{
        color: white;
        text-align: center;
        font-family: B nazanin;
        font-size: 25px;
    }
    p{
        background-color: #fff;
        color: black;
        border-radius: 8px;
        padding: 15px;
        font-size: 15px;
        font-family: B nazanin;
    }
    #h3{
      background-color: #fff;
        color: black;
        border-radius: 8px;
        padding: 15px;
        font-size: 25px;
        font-family: B nazanin;
    }

    /* From Uiverse.io by m-muzammal */ 
.reject-checkbox .checkbox-wrapper * {
  -webkit-tap-highlight-color: transparent;
  outline: none;
}
.reject-checkbox .checkbox-wrapper input[type="checkbox"] {
  display: none;
}
.reject-checkbox .checkbox-wrapper label {
  --size: 50px;
  --shadow: calc(var(--size) * 0.07) calc(var(--size) * 0.1);
  position: relative;
  display: block;
  width: var(--size);
  height: var(--size);
  margin: 0 auto;
  background-color: #4158d0;
  background-image: linear-gradient(
    43deg,
    #4158d0 0%,
    #c850c0 46%,
    #ffcc70 100%
  );
  border-radius: 50%;
  box-shadow: 0 var(--shadow) #ffbeb8;
  cursor: pointer;
  transition: 0.2s ease transform, 0.2s ease background-color,
    0.2s ease box-shadow;
  overflow: hidden;
  z-index: 1;
}
.reject-checkbox .checkbox-wrapper label:before {
  content: "";
  position: absolute;
  top: 50%;
  right: 0;
  left: 0;
  width: calc(var(--size) * 0.7);
  height: calc(var(--size) * 0.7);
  margin: 0 auto;
  background-color: #fff;
  transform: translateY(-50%);
  border-radius: 50%;
  box-shadow: inset 0 var(--shadow) #ffbeb8;
  transition: 0.2s ease width, 0.2s ease height;
}
.reject-checkbox .checkbox-wrapper label:hover:before {
  width: calc(var(--size) * 0.55);
  height: calc(var(--size) * 0.55);
  box-shadow: inset 0 var(--shadow) #ff9d96;
}
.reject-checkbox .checkbox-wrapper label:active {
  transform: scale(0.9);
}
.reject-checkbox .checkbox-wrapper .tick_mark {
  position: absolute;
  top: 9px;
  left: 2px;
  right: 0;
  width: calc(var(--size) * 0.6);
  height: calc(var(--size) * 0.6);
  margin: 0 auto;
  margin-left: calc(var(--size) * 0.14);
  transform: rotateZ(-92deg);
}
.reject-checkbox .checkbox-wrapper .tick_mark:before,
.reject-checkbox .checkbox-wrapper .tick_mark:after {
  content: "";
  position: absolute;
  background-color: #fff;
  border-radius: 2px;
  opacity: 0;
  transition: 0.2s ease transform, 0.2s ease opacity;
}
.reject-checkbox .checkbox-wrapper .tick_mark:before {
  left: 0;
  bottom: 0;
  width: calc(var(--size) * 0.1);
  height: calc(var(--size) * 0.3);
  box-shadow: -2px 0 5px rgba(0, 0, 0, 0.23);
  transform: translateY(calc(var(--size) * -0.68));
}
.reject-checkbox .checkbox-wrapper .tick_mark:after {
  left: 0;
  bottom: 0;
  width: 100%;
  height: calc(var(--size) * 0.1);
  box-shadow: 0 3px 5px rgba(0, 0, 0, 0.23);
  transform: translateX(calc(var(--size) * 0.78));
}
.reject-checkbox .checkbox-wrapper input[type="checkbox"]:checked + label {
  background-color: #4158d0;
  background-image: linear-gradient(
    43deg,
    #f7805c 0%,
    #fb4545 46%,
    #e1236a 100%
  );
  box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px,
    rgba(0, 0, 0, 0.22) 0px 15px 12px;
}
.reject-checkbox
  .checkbox-wrapper
  input[type="checkbox"]:checked
  + label:before {
  width: 0;
  height: 0;
}

.reject-checkbox
  .checkbox-wrapper
  input[type="checkbox"]:checked
  + label
  .tick_mark:before,
.reject-checkbox
  .checkbox-wrapper
  input[type="checkbox"]:checked
  + label
  .tick_mark:after {
  background-color: #fff;
  width: calc(var(--size) * 0.4);
  height: calc(var(--size) * 0.1);
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  opacity: 1;
}
.reject-checkbox
  .checkbox-wrapper
  input[type="checkbox"]:checked
  + label
  .tick_mark:before {
  transform: translate(-50%, -50%) rotate(45deg);
}
.reject-checkbox
  .checkbox-wrapper
  input[type="checkbox"]:checked
  + label
  .tick_mark:after {
  transform: translate(-50%, -50%) rotate(-45deg);
}

</style>