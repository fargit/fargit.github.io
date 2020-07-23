<!DOCTYPE html >
<html style="height: 100%;">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    /* Add some padding on document's body to prevent the content
    to go underneath the header and footer */
    body{        
        padding-top: 60px;
        padding-bottom: 40px;
    }
    .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;        
        background: #333;
        padding: 10px 0;
        color: #fff;
    }
    .fixed-header{
        top: 0;
    }
    .fixed-footer{
        bottom: 0;
    }
    .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 1px 19px;
        display: inline-block;
    }
</style>
</head>
<body>
    <div class="fixed-header">
        <div class="container">

            <nav>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Products</a>
                <a href="#">Services</a>
                <a href="#">Contact Us</a>
                <img src="./images/WWF-VHS-768x198.jpg"  top= "10px"  left= "5px" z-index="1" with="80" height="40">
                <img src="./images/RBS_Logo_RGB-768x315.jpg"  top= "10px"  left= "1px" z-index="2" with="80" height="40">
                <img src="./images/logo_KTS-768x270.jpg"  top= "10px"  left= "0px" z-index="3" with="80" height="40">


            </nav>
            <!-- <img src="./images/WWF-VHS-768x198.jpg"  top= "25px"  left= "25px" z-index="1" with="100" height="70"> -->

        </div>
    </div>
      <div class="container">
          <form action="/action_page.php">
            <label for="groups">Particpant group: </label>
            <select name="group" id="group">
              <option value="climate fit participant">climate fit participant</option>
              <option value="a specific organisation">specific organisationb</option>
              <option value="a community">a community</option>
              <option value="Other">Other</option>
            </select>
            <br><br>
            <label for="groups">Sector: </label>
            <select name="group" id="group">
              <option value="energy">energy</option>
              <option value="mobility">mobility</option>
              <option value="diet">diet</option>
            </select>
            <br><br>
            <input type="submit" value="Submit">
          </form>
      </div>    
    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2020 REKLIM</div>
                
    </div>

    
    <!-- <p>Click the "Submit" button and the form-data will be sent to a page on the 
    server called "action_page.php".</p>
     -->
    </body>
</body>
</html>

