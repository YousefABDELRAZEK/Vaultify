<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaultify</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans+Mono:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="/box-svgrepo-com(1).png">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>
<style>
    body {
    display: flex;
    flex-direction: column;
    background-color: #f5f5f3;
    margin: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
   
}
html {
    scroll-behavior:smooth;
  }
  



.navbar {
    width: 600px;
    border: 0px;
    border-radius: 12px;
    display: flex;
    justify-content: center; 
    align-items: center;
    position: fixed;
    left: 50%;
    transform: translateX(-50%);
    font-family: "Spline Sans Mono", monospace;
    font-optical-sizing: auto;
  
    font-style: normal;
    margin-top: 25px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    z-index: 1000;
    padding: 6px;
    top: 0;
    background-color: #fefefd;
}

.logo {

    font-weight: 900;
    font-style: normal;
    text-decoration: none;
    color: #1a1919;
    transition: 0.3s ease;
margin-left: 0px;
font-size: 1.3rem;

}


.a {
    flex: 1; /* Takes up remaining space between logo and login */
    display: flex;
    justify-content: center; /* Center the links */
}

.a {
    display: flex;
    gap: 5px; ;/* Space between links */
}

.a {

    font-weight: 500;
    font-style: normal;
    text-decoration: none;
    color: #1a1919;
    transition: 0.3s ease;
}


.a:hover {
    color: #606780;
}


.button-confirm {

    width: 100px;
    height: 35px;
    border-radius: 12px;
    border: 2px solid black;
    background-color: #1a1919;
    box-shadow: 4px 4px #8d93a4;
    font-size: 17px;
    font-family: "Spline Sans Mono", monospace;
    font-optical-sizing: auto;
  
    font-style: normal;
    font-weight: 600;
    color: #f5f5f3;

    cursor: pointer;
    position: relative;
  }

  .button-confirm:active {
    box-shadow: 0px 0px #1a1919;
    transform: translate(3px, 3px);
  }


.d1{
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 70px;
   
}
.d1 h1{
    font-size: 5rem;
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: 800;
    font-style: normal;
    display: inline-block;
    vertical-align: middle; 

    
}
.d1 span,.d2 span,.d3 span,.d4 span,.d5 span,.d6 span ,.d7 span{
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: 800;
    font-style: italic;
    color: #8d93a4;
}
.d1 img{
    height: auto;
    width: 70%;
    margin-bottom: 50px;
}
.btns{
    display: flex;
    flex-direction: row;
    margin: 10px;

}
.d2,.d4,.d5,.d6{
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;


}
.d2 h1{
    font-size: 4rem;
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: 800;
    font-style: normal;
    margin-top: 120px;
}
.d2 p{
    font-family: "Spline Sans Mono", monospace;
    font-size: 1.5rem;
    color: #494949;
    margin-top: -5px;

   
}
.card-container{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    gap: 20px;
    width: 80%;
    margin-top: 150px;
    margin-bottom: 0px;
    flex-wrap: wrap;
    position: relative;
    margin-top: 300px;
 

}
.card:hover{
background-color: #ffffff7e;
transition: 0.3s ease;
}

.above-card-img {

    width: 25%;
flex: 1;
    height: auto;
    top: -260px; 
    position: absolute;

    left: 75%; 

  }
  .above-card-img2 {
    width: 30%;
z-index: 2;
    height: auto;
    margin: 0 auto 20px auto;
    margin-bottom: 20px; 
    position: absolute; 
    top: -270px; 
    left: 1%; 

  }


.card{
    background-color: #fefefd;
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    flex: 1; 
    text-align: center;
    width: 450px;
    height: 500px;
    display: flex;
    flex-direction: column;
}
.card h3{
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: 800;
    font-style: italic;
    font-size: 2rem;
}
.card p{
    font-family: "Spline Sans Mono", monospace;
    font-size: 1rem;
    color: #494949;
  
}
.card-img{
    background-color: #f6f5f4;
    height: 300px;
  margin-bottom: -5px;
    
    border-radius: 10px;
}
.card-img img{
    width: 75%;
    height: auto;
 
}
.d3 h1,.d5 h1, .d7 h1{
    font-size: 4rem;
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: 800;
    font-style: normal;   
}
.d3 p{
    font-family: "Spline Sans Mono", monospace;
    font-size: 1.5rem;
    color: #494949;
   
}
.d3{
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    margin-top: 120px;
    margin-bottom: 250px;
    width: 70%;
}
.d3-wrapper{
    flex: 1;
    margin: 20px;
}
.d3-img{
    flex: 1; 
    display: flex;
    justify-content: center; 
}
  .d3-img img{
    max-width: 80%; 
    height: auto;

  }
  .d4{
    margin-bottom: 150px;
  }
  .d5{
    margin-bottom: 100px;
  }
  .d4 h1,.d6 h1{
    font-size: 4rem;
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: 800;
    font-style: normal;   
  }
.card-big{
    background-color: #fefefd;
    padding: 100px;
    border-radius: 8px;
    box-shadow: 0 6px 6px rgba(0, 0, 0, 0.1);
     flex:auto;
    text-align: left;
   width: 500px;
position: relative;
    height: 500px;
    display: flex;
    flex-direction: column;
    margin: 100px;

}
.image-div{
    position: relative;
    width: 150px;
margin-top: 100px;
    height: auto;
    margin-bottom: 20px; 
    top: 1;
    bottom: -100;
    left: -10%; 
}

.above-card-img3 {
    width: 280%;
z-index: 2;
    height: auto;
    margin-bottom: 20px; 
    position: absolute; 
    top: -180px;
    left: -10%; 

  }
.card-big p{
    font-family: "Spline Sans Mono", monospace;
    font-size: 1rem;
    color: #494949;
}
.card-image{
    background-color: #f6f5f4;
    height: 300px;
    flex: auto;
    margin-bottom: -50px;
    border-radius: 10px;
    display: flex;
    justify-content: center;
}


.d6 p{
    font-family: "Spline Sans Mono", monospace;
    font-size: 1rem;
    color: #494949;
    margin-top: -5px;
    margin-bottom: 50px;
}
.d6 {
    width: 70%;
    margin-bottom: 150px;
    display: flex;
    margin-top: 80px;
    flex-direction: column;

}



.svgs-and-image {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-top: 70px;
}

.svgs {
    display: flex;
justify-content: center;
flex-direction: column;

    width: 40%;
    gap: 20px;
   
}

.svg1 {
    background-color: #ffffff;
    width: 50%;
    border-radius: 20px;
    padding: 10px;
    box-shadow: 0 6px 6px rgba(0, 0, 0, 0.031);
    transition: transform 0.3s ease;
   
}
.svg1:hover{
    transform: scale(1.1);

}



.svgs h2 {
    font-size: 1.3rem;
    color: #737783;
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: 800;
    font-style: italic;
}

.image {
    width: 50%;
    align-self: flex-start;
}

.image img {
    width: 100%;
    height: auto;
}

.d7{
    width: 70%;
    text-align: center;
    align-items: center;
    display: flex;
    margin-top: 100px;
    flex-direction: column;
    justify-content: center;
}
.d7 img{
    height: auto;
    width: 30%;
    margin: 50px;
}
.footer{
    justify-content: center;
    text-align: center;
    background-color: #f5f5f3;
    font-family: "Spline Sans Mono", monospace;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    color: #1a1919;
    width: 100%;
    padding: 60px 0 20px;
    
  
  }
  h1{
    color: #1a1919;
  }






.comic-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    color: #fff;
    background-color: #1a1919;
    border: 2px solid #000;
    border-radius: 10px;
    box-shadow: 5px 5px 0px #8d93a4;
    transition: all 0.3s ease;
    cursor: pointer;
    margin: 10px;
    font-family: "Spline Sans Mono", monospace;
  }
  
  .comic-button:hover {
    background-color: #fff;
    color: #8d93a4;
    border: 2px solid #8d93a4;
    box-shadow: 5px 5px 0px #1a1919;
  }
  
  .comic-button:active {
    background-color: #87beee;
    box-shadow: none;
    transform: translateY(4px);
  }
  

  .comic-button2{
    font-family: "Spline Sans Mono", monospace;
    display: inline-block;
    padding: 10px 20px;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    color: #1a1919;
    background-color: #f5f5f3;
    border: 2px solid #000;
    border-radius: 10px;
    box-shadow: 5px 5px 0px #1a1919;
    transition: all 0.3s ease;
    cursor: pointer;
    margin: 10px;
  }
  
  .comic-button2:hover {
    background-color: #fff;
    color: #8d93a4;
    border: 2px solid #8d93a4;
    box-shadow: 5px 5px 0px #1a1919;
  }
  
  .comic-button2:active {
    background-color: #87beee;
    box-shadow: none;
    transform: translateY(4px);
  }
  







  @media (max-width: 768px) {
    .navbar {
        width: 100%;
        flex-direction: column;
        align-items: flex-start;
        padding: 10px;
        margin-top: -10px;
    }

    .logo {
        margin-bottom: 10px;
    }

    .a {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
        width: 100%;
    }

    .a a {
        display: block;
        width: 100%;
        text-align: left;
    }

    .button-confirm {
        width: auto;
        margin-top: 10px;
    }
}
@media (max-width: 768px) {
    .card {
        width: 100%; /* Cards take full width on smaller screens */
    }
    .above-card-img2 {
        width: 50%; /* Image becomes larger */
    }
}

</style>
<body>
    <!--navbar-->
    <div class="navbar">
        <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.42229 20.6181C10.1779 21.5395 11.0557 22.0001 12 22.0001V12.0001L2.63802 7.07275C2.62423 7.09491 2.6107 7.11727 2.5974 7.13986C2 8.15436 2 9.41678 2 11.9416V12.0586C2 14.5834 2 15.8459 2.5974 16.8604C3.19479 17.8749 4.27063 18.4395 6.42229 19.5686L8.42229 20.6181Z" fill="#1C274C"/>
            <path opacity="0.7" d="M17.5774 4.43152L15.5774 3.38197C13.8218 2.46066 12.944 2 11.9997 2C11.0554 2 10.1776 2.46066 8.42197 3.38197L6.42197 4.43152C4.31821 5.53552 3.24291 6.09982 2.6377 7.07264L11.9997 12L21.3617 7.07264C20.7564 6.09982 19.6811 5.53552 17.5774 4.43152Z" fill="#1C274C"/>
            <path opacity="0.5" d="M21.4026 7.13986C21.3893 7.11727 21.3758 7.09491 21.362 7.07275L12 12.0001V22.0001C12.9443 22.0001 13.8221 21.5395 15.5777 20.6181L17.5777 19.5686C19.7294 18.4395 20.8052 17.8749 21.4026 16.8604C22 15.8459 22 14.5834 22 12.0586V11.9416C22 9.41678 22 8.15436 21.4026 7.13986Z" fill="#1C274C"/>
            <path d="M6.32334 4.48382C6.35617 4.46658 6.38926 4.44922 6.42261 4.43172L7.91614 3.64795L17.0169 8.65338L21.0406 6.64152C21.1783 6.79745 21.298 6.96175 21.4029 7.13994C21.5525 7.39396 21.6646 7.66352 21.7487 7.96455L17.7503 9.96373V13.0002C17.7503 13.4144 17.4145 13.7502 17.0003 13.7502C16.5861 13.7502 16.2503 13.4144 16.2503 13.0002V10.7137L12.7503 12.4637V21.9042C12.4934 21.9682 12.2492 22.0002 12.0003 22.0002C11.7515 22.0002 11.5072 21.9682 11.2503 21.9042V12.4637L2.25195 7.96455C2.33601 7.66352 2.44813 7.39396 2.59771 7.13994C2.70264 6.96175 2.82232 6.79745 2.96001 6.64152L12.0003 11.1617L15.3865 9.46857L6.32334 4.48382Z" fill="#1C274C"/>
            </svg>
        <a href="#"" class="logo">Vaultify</a>
        <a href="#"" class="a">Home</a>
        <a href="/vault"" class="a">My Vault</a>
        <a href="https://github.com/YousefABDELRAZEK" class="a">About</a>
        <a href="/vault" class="a"><button class="button-confirm">Login →</button></a>
    </div>

<!--main section-->

    <div class="d1">
        <h1>Welcome to Vaultify !<br>Your Secure <span> Digital Vault.</span></h1> 
        <img src="/184.Workspace.jpg">
        <div class="btns">
            <a href="/vault">
        <button class="comic-button">Get started </button></a>
        <a href="https://github.com/YousefABDELRAZEK">
        <button class="comic-button2">Learn more →</button></a>
     </div>
    </div>

<!--Features1-->    
    <div class="d2" style="margin-top: 100px;">
        <h1>Explore Vaultify's <span>Powerful Features.</span></h1>
        <p>Vaultify offers a robust digital vault solution, allowing you to securely store,<br> manage, and access your sensitive documents, files, and credentials. </p>
   <div class="card-container">
    <div class="card">
        <h3>Cloud Storage Integration</h3>
        <p> Seamlessly store and access your files from anywhere with secure cloud integration.</p>
      <div class="card-img" >
        <img src="/302.Upload.jpg">
       </div>
    </div>
    <div class="card">
        <h3>User-Friendly Interface</h3>
        <p>Easy-to-use interface designed to simplify your workflow and enhance productivity.</p>
        <div class="card-img">
            <img src="/204.Plant-Seed(2).jpg">
         </div>
    </div>
    <div class="img-test" style="margin-bottom: 700px;">
        <img src="/281.Sending-removebg.png" class="above-card-img">
    </div>

    <div class="card">
        <h3 >Automatic Updates</h3>
        <p>Regular automatic updates ensure you're always using the latest and most secure version.</p>
        <div class="card-img" style="margin-top: 40px;">
            <img src="/326.Building-Blocks.jpg">
         </div>
    </div>
   </div>
    </div>

    <!--feature2-->
<div class="d3">
    <div class="d3-wrapper">
        <h1>Manage your files <br>from<span> beginning to end !</span></h1>
        <p>Vaultify simplifies file management by providing a seamless experience from start to finish.</p>
    </div>
    <div class="d3-img">
        <img src="/346.Content-Writer.jpg">
    </div>
</div>

<!--Security features-->

<div class="d4">
    <h1>Security and controls are<br> important to you.<span> Us too.</span></h1>
    <div class="card-container">
        <img src="/education_no_bg.png" class="above-card-img2">
        <div class="card">
            <h3>Data Encryption</h3>
            <p>Keep your sensitive information secured, protecting your data from unauthorized access.</p>
        <div class="card-img">
            <img src="/288.Shapes.jpg" >
        </div>
        </div>
        <div class="card">
            <h3>Secure Cloud Storage</h3>
            <p>Store your files safely in the cloud with Vaultify's robust storage solutions.</p>
        <div class="card-img">
            <img src="/377.Account-Protection(1).jpg">
        </div>
        </div>
        <div class="card">
            <h3 style="margin-top:10px;">Multi-Factor Authentication</h3>
            <p style="margin-top: -5px;">Enhance your account security by requiring multiple forms of verification before granting access.</p>
        <div class="card-img" >
            <img src="/79.Login_.jpg" >
        </div>
        </div>
    </div>
</div>

<!--feature4-->

<div class="d5" style="margin-top: 100px;">
    <h1>Focus on what‘s important.<br>
        Leave the rest to<span> Vaultify.</span></h1>
        <div class="image-div">
            <img src="/294.Looking-Down-removebg.png" class="above-card-img3">
        </div>

        <div class="card-big">
            <svg xmlns="http://www.w3.org/2000/svg" style="height: 40px; width:10% " fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
              </svg>
              <p>With Vaultify, you can concentrate on what truly matters to you, whether it's growing your business or enjoying peace of mind. Our app handles the complexities of security and data management, so you can focus on your goals and leave the technical details to us.</p>
<div class="card-image">
<img src="/309.Zip-File.jpg">
</div>    
     </div>  
</div>

<!--feature5-->

<div class="d6">
    <h1>Vaultify is Perfect for Every<span> Field.</span></h1>
    <p>No matter the sector—be it finance, healthcare, education, or technology—Vaultify offers versatile solutions tailored to meet the unique demands of your field. Secure, reliable, and adaptable, Vaultify is your trusted partner across industries.</p>
    <div class="svgs-and-image">
    <div class="svgs" style="margin-right: -450px;">
<div class="svg1">
    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 30%; height:auto;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17 15H14.5H12" stroke="#1a1919" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 10L7.2344 10.1953C8.51608 11.2634 9.15693 11.7974 9.15693 12.5C9.15693 13.2026 8.51608 13.7366 7.2344 14.8047L7 15" stroke="#1a1919" stroke-width="1.5" stroke-linecap="round"></path> <path d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C21.5093 4.43821 21.8356 5.80655 21.9449 8" stroke="#1a1919" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
<h2>Developers</h2>
</div>
<div class="svg1">
<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 30%; height:auto;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5.57489 2.07403C5.83474 2.19892 6 2.4617 6 2.75001C6 3.57985 6.31211 4.05763 6.70313 4.63948L6.73156 4.68175C7.0641 5.17579 7.5 5.8234 7.5 6.75001C7.5 7.69552 7.02282 8.52959 6.29615 9.02452C6.48733 9.1848 6.65672 9.38248 6.80225 9.61803C7.27801 10.388 7.5 11.5645 7.5 13.2549C7.5 14.967 7.27003 17.023 6.89541 18.6644C6.70914 19.4806 6.47843 20.2335 6.20272 20.7994C6.06598 21.08 5.89948 21.3541 5.69217 21.5685C5.48714 21.7804 5.17035 22.0049 4.75 22.0049C4.32965 22.0049 4.01286 21.7804 3.80783 21.5685C3.60052 21.3541 3.43402 21.08 3.29728 20.7994C3.02157 20.2335 2.79086 19.4806 2.60459 18.6644C2.22997 17.023 2 14.967 2 13.2549C2 11.5645 2.22199 10.388 2.69775 9.61803C2.84328 9.38248 3.01267 9.1848 3.20385 9.02452C2.47718 8.52959 2 7.69552 2 6.75001C2 6.38181 2.00034 5.74889 2.38341 4.93168C2.75829 4.13192 3.47066 3.21301 4.78148 2.16436C5.00661 1.98425 5.31504 1.94914 5.57489 2.07403ZM3.5 6.74875V6.75001C3.5 7.44036 4.05964 8.00001 4.75 8.00001C5.44036 8.00001 6 7.44036 6 6.75001C6 6.31097 5.81518 6.00743 5.45814 5.47615L5.44592 5.45796C5.21705 5.11747 4.94673 4.71532 4.75381 4.19756C4.21053 4.74999 3.9105 5.208 3.74159 5.56833C3.5 6.08374 3.5 6.4505 3.5 6.74875ZM3.97383 10.4065C3.72572 10.808 3.5 11.6315 3.5 13.2549C3.5 14.8565 3.71774 16.8005 4.06698 18.3306C4.24264 19.1003 4.44289 19.726 4.64574 20.1424C4.68308 20.219 4.71806 20.2834 4.75 20.3369C4.78194 20.2834 4.81692 20.219 4.85426 20.1424C5.05711 19.726 5.25736 19.1003 5.43302 18.3306C5.78226 16.8005 6 14.8565 6 13.2549C6 11.6315 5.77428 10.808 5.52617 10.4065C5.41327 10.2237 5.30119 10.1372 5.20105 10.0886C5.09322 10.0363 4.95068 10.0049 4.75 10.0049C4.54932 10.0049 4.40678 10.0363 4.29895 10.0886C4.19881 10.1372 4.08673 10.2237 3.97383 10.4065Z" fill="#1a1919"></path> <path d="M9.99994 14.917C9.46162 14.8267 8.94761 14.6647 8.46806 14.4412C8.48904 14.0349 8.49994 13.637 8.49994 13.2549C8.49994 13.0791 8.49768 12.9066 8.49298 12.7376C8.94409 13.0407 9.4531 13.2644 9.99994 13.3885V10.5C9.99994 9.67157 10.6715 9 11.4999 9H15.4999C15.4999 6.51472 13.4852 4.5 10.9999 4.5C9.97153 4.5 9.0237 4.84498 8.26586 5.42552C8.06633 4.8731 7.78116 4.44995 7.58275 4.15554L7.54248 4.09572C8.51976 3.40549 9.7125 3 10.9999 3C14.3136 3 16.9999 5.68629 16.9999 9H20.4999C21.3284 9 21.9999 9.67157 21.9999 10.5V19.5C21.9999 20.3284 21.3284 21 20.4999 21H11.4999C10.6715 21 9.99994 20.3284 9.99994 19.5V14.917ZM11.4999 14.9795V19.5H20.4999V10.5H16.8109C16.185 12.932 14.0726 14.7672 11.4999 14.9795ZM15.2439 10.5H11.4999V13.4725C13.239 13.2803 14.6794 12.097 15.2439 10.5Z" fill="#1a1919"></path> </g></svg>
<h2>Designers</h2>
</div>

</div>
<div class="svgs"  style="margin-right: -450px;">
    <div class="svg1">
        <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" style="width: 30%; height:auto;" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:none;stroke:#1a1919;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} </style> <path class="st0" d="M23,29H9c-1.1,0-2-0.9-2-2V14c0-3.9,3.1-7,7-7h4c3.9,0,7,3.1,7,7v13C25,28.1,24.1,29,23,29z"></path> <line class="st0" x1="7" y1="18" x2="25" y2="18"></line> <path class="st0" d="M18,26h-4c-1.1,0-2-0.9-2-2v-2h8v2C20,25.1,19.1,26,18,26z"></path> <line class="st0" x1="12" y1="8" x2="12" y2="19"></line> <line class="st0" x1="20" y1="8" x2="20" y2="19"></line> <path class="st0" d="M19,7h-6V5c0-1.1,0.9-2,2-2h2c1.1,0,2,0.9,2,2V7z"></path> <path class="st0" d="M26,27h-1v-8h1c1.1,0,2,0.9,2,2v4C28,26.1,27.1,27,26,27z"></path> <path class="st0" d="M6,27h1v-8H6c-1.1,0-2,0.9-2,2v4C4,26.1,4.9,27,6,27z"></path> </g></svg>
    <h2>Students</h2>
    </div>
    <div class="svg1">
        <svg viewBox="0 0 24 24" fill="none" style="width: 30%; height:auto;" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H3V8C3 6.89543 3.89543 6 5 6H9M4 12V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V12M4 12H10M20 12H21V8C21 6.89543 20.1046 6 19 6H15M20 12H14M14 12V10H10V12M14 12V14H10V12M9 6V5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V6M9 6H15" stroke="#1a1919" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    <h2>Startups</h2>
    </div>
    
    </div>
   <div class="image">
    <img src="/311.Magic-Wand.jpg" alt="Vaultify Image">
   </div>
</div>
</div>

<!--last-->

<div class="d7">
    <h1>Try <span>Vaultify</span> for free !</h1>
    <a href="/vault">
    <button class="comic-button2">Try for free →</button>
    </a>
    <img src="/375.Ballon.jpg">
</div>
<div class="footer">
    <p>&copy; 2024  <svg width="20px" height="20px" style="margin-bottom: -5px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.42229 20.6181C10.1779 21.5395 11.0557 22.0001 12 22.0001V12.0001L2.63802 7.07275C2.62423 7.09491 2.6107 7.11727 2.5974 7.13986C2 8.15436 2 9.41678 2 11.9416V12.0586C2 14.5834 2 15.8459 2.5974 16.8604C3.19479 17.8749 4.27063 18.4395 6.42229 19.5686L8.42229 20.6181Z" fill="#1C274C"/>
        <path opacity="0.7" d="M17.5774 4.43152L15.5774 3.38197C13.8218 2.46066 12.944 2 11.9997 2C11.0554 2 10.1776 2.46066 8.42197 3.38197L6.42197 4.43152C4.31821 5.53552 3.24291 6.09982 2.6377 7.07264L11.9997 12L21.3617 7.07264C20.7564 6.09982 19.6811 5.53552 17.5774 4.43152Z" fill="#1C274C"/>
        <path opacity="0.5" d="M21.4026 7.13986C21.3893 7.11727 21.3758 7.09491 21.362 7.07275L12 12.0001V22.0001C12.9443 22.0001 13.8221 21.5395 15.5777 20.6181L17.5777 19.5686C19.7294 18.4395 20.8052 17.8749 21.4026 16.8604C22 15.8459 22 14.5834 22 12.0586V11.9416C22 9.41678 22 8.15436 21.4026 7.13986Z" fill="#1C274C"/>
        <path d="M6.32334 4.48382C6.35617 4.46658 6.38926 4.44922 6.42261 4.43172L7.91614 3.64795L17.0169 8.65338L21.0406 6.64152C21.1783 6.79745 21.298 6.96175 21.4029 7.13994C21.5525 7.39396 21.6646 7.66352 21.7487 7.96455L17.7503 9.96373V13.0002C17.7503 13.4144 17.4145 13.7502 17.0003 13.7502C16.5861 13.7502 16.2503 13.4144 16.2503 13.0002V10.7137L12.7503 12.4637V21.9042C12.4934 21.9682 12.2492 22.0002 12.0003 22.0002C11.7515 22.0002 11.5072 21.9682 11.2503 21.9042V12.4637L2.25195 7.96455C2.33601 7.66352 2.44813 7.39396 2.59771 7.13994C2.70264 6.96175 2.82232 6.79745 2.96001 6.64152L12.0003 11.1617L15.3865 9.46857L6.32334 4.48382Z" fill="#1C274C"/>
        </svg>Vaultify. All rights reserved.</p>
</div>







    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuIcon = document.querySelector('.menu-icon');
            const navLinks = document.querySelector('.navbar');

            menuIcon.addEventListener('click', () => {
                navLinks.classList.toggle('show-menu');
            });
        });
    </script>
</body>
</html>
