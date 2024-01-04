<!DOCTYPE html>
<html>
<head>
    <title>Google Drive Direct Download</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

      *{
          margin: 0px;
          padding: 0px;
      }

      body{
          font-family: 'Exo', sans-serif;
      }


      .context {
          width: 100%;
          position: absolute;
          top:5vh;

      }

      .context h1{
          text-align: center;
          color: #fff;
          font-size: 50px;
      }


      .area{
          background: #4e54c8;  
          background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
          width: 100%;
          height:100vh;


      }

      .circles{
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          overflow: hidden;
      }

      .circles li{
          position: absolute;
          display: block;
          list-style: none;
          width: 20px;
          height: 20px;
          background: rgba(255, 255, 255, 0.2);
          animation: animate 25s linear infinite;
          bottom: -150px;

      }

      .circles li:nth-child(1){
          left: 25%;
          width: 80px;
          height: 80px;
          animation-delay: 0s;
      }


      .circles li:nth-child(2){
          left: 10%;
          width: 20px;
          height: 20px;
          animation-delay: 2s;
          animation-duration: 12s;
      }

      .circles li:nth-child(3){
          left: 70%;
          width: 20px;
          height: 20px;
          animation-delay: 4s;
      }

      .circles li:nth-child(4){
          left: 40%;
          width: 60px;
          height: 60px;
          animation-delay: 0s;
          animation-duration: 18s;
      }

      .circles li:nth-child(5){
          left: 65%;
          width: 20px;
          height: 20px;
          animation-delay: 0s;
      }

      .circles li:nth-child(6){
          left: 75%;
          width: 110px;
          height: 110px;
          animation-delay: 3s;
      }

      .circles li:nth-child(7){
          left: 35%;
          width: 150px;
          height: 150px;
          animation-delay: 7s;
      }

      .circles li:nth-child(8){
          left: 50%;
          width: 25px;
          height: 25px;
          animation-delay: 15s;
          animation-duration: 45s;
      }

      .circles li:nth-child(9){
          left: 20%;
          width: 15px;
          height: 15px;
          animation-delay: 2s;
          animation-duration: 35s;
      }

      .circles li:nth-child(10){
          left: 85%;
          width: 150px;
          height: 150px;
          animation-delay: 0s;
          animation-duration: 11s;
      }



      @keyframes animate {

          0%{
              transform: translateY(0) rotate(0deg);
              opacity: 1;
              border-radius: 0;
          }

          100%{
              transform: translateY(-1000px) rotate(720deg);
              opacity: 0;
              border-radius: 50%;
          }

      }
              .container {
                  background-color: #697f98;
                  border-radius: 20px;
                  padding: 20px;
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                  max-width: 80%;
              }

              form {
                  display: flex;
                  flex-direction: column;
                  align-items: center;
              }

              label {
                  font-weight: 600;
                  color: black;
              }

              input[type="text"] {
                  width: 100%;
                  max-width: 300px;
                  padding: 10px;
                  border: 1px solid #ccc;
                  border-radius: 10px;
                  color: black;
                  background-color: white;
              }

              input[type="text"]:focus {
                  border-color: #007bff;
              }

              input[type="submit"] {
                  background-color: #007bff;
                  color: white;
                  border: none;
                  border-radius: 10px;
                  padding: 10px 20px;
                  cursor: pointer;
              }

              input[type="submit"]:hover {
                  background-color: #0056b3;
              }

              .footer {
                  color: white;
                  margin-top: 20px;
                  text-align: center;
              }
    </style>
</head>
<body>
     <div class="context">
          <h1>Google Drive Direct Download</h1>
          <form method="post" action="process.php">
              <label for="drive_url">Enter Google Drive Sharing URL:</label>
              <input type="text" name="drive_url" id="drive_url" required>
              <input type="submit" name="generate" value="Download">
          </form>
          <div class="footer">
          Created by Hridoy 🙋‍♂️
      </div>
      </div>



  <div class="area" >
              <ul class="circles">
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
              </ul>
      </div >
</body>
</html>
