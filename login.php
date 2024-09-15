<?php include("header.php") ?>
<style>
/* code by helpmecoder */

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #000;
}
.wrapper:hover {
  position: relative;
  width: 350px;
  height: 450px;
  background: #000;
  box-shadow: 0 0 25px #ff1a1a;
  border-radius: 20px;
  padding: 40px;
  overflow: hidden;
  transition: 1s ease-in-out;
}

.form-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  transition: 1s ease-in-out;
}
.wrapper.active .form-wrapper.sign-in {
  transform: translateY(-450px);
}
.wrapper .form-wrapper.sign-up {
  overflow: hidden;
  position: absolute;
  top: 450px;
  left: 0;
}

h2 {
  font-size: 30px;
  color: #fff;
  text-align: center;
}
.input-group {
  position: relative;
  margin: 50px 0;
  border-bottom: 2px solid #fff;
}
.input-group label {
  position: absolute;
  top: 0%;
  left: 5px;
  padding-bottom: 25px;
  transform: translateY(-50%);
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}
.input-group input {
  width: 320px;
  height: 40px;
  font-size: 16px;
  color: #fff;
  padding: 0 5px;
  background: transparent;
  border: none;
  outline: none;
}
.input-group input:focus~label,
.input-group input:valid~label {
  top: -5px;
}

button {
  position: relative;
  width: 100%;
  height: 40px;
  background: #ff1a1a;
  box-shadow: 0 0 10px #ff7d7d;
  font-size: 16px;
  color: #000;
  font-weight: 500;
  cursor: pointer;
  border-radius: 30px;
  border: none;
  outline: none;
}
button.r {
  position: relative;
  width: 100%;
  height: 40px;
  background: #7dff5d;
  box-shadow: 0 0 10px #baffa9;
  font-size: 16px;
  color: #000;
  font-weight: 500;
  cursor: pointer;
  border-radius: 30px;
  border: none;
  outline: none;
}

</style>

<div class="wrapper ">
  <div class="form-wrapper sign-in">
    <form action="loginn.php" method="POST">
      <h2>Login</h2>
      <div class="input-group">
      <input type="text" id="username"name="username"/>
      <label class="form-label" for="username">Your username</label>
      </div>
      <div class="input-group">
      <input type="password" id="password"  name="password"/>
      <label class="form-label" for="password">Your Password</label>
      </div>
      
      <button  name="login">Login</button> <br> <br>
      <button  name="register" formaction="register.php" class="r" >Register</button>
      
    </form>
  </div>
  
</div>


<script>
const signInBtnLink = document.querySelector('.signInBtn-link');

const wrapper = document.querySelector('.wrapper');
signUpBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});
signInBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});
</script>


