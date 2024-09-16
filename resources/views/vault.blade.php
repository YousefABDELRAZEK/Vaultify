<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Vault</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans+Mono:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link id="theme-stylesheet" rel="stylesheet" href="{{ asset('css/light.css') }}">
<style>
  /* From Uiverse.io by Galahhad */ 
.theme-switch {
  --toggle-size: 10px;
  /* the size is adjusted using font-size,
     this is not transform scale,
     so you can choose any size */
  --container-width: 5.625em;
  --container-height: 2.5em;
  --container-radius: 6.25em;
  /* radius 0 - minecraft mode :) */
  --container-light-bg: #3D7EAE;
  --container-night-bg: #1D1F2C;
  --circle-container-diameter: 3.375em;
  --sun-moon-diameter: 2.125em;
  --sun-bg: #ECCA2F;
  --moon-bg: #C4C9D1;
  --spot-color: #959DB1;
  --circle-container-offset: calc((var(--circle-container-diameter) - var(--container-height)) / 2 * -1);
  --stars-color: #fff;
  --clouds-color: #F3FDFF;
  --back-clouds-color: #AACADF;
  --transition: .5s cubic-bezier(0, -0.02, 0.4, 1.25);
  --circle-transition: .3s cubic-bezier(0, -0.02, 0.35, 1.17);

}

.theme-switch, .theme-switch *, .theme-switch *::before, .theme-switch *::after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-size: var(--toggle-size);
}

.theme-switch__container {
  width: var(--container-width);
  height: var(--container-height);
  background-color: var(--container-light-bg);
  border-radius: var(--container-radius);
  overflow: hidden;
  cursor: pointer;
  -webkit-box-shadow: 0em -0.062em 0.062em rgba(0, 0, 0, 0.25), 0em 0.062em 0.125em rgba(255, 255, 255, 0.94);
  box-shadow: 0em -0.062em 0.062em rgba(0, 0, 0, 0.25), 0em 0.062em 0.125em rgba(255, 255, 255, 0.94);
  -webkit-transition: var(--transition);
  -o-transition: var(--transition);
  transition: var(--transition);
  position: absolute; 
  top: 0; /* Align to the top */
  right: 0;
  margin: 35px; 
  margin-right: 180px;

}


.theme-switch__container::before {
  content: "";
  position: absolute;
  z-index: 1;
  inset: 0;
  -webkit-box-shadow: 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset, 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset;
  box-shadow: 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset, 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset;
  border-radius: var(--container-radius)
}

.theme-switch__checkbox {
  display: none;
}

.theme-switch__circle-container {
  width: var(--circle-container-diameter);
  height: var(--circle-container-diameter);
  background-color: rgba(255, 255, 255, 0.1);
  position: absolute;
  left: var(--circle-container-offset);
  top: var(--circle-container-offset);
  border-radius: var(--container-radius);
  -webkit-box-shadow: inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), 0 0 0 0.625em rgba(255, 255, 255, 0.1), 0 0 0 1.25em rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), 0 0 0 0.625em rgba(255, 255, 255, 0.1), 0 0 0 1.25em rgba(255, 255, 255, 0.1);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-transition: var(--circle-transition);
  -o-transition: var(--circle-transition);
  transition: var(--circle-transition);
  pointer-events: none;
}

.theme-switch__sun-moon-container {
  pointer-events: auto;
  position: relative;
  z-index: 2;
  width: var(--sun-moon-diameter);
  height: var(--sun-moon-diameter);
  margin: auto;
  border-radius: var(--container-radius);
  background-color: var(--sun-bg);
  -webkit-box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #a1872a inset;
  box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #a1872a inset;
  -webkit-filter: drop-shadow(0.062em 0.125em 0.125em rgba(0, 0, 0, 0.25)) drop-shadow(0em 0.062em 0.125em rgba(0, 0, 0, 0.25));
  filter: drop-shadow(0.062em 0.125em 0.125em rgba(0, 0, 0, 0.25)) drop-shadow(0em 0.062em 0.125em rgba(0, 0, 0, 0.25));
  overflow: hidden;
  -webkit-transition: var(--transition);
  -o-transition: var(--transition);
  transition: var(--transition);
}

.theme-switch__moon {
  -webkit-transform: translateX(100%);
  -ms-transform: translateX(100%);
  transform: translateX(100%);
  width: 100%;
  height: 100%;
  background-color: var(--moon-bg);
  border-radius: inherit;
  -webkit-box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #969696 inset;
  box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #969696 inset;
  -webkit-transition: var(--transition);
  -o-transition: var(--transition);
  transition: var(--transition);
  position: relative;
}

.theme-switch__spot {
  position: absolute;
  top: 0.75em;
  left: 0.312em;
  width: 0.75em;
  height: 0.75em;
  border-radius: var(--container-radius);
  background-color: var(--spot-color);
  -webkit-box-shadow: 0em 0.0312em 0.062em rgba(0, 0, 0, 0.25) inset;
  box-shadow: 0em 0.0312em 0.062em rgba(0, 0, 0, 0.25) inset;
}

.theme-switch__spot:nth-of-type(2) {
  width: 0.375em;
  height: 0.375em;
  top: 0.937em;
  left: 1.375em;
}

.theme-switch__spot:nth-last-of-type(3) {
  width: 0.25em;
  height: 0.25em;
  top: 0.312em;
  left: 0.812em;
}

.theme-switch__clouds {
  width: 1.25em;
  height: 1.25em;
  background-color: var(--clouds-color);
  border-radius: var(--container-radius);
  position: absolute;
  bottom: -0.625em;
  left: 0.312em;
  -webkit-box-shadow: 0.937em 0.312em var(--clouds-color), -0.312em -0.312em var(--back-clouds-color), 1.437em 0.375em var(--clouds-color), 0.5em -0.125em var(--back-clouds-color), 2.187em 0 var(--clouds-color), 1.25em -0.062em var(--back-clouds-color), 2.937em 0.312em var(--clouds-color), 2em -0.312em var(--back-clouds-color), 3.625em -0.062em var(--clouds-color), 2.625em 0em var(--back-clouds-color), 4.5em -0.312em var(--clouds-color), 3.375em -0.437em var(--back-clouds-color), 4.625em -1.75em 0 0.437em var(--clouds-color), 4em -0.625em var(--back-clouds-color), 4.125em -2.125em 0 0.437em var(--back-clouds-color);
  box-shadow: 0.937em 0.312em var(--clouds-color), -0.312em -0.312em var(--back-clouds-color), 1.437em 0.375em var(--clouds-color), 0.5em -0.125em var(--back-clouds-color), 2.187em 0 var(--clouds-color), 1.25em -0.062em var(--back-clouds-color), 2.937em 0.312em var(--clouds-color), 2em -0.312em var(--back-clouds-color), 3.625em -0.062em var(--clouds-color), 2.625em 0em var(--back-clouds-color), 4.5em -0.312em var(--clouds-color), 3.375em -0.437em var(--back-clouds-color), 4.625em -1.75em 0 0.437em var(--clouds-color), 4em -0.625em var(--back-clouds-color), 4.125em -2.125em 0 0.437em var(--back-clouds-color);
  -webkit-transition: 0.5s cubic-bezier(0, -0.02, 0.4, 1.25);
  -o-transition: 0.5s cubic-bezier(0, -0.02, 0.4, 1.25);
  transition: 0.5s cubic-bezier(0, -0.02, 0.4, 1.25);
}

.theme-switch__stars-container {
  position: absolute;
  color: var(--stars-color);
  top: -100%;
  left: 0.312em;
  width: 2.75em;
  height: auto;
  -webkit-transition: var(--transition);
  -o-transition: var(--transition);
  transition: var(--transition);
}

/* actions */

.theme-switch__checkbox:checked + .theme-switch__container {
  background-color: var(--container-night-bg);
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__circle-container {
  left: calc(100% - var(--circle-container-offset) - var(--circle-container-diameter));
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__circle-container:hover {
  left: calc(100% - var(--circle-container-offset) - var(--circle-container-diameter) - 0.187em)
}

.theme-switch__circle-container:hover {
  left: calc(var(--circle-container-offset) + 0.187em);
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__moon {
  -webkit-transform: translate(0);
  -ms-transform: translate(0);
  transform: translate(0);
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__clouds {
  bottom: -4.062em;
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__stars-container {
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

/* From Uiverse.io by devkatyall */ 
/* The design is inspired from Galahhad*/

.popup {
  --burger-line-width: 1.125em;
  --burger-line-height: 0.125em;
  --burger-offset: 0.625em;
  --burger-bg: #3e3e3e;
  --burger-color: #fff;
  --burger-line-border-radius: 0.1875em;
  --burger-diameter: 3.125em;
  --burger-btn-border-radius: calc(var(--burger-diameter) / 2);
  --burger-line-transition: 0.3s;
  --burger-transition: all 0.1s ease-in-out;
  --burger-hover-scale: 1.1;
  --burger-active-scale: 0.95;
  --burger-enable-outline-color: var(--burger-bg);
  --burger-enable-outline-width: 0.125em;
  --burger-enable-outline-offset: var(--burger-enable-outline-width);
  /* nav */
  --nav-padding-x: 0.25em;
  --nav-padding-y: 0.625em;
  --nav-border-radius: 0.375em;
  --nav-border-color: #1e1e1e;
  --nav-border-width: 0.0625em;
  --nav-shadow-color: rgba(0, 0, 0, 0.2);
  --nav-shadow-width: 0 1px 5px;
  --nav-bg: #3e3e3e;
  --nav-font-family: "Spline Sans Mono", monospace;

  --nav-default-scale: 0.8;
  --nav-active-scale: 1;
  --nav-position-left: 0;
  --nav-position-right: unset;
  /* if you want to change sides just switch one property */
  /* from properties to "unset" and the other to 0 */
  /* title */
  --nav-title-size: 0.625em;
  --nav-title-color: #777;
  --nav-title-padding-x: 1rem;
  --nav-title-padding-y: 0.25em;
  /* nav button */
  --nav-button-padding-x: 1rem;
  --nav-button-padding-y: 0.375em;
  --nav-button-border-radius: 0.375em;
  --nav-button-font-size: 17px;
  --nav-button-hover-bg: #1e1e1e;
  --nav-button-hover-text-color: #fff;
  --nav-button-distance: 0.875em;
  /* underline */
  --underline-border-width: 0.0625em;
  --underline-border-color: #ccc;
  --underline-margin-y: 0.3125em;
  font-family: "Spline Sans Mono", monospace;
    font-optical-sizing: auto;
    font-weight: 500;
}

/* popup settings 👆 */

.popup {
  display: inline-block;
  text-rendering: optimizeLegibility;
  position: absolute;
  top: 0;
  right: 0;
  margin-top: 20px;
 margin-right: 85px;

}

.popup input {
  display: none;
}

.burger {
  display: flex;
  position: relative;
  align-items: center;
  justify-content: center;
  background: var(--burger-bg);
  width: var(--burger-diameter);
  height: var(--burger-diameter);
  border-radius: var(--burger-btn-border-radius);
  border: none;
  cursor: pointer;
  overflow: hidden;
  transition: var(--burger-transition);
  outline: var(--burger-enable-outline-width) solid transparent;
  outline-offset: 0;
  font-family: "Spline Sans Mono", monospace;
    font-optical-sizing: auto;
    font-weight: 500;
}

.popup-window {
  transform: scale(var(--nav-default-scale));
  visibility: hidden;
  opacity: 0;
  position: absolute;
  padding: var(--nav-padding-y) var(--nav-padding-x);
  background: var(--nav-bg);
  font-family: var(--nav-font-family);
  color: var(--nav-text-color);
  border-radius: var(--nav-border-radius);
  box-shadow: var(--nav-shadow-width) var(--nav-shadow-color);
  border: var(--nav-border-width) solid var(--nav-border-color);
  top: calc(
    var(--burger-diameter) + var(--burger-enable-outline-width) +
      var(--burger-enable-outline-offset)
  );
  left: var(--nav-position-left);
  right: var(--nav-position-right);
  transition: var(--burger-transition);
  margin-top: 10px;
  font-family: "Spline Sans Mono", monospace;
    font-optical-sizing: auto;
    font-weight: 500;
}

.popup-window legend {
  padding: var(--nav-title-padding-y) var(--nav-title-padding-x);
  margin: 0;
  color: var(--nav-title-color);
  font-size: var(--nav-title-size);
  text-transform: uppercase;
}

.popup-window ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
  font-family: "Spline Sans Mono", monospace;
    font-optical-sizing: auto;
    font-weight: 500;
}

.popup-window ul button {
  outline: none;
  width: 100%;
  border: none;
  background: none;
  display: flex;
  align-items: center;
  color: var(--burger-color);
  font-size: var(--nav-button-font-size);
  padding: var(--nav-button-padding-y) var(--nav-button-padding-x);
  white-space: nowrap;
  border-radius: var(--nav-button-border-radius);
  cursor: pointer;
  column-gap: var(--nav-button-distance);
}

.popup-window ul li:nth-child(1) svg,
.popup-window ul li:nth-child(2) svg {
  font-family: "Spline Sans Mono", monospace;
    font-optical-sizing: auto;
    font-weight: 500;
  color: #00bf63;
}

.popup-window ul li:nth-child(4) svg,
.popup-window ul li:nth-child(5) svg {
  color: rgb(153, 153, 153);
}

.popup-window ul li:nth-child(7) svg {
  color: red;
}

.popup-window hr {
  margin: var(--underline-margin-y) 0;
  border: none;
  border-bottom: var(--underline-border-width) solid
    var(--underline-border-color);
}

/* actions */

.popup-window ul button:hover,
.popup-window ul button:focus-visible,
.popup-window ul button:hover svg,
.popup-window ul button:focus-visible svg {
  color: var(--nav-button-hover-text-color);
  background: var(--nav-button-hover-bg);
}

.burger:hover {
  transform: scale(var(--burger-hover-scale));
}

.burger:active {
  transform: scale(var(--burger-active-scale));
}

.burger:focus:not(:hover) {
  outline-color: var(--burger-enable-outline-color);
  outline-offset: var(--burger-enable-outline-offset);
}

.popup input:checked + .burger span:nth-child(1) {
  top: 50%;
  transform: translateY(-50%) rotate(45deg);
}

.popup input:checked + .burger span:nth-child(2) {
  bottom: 50%;
  transform: translateY(50%) rotate(-45deg);
}

.popup input:checked + .burger span:nth-child(3) {
  transform: translateX(
    calc(var(--burger-diameter) * -1 - var(--burger-line-width))
  );
}

.popup input:checked ~ nav {
  transform: scale(var(--nav-active-scale));
  visibility: visible;
  opacity: 1;
}



  </style>




</head>


<body>
  
    <div class="nav">


      <svg class="n1" viewBox="0 0 24 24" height="45" width="45" style="margin-bottom: -10px" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17.5777 4.43152L15.5777 3.38197C13.8221 2.46066 12.9443 2 12 2C11.0557 2 10.1779 2.46066 8.42229 3.38197L8.10057 3.5508L17.0236 8.64967L21.0403 6.64132C20.3941 5.90949 19.3515 5.36234 17.5777 4.43152Z" fill="#59767b"></path> <path d="M21.7484 7.96434L17.75 9.96353V13C17.75 13.4142 17.4142 13.75 17 13.75C16.5858 13.75 16.25 13.4142 16.25 13V10.7135L12.75 12.4635V21.904C13.4679 21.7252 14.2848 21.2965 15.5777 20.618L17.5777 19.5685C19.7294 18.4393 20.8052 17.8748 21.4026 16.8603C22 15.8458 22 14.5833 22 12.0585V11.9415C22 10.0489 22 8.86557 21.7484 7.96434Z" fill="#59767b"></path> <path d="M11.25 21.904V12.4635L2.25164 7.96434C2 8.86557 2 10.0489 2 11.9415V12.0585C2 14.5833 2 15.8458 2.5974 16.8603C3.19479 17.8748 4.27062 18.4393 6.42228 19.5685L8.42229 20.618C9.71524 21.2965 10.5321 21.7252 11.25 21.904Z" fill="#59767b"></path> <path d="M2.95969 6.64132L12 11.1615L15.4112 9.4559L6.52456 4.37785L6.42229 4.43152C4.64855 5.36234 3.6059 5.90949 2.95969 6.64132Z" fill="#59767b"></path> </g></svg>
        <a href="/"" class="logo">Vaultify</a>

      
        <label class="popup">
          <input type="checkbox" />
          <div tabindex="0" class="burger">
            <svg
              viewBox="0 0 24 24"
              fill="white"
              height="20"
              width="20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z"
              ></path>
            </svg>
          </div>
          <nav class="popup-window">
            <legend>Quick Start</legend>
            <ul>
              <li>
                <button>
                  <svg  width="20"
                  height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                  </svg>
                  
                  <span>{{ Auth::user()->name }}</span>
                </button>
              </li>
              <li>
                
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        
    <button type="submit">
      <svg  width="20"
      height="20" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
      </svg>
      
     <span> logout</span>
    
    
    </button>
        
        
        
    </form>
              </li>
            </ul>
          </nav>
        </label>
        

        <label class="theme-switch">
          <input type="checkbox" class="theme-switch__checkbox" id="theme-toggle">
          <div class="theme-switch__container">
            
            <div class="theme-switch__clouds"></div>
            <div class="theme-switch__stars-container">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144 55" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M135.831 3.00688C135.055 3.85027 134.111 4.29946 133 4.35447C134.111 4.40947 135.055 4.85867 135.831 5.71123C136.607 6.55462 136.996 7.56303 136.996 8.72727C136.996 7.95722 137.172 7.25134 137.525 6.59129C137.886 5.93124 138.372 5.39954 138.98 5.00535C139.598 4.60199 140.268 4.39114 141 4.35447C139.88 4.2903 138.936 3.85027 138.16 3.00688C137.384 2.16348 136.996 1.16425 136.996 0C136.996 1.16425 136.607 2.16348 135.831 3.00688ZM31 23.3545C32.1114 23.2995 33.0551 22.8503 33.8313 22.0069C34.6075 21.1635 34.9956 20.1642 34.9956 19C34.9956 20.1642 35.3837 21.1635 36.1599 22.0069C36.9361 22.8503 37.8798 23.2903 39 23.3545C38.2679 23.3911 37.5976 23.602 36.9802 24.0053C36.3716 24.3995 35.8864 24.9312 35.5248 25.5913C35.172 26.2513 34.9956 26.9572 34.9956 27.7273C34.9956 26.563 34.6075 25.5546 33.8313 24.7112C33.0551 23.8587 32.1114 23.4095 31 23.3545ZM0 36.3545C1.11136 36.2995 2.05513 35.8503 2.83131 35.0069C3.6075 34.1635 3.99559 33.1642 3.99559 32C3.99559 33.1642 4.38368 34.1635 5.15987 35.0069C5.93605 35.8503 6.87982 36.2903 8 36.3545C7.26792 36.3911 6.59757 36.602 5.98015 37.0053C5.37155 37.3995 4.88644 37.9312 4.52481 38.5913C4.172 39.2513 3.99559 39.9572 3.99559 40.7273C3.99559 39.563 3.6075 38.5546 2.83131 37.7112C2.05513 36.8587 1.11136 36.4095 0 36.3545ZM56.8313 24.0069C56.0551 24.8503 55.1114 25.2995 54 25.3545C55.1114 25.4095 56.0551 25.8587 56.8313 26.7112C57.6075 27.5546 57.9956 28.563 57.9956 29.7273C57.9956 28.9572 58.172 28.2513 58.5248 27.5913C58.8864 26.9312 59.3716 26.3995 59.9802 26.0053C60.5976 25.602 61.2679 25.3911 62 25.3545C60.8798 25.2903 59.9361 24.8503 59.1599 24.0069C58.3837 23.1635 57.9956 22.1642 57.9956 21C57.9956 22.1642 57.6075 23.1635 56.8313 24.0069ZM81 25.3545C82.1114 25.2995 83.0551 24.8503 83.8313 24.0069C84.6075 23.1635 84.9956 22.1642 84.9956 21C84.9956 22.1642 85.3837 23.1635 86.1599 24.0069C86.9361 24.8503 87.8798 25.2903 89 25.3545C88.2679 25.3911 87.5976 25.602 86.9802 26.0053C86.3716 26.3995 85.8864 26.9312 85.5248 27.5913C85.172 28.2513 84.9956 28.9572 84.9956 29.7273C84.9956 28.563 84.6075 27.5546 83.8313 26.7112C83.0551 25.8587 82.1114 25.4095 81 25.3545ZM136 36.3545C137.111 36.2995 138.055 35.8503 138.831 35.0069C139.607 34.1635 139.996 33.1642 139.996 32C139.996 33.1642 140.384 34.1635 141.16 35.0069C141.936 35.8503 142.88 36.2903 144 36.3545C143.268 36.3911 142.598 36.602 141.98 37.0053C141.372 37.3995 140.886 37.9312 140.525 38.5913C140.172 39.2513 139.996 39.9572 139.996 40.7273C139.996 39.563 139.607 38.5546 138.831 37.7112C138.055 36.8587 137.111 36.4095 136 36.3545ZM101.831 49.0069C101.055 49.8503 100.111 50.2995 99 50.3545C100.111 50.4095 101.055 50.8587 101.831 51.7112C102.607 52.5546 102.996 53.563 102.996 54.7273C102.996 53.9572 103.172 53.2513 103.525 52.5913C103.886 51.9312 104.372 51.3995 104.98 51.0053C105.598 50.602 106.268 50.3911 107 50.3545C105.88 50.2903 104.936 49.8503 104.16 49.0069C103.384 48.1635 102.996 47.1642 102.996 46C102.996 47.1642 102.607 48.1635 101.831 49.0069Z" fill="currentColor"></path>
              </svg>
            </div>
            <div class="theme-switch__circle-container">
              <div class="theme-switch__sun-moon-container">
                <div class="theme-switch__moon">
                  <div class="theme-switch__spot"></div>
                  <div class="theme-switch__spot"></div>
                </div>
                <div class="theme-switch__sun">
                  <div class="theme-switch__sun-rays"></div>
                </div>
              </div>
            </div>
          </div>
        </label>
    </div>
  
    
<div class="d1">
    <h1>Welcome to your <span>Vault !</span></h1>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('theme-toggle');
        const themeStylesheet = document.getElementById('theme-stylesheet');
        
        // Load the saved theme on page load
        const savedTheme = localStorage.getItem('theme') || 'light';
        if (savedTheme === 'dark') {
          themeStylesheet.setAttribute('href', '/css/dark.css');
          toggle.checked = true; // Check the toggle switch
          document.body.classList.add('dark');
        } else {
          themeStylesheet.setAttribute('href', '/css/light.css');
          toggle.checked = false; // Uncheck the toggle switch
          document.body.classList.add('light');
        }
    
        // Add event listener for the toggle switch
        toggle.addEventListener('change', function () {
          const newTheme = toggle.checked ? 'dark' : 'light';
          themeStylesheet.setAttribute('href', `/css/${newTheme}.css`);
          document.body.classList.toggle('dark', toggle.checked);
          document.body.classList.toggle('light', !toggle.checked);
          localStorage.setItem('theme', newTheme);
        });
      });
    </script>
    




  <form class="form">
      <button>
          <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
              <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
      </button>
      <form action="{{ route('files.search') }}" method="GET">
      
        <input class="input" placeholder="Search in Vault"  type="text" name="query" value="{{ request()->input('query') }}">
        <button class="reset" type="submit">
            <!-- Search Icon -->
        </button>
      
        
    </form>


  <div class="button-container">
    <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data" id="file-upload-form">
        @csrf
    
        <label for="file-upload" class="button dashboard-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#06B6D4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
            <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
            <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
            <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
          </svg>
          Upload
        </label>
        <input id="file-upload" name="file" type="file" style="display: none;" onchange="document.getElementById('file-upload-form').submit();" />
    </form>
    
   <a href="/vault">
    <button class="button notes-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#FACC14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M15.5 3H5a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V8.5L15.5 3Z"></path>
            <path d="M15 3v6h6"></path>
        </svg>
       All files
    </button>
   </a>
 
</div>
</div>

<div class="text">
    <h1>Your files:</h1>
</div>
@if($files->isEmpty())
<div class="d2">


    <div class="image-container">

      <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="520" height="520" viewBox="0 0 520 520"><defs><style>.cls-1{opacity:.4;}.cls-1,.cls-2,.cls-3,.cls-4{fill:#231f20;stroke-width:0px;}.cls-2{opacity:.15;}.cls-3{opacity:.45;}.cls-5{opacity:.55;}</style></defs><path class="cls-4" d="M118.14,399.74c-.84-.15-1.69-.29-2.54-.4-.31-.04-.62-.01-.93-.06-1.09-.18-2.19-.31-3.28-.5-.49-.07-.97-.09-1.46-.11-.62-.02-1.24-.18-1.86-.3-.19-.04-.16-.25.01-.46.08-.11.2-.22.34-.3.14-.1.31-.22.48-.27.31-.09.63-.2.94-.26.31-.04.63-.07.94-.1.63-.04,1.25-.08,1.89.04.76.13,1.55,0,2.32,0,.85,0,1.71.04,2.57.07.53.03,1.06.05,1.59.08.8.04,1.61.13,2.4.1.62-.01,1.24-.23,1.86-.28.14-.02.27-.06.41-.05.51,0,.66.21.72.94.01.17.03.33.04.5,0,.56-.23,1.01-.59,1.17-.54.22-1.1.43-1.65.47-.55.05-1.12.04-1.68.02-.84-.04-1.68-.11-2.53-.2v-.07Z"/><path class="cls-4" d="M149.38,380.9c-.61-.01-1.22-.02-1.86-.06-.23,0-.45.04-.68.03-.82-.07-1.65-.13-2.46-.2-.36-.03-.73-.05-1.08-.05-.46,0-.93,0-1.38-.21-.14-.06-.09-.32.05-.58.14-.26.37-.57.61-.61.87-.15,1.71-.34,2.62-.2.54.07,1.09-.12,1.64-.18.61-.07,1.23-.13,1.86-.14.39-.01.78-.03,1.16-.04.59-.03,1.19-.01,1.78-.08.46-.04.91-.24,1.38-.28.1-.01.21-.05.31-.04.38.09.49.28.53.79,0,.12.02.23.02.35,0,.38-.18.7-.44.9-.76.55-1.48.55-2.27.6-.59.02-1.19.04-1.78.06v-.06Z"/><path class="cls-4" d="M385.66,398.62c.7,0,1.41.02,2.1.03.26,0,.51-.06.77-.05.92.03,1.85.11,2.78.18.41.02.82-.01,1.22-.05.26-.03.52-.05.78-.04.13,0,.26.02.4.04.13,0,.27.15.41.23.17.13.15.2.03.45-.09.2-.17.39-.24.55-.1.19-.23.3-.37.36-.5.22-1,.33-1.51.41-.51.08-1.03.13-1.57.1-.64-.07-1.28.12-1.93.18-.71.07-1.44.07-2.16.07-.45,0-.9,0-1.34,0-.68.01-1.36-.02-2.05.02-.53.03-1.06.2-1.63.25-.13.01-.25.04-.38.04-.48-.03-.62-.25-.55-.9.01-.15.02-.3.05-.45.09-.5.35-.88.61-.99.8-.32,1.63-.38,2.53-.42.68-.02,1.36-.04,2.05-.06v.06Z"/><path class="cls-4" d="M353.66,381.76c.51.09,1.04.16,1.58.2.2.01.39-.03.59.01.71.13,1.41.27,2.11.38.31.07.62.11.92.14.39.03.78.09,1.16.24.12.05.1.16,0,.31-.1.15-.28.4-.49.51-.76.35-1.47.79-2.25.61-.46-.07-.92.14-1.39.21-.52.06-1.04.07-1.58.09-.33,0-.67.02-1.02.01-.52,0-1.07-.07-1.62-.07-.43,0-.89.08-1.36.02-.1,0-.2-.02-.3-.06-.34-.17-.36-.43-.17-1,.04-.13.08-.26.13-.39.16-.41.45-.75.7-.89.74-.45,1.08-.53,1.63-.48.4.02.85.03,1.35.08v.07Z"/><path class="cls-4" d="M407.45,232.13c-.12-.04-.24-.08-.36-.13.23.09-.08-.05-.15-.08-.21-.11-.4-.24-.6-.37.18.13,0,0-.07-.06-.08-.07-.17-.15-.25-.23-.07-.07-.14-.14-.2-.21-.04-.04-.07-.08-.11-.13-.17-.2.08.13,0,0-.11-.17-.23-.34-.33-.52-.05-.09-.1-.19-.15-.29-.02-.05-.05-.1-.07-.15-.09-.19.04.14,0,0-.13-.39-.27-.77-.35-1.18,0-.05-.08-.27-.05-.31,0,0,.03.29.01.07,0-.05-.01-.1-.02-.15-.02-.2-.03-.39-.03-.59,0-.18,0-.35.02-.53,0-.04.01-.09.01-.14,0-.13-.02.15-.02.13-.01-.09.03-.2.05-.29.03-.15.07-.29.11-.44.01-.04.09-.18.08-.21,0,.01-.13.27-.05.12.03-.06.06-.12.09-.18.03-.05.07-.1.1-.16.06-.11-.02.04-.04.05.04-.03.08-.08.12-.12.13-.14,0,0-.03.02.05-.02.09-.05.14-.08.09-.05.14,0-.05.02.11-.02.35-.07.1-.05.13,0,.25-.01.38,0,.04,0,.23.03.07,0-.17-.03.09.02.12.03.14.03.29.07.43.12.06.02.13.05.19.07.18.07-.23-.11.07.03.63.29,1.21.66,1.77,1.08.49.36,1.26.08,1.54-.4.34-.57.08-1.17-.4-1.54-1.12-.83-2.49-1.63-3.92-1.64s-2.44.92-2.86,2.21c-.62,1.86-.2,4.2.84,5.84.77,1.21,1.89,2.07,3.25,2.52.56.19,1.25-.21,1.38-.79.14-.62-.19-1.19-.79-1.38h0Z"/><path class="cls-4" d="M385.76,224.16c-.17-.03-.33-.07-.49-.12-.08-.03-.16-.06-.24-.08-.22-.07.18.1-.04-.02-.28-.14-.54-.29-.8-.47-.21-.14.13.12-.04-.03-.06-.06-.13-.11-.19-.17-.13-.11-.25-.23-.36-.36-.06-.06-.11-.13-.17-.19-.02-.03-.16-.22-.07-.09s-.07-.1-.09-.13c-.05-.07-.09-.14-.14-.21-.08-.13-.16-.27-.23-.41-.04-.08-.07-.15-.11-.23-.12-.26.08.22-.02-.05-.11-.31-.2-.62-.26-.94-.01-.07-.03-.14-.03-.21.02.3,0,.03,0-.04-.01-.17-.02-.34-.01-.51,0-.08,0-.17.01-.25v-.08c.02-.13.02-.11,0,.05-.03-.13.08-.37.11-.5.15-.57-.19-1.25-.79-1.38s-1.22.18-1.38.79c-.9,3.3,1.36,7.11,4.75,7.79.58.11,1.24-.16,1.38-.79.13-.56-.17-1.26-.79-1.38h0Z"/><path class="cls-4" d="M411.78,240.83c2.98-.22,5.77-1.92,7.2-4.57.34-.63.18-1.53-.49-1.88s-1.52-.18-1.88.49c-.14.26-.3.52-.47.76-.03.04-.19.25-.05.08s-.05.06-.06.07c-.1.12-.19.23-.3.34-.19.21-.4.4-.62.59-.02.02-.14.15-.17.14.05,0,.25-.18.03-.02-.12.09-.24.17-.37.26-.24.15-.49.3-.74.42-.07.03-.13.07-.2.1-.26.12.03.03.04-.01-.01.05-.36.14-.42.16-.28.1-.57.18-.87.24-.13.03-.27.05-.4.07-.17.03.31-.03.05,0-.09,0-.18.02-.27.02-.72.05-1.41.6-1.38,1.38.03.7.61,1.43,1.38,1.38h0Z"/><path class="cls-4" d="M382.78,167.21c.46-1.25.91-2.49,1.47-3.7.2-.44.36-.9.57-1.33.77-1.52,1.53-3.03,2.4-4.49.38-.65.73-1.31,1.09-1.96.45-.84.98-1.64,1.53-2.42.17-.24.18-.19.14.07-.05.26-.1.75-.26,1.28-.26.95-.6,1.85-.93,2.76-.33.9-.69,1.8-1.17,2.64-.55,1.02-.9,2.18-1.32,3.28l-1.38,3.64c-.27.75-.53,1.51-.77,2.27-.35,1.16-.7,2.33-.92,3.51-.18.92-.2,1.85-.28,2.76-.04.2-.05.4-.09.6-.15.74-.35.96-.78,1.07-.1.02-.19.06-.28.07-.28.04-.54-.31-.62-.9-.05-.43-.12-.88-.14-1.32.02-.44.06-.88.11-1.32.12-.88.28-1.77.49-2.64.3-1.31.7-2.59,1.11-3.87h.05Z"/><path class="cls-4" d="M448.36,200.61c-.33.63-.58,1.13-.9,1.78-.33.62-.69,1.26-1.16,1.87-.34.44-.71.9-1.2,1.26-.88.63-2.07.87-3.06.68-1.01-.18-1.86-.59-2.61-1.06-.67-.4-1.34-.8-2-1.19-.84-.51-1.71-.96-2.46-1.6-.23-.2-.15-.29.17-.34.32-.05.9-.1,1.41.15.9.42,1.8.83,2.71,1.25.43.2.87.4,1.31.61.43.21.81.43,1.2.54.98.38,1.91.03,2.61-.69.82-.8,1.31-1.99,1.95-3.24.4-.74.78-1.46,1.15-2.21.55-1.13,1.09-2.26,1.53-3.43.34-.9.61-1.82.89-2.73.06-.2.11-.4.18-.6.26-.74.43-.95.8-1.01.09-.01.17-.04.25-.04.27,0,.38.38.31.97-.25,1.75-.65,3.57-1.37,5.27-.5,1.28-1.08,2.53-1.68,3.77l-.04-.02Z"/><path class="cls-4" d="M464.79,146.51s3.37-4.15,1.32-5.79c-1.34-1.07,3.77,1.06,3.77,1.06l-2.09,5.85-3.01-1.12Z"/><path class="cls-4" d="M220.5,195.39c.17.95-.32,1.92-1.15,2.62-1.56,1.31-4.58.73-5.56-.93-2.73-4.58,5.79-6.96,6.71-1.69Z"/><path class="cls-4" d="M256.61,228.16c.04.96-2.51-.09-3.35.6-1.48,1.2-1.76,2.82-2.78,1.21-2.85-4.5,5.89-7.73,6.13-1.81Z"/><path class="cls-3" d="M190.17,242.99c.04.83.08,2.25-.73,2.84-1.42,1.04-4.03,0-5.16-1.28-4.3-4.9,5.65-6.69,5.89-1.57Z"/><path class="cls-4" d="M276.69,185.99c.35.37.68.75.99,1.14.12.14.25.26.36.4.38.52.75,1.03,1.06,1.59.14.24.29.47.44.7.19.3.38.6.5.93.04.1-.04.14-.18.11-.13-.03-.33-.1-.47-.24-.48-.52-1-.97-1.39-1.55-.22-.35-.57-.62-.87-.92-.33-.33-.67-.65-1.02-.95-.22-.19-.43-.38-.66-.55-.35-.26-.7-.52-1.08-.73-.3-.15-.64-.22-.97-.3-.07-.02-.15-.02-.22-.04-.26-.09-.29-.22-.16-.63l.09-.28c.11-.31.33-.51.57-.5.69.04,1.31.37,1.87.77.41.31.79.66,1.15,1.01l-.02.03Z"/><path class="cls-4" d="M247.26,196.48c.15-1.04.31-2.08.5-3.11.06-.38.07-.77.15-1.14.14-.67.32-1.33.53-1.99.23-.68.41-1.26.73-2.02.34-.67.82-1.28,1.43-1.62.38-.23.79-.41,1.21-.5.44-.04.88.07,1.27.19.25.09.21.16.02.36-.19.18-.48.65-.73,1-.26.19-.5.32-.67.51-.17.19-.32.34-.45.49-.13.18-.2.27-.31.58-.12.34-.25.67-.37,1.02-.31.83-.34,1.78-.5,2.68-.17,1-.34,2.01-.47,3.03-.08.63-.16,1.26-.22,1.89-.08.95-.18,1.92-.17,2.87.01.74.17,1.47.26,2.2.02.16.06.32.07.48.03.6-.11.79-.71.93-.14.03-.27.07-.41.09-.46.07-.84-.17-.99-.62-.45-1.33-.5-2.74-.45-4.16.03-1.05.14-2.1.23-3.16h.06Z"/><polygon class="cls-4" points="270.52 233.97 274.81 233.04 272 236.36 270.52 233.97"/><path class="cls-4" d="M282.99,229.46c-.45.34-.91.67-1.39.96-.17.11-.31.26-.49.36-.64.35-1.3.65-1.95.94-.28.14-.56.28-.83.43-.36.17-.68.46-1.15.35-.15-.03-.22-.26-.25-.58-.03-.32-.05-.79.12-.9.28-.24.55-.46.84-.66.31-.17.63-.33.98-.46.43-.15.72-.53,1.06-.82.39-.32.78-.63,1.17-.95.24-.2.48-.4.7-.62.34-.33.69-.66.96-1.06.2-.31.28-.7.41-1.05.03-.07.05-.16.09-.22.16-.25.35-.23.89.06l.36.2c.4.23.64.56.64.84,0,.21-.01.42-.05.61-.06.18-.13.36-.21.52-.17.33-.4.63-.65.91-.37.42-.79.8-1.21,1.18l-.04-.04Z"/><path class="cls-4" d="M203.3,239.35c-.75-.46-1.47-.95-2.17-1.48-.26-.18-.52-.36-.76-.57-.84-.75-1.62-1.54-2.35-2.36-.34-.36-.66-.71-1-1.07-.43-.45-.77-.99-1.06-1.53-.09-.17-.02-.19.16-.13.18.07.5.18.78.4.53.35.95.79,1.39,1.2.43.41.87.82,1.33,1.26.52.52,1.19.91,1.81,1.33.68.47,1.36.94,2.07,1.35.44.26.89.51,1.35.73.69.34,1.41.65,2.14.88.58.16,1.17.22,1.75.31.13.02.26.03.38.05.47.09.6.22.63.65,0,.1.02.19.02.29-.01.32-.26.53-.65.55-.58.04-1.16-.01-1.75-.11-.58-.12-1.14-.32-1.7-.54-.83-.33-1.62-.74-2.39-1.17l.02-.03Z"/><path class="cls-1" d="M341.82,357.36s6.07,22.78,9.42,23.31c3.36.52,1.06-5.96,1.26-8.82s-4.76-15.39-4.76-15.39l-5.93.91Z"/><path class="cls-1" d="M361.49,356.25s14.8,43.92,22.48,42.43c7.68-1.49-12.25-45.78-12.25-45.78l-10.24,3.35Z"/><path class="cls-1" d="M143.48,348.17s-12.15,44.83-23.18,47.57c-11.03,2.75,12.37-51.91,12.37-51.91l10.81,4.34Z"/><path class="cls-1" d="M164.58,352.22s-10.79,26.8-14.98,26.08c-3.02-.52,1.93-6.05,1.44-9.57s5.56-17.65,5.56-17.65l7.98,1.14Z"/><path class="cls-4" d="M346.16,380.52c-.61-.64-1.15-1.34-1.65-2.04-.19-.25-.4-.48-.57-.75-.58-.94-.99-1.96-1.38-2.96-.18-.44-.37-.87-.57-1.29-.2-.57-.39-1.14-.41-1.76,0-.19.17-.23.43-.16.26.07.64.22.86.49l.56.69c.16.24.29.49.42.74.27.5.51,1.01.74,1.53.27.64.77,1.16,1.18,1.71.45.61.94,1.2,1.47,1.74.33.33.67.66,1.04.94.55.44,1.15.84,1.79,1.14.25.1.52.17.78.23.27.05.55.06.8.12.11.04.22.05.34.09.41.16.5.35.49.87,0,.12,0,.23,0,.33-.02.34-.29.67-.7.75-.3.06-.62.14-.93.14-.3-.03-.6-.06-.9-.14-.58-.16-1.18-.35-1.7-.69-.79-.47-1.49-1.06-2.13-1.68l.04-.04Z"/><path class="cls-4" d="M377.55,398.43c-.4-.27-.8-.53-1.17-.82-.35-.32-.71-.62-1.01-.96-.23-.25-.51-.42-.71-.7-.74-.91-1.36-1.88-1.83-2.91-.19-.47-.46-.88-.63-1.34-.26-.57-.38-1.2-.55-1.79-.1-.37.33,0,.79.53.2.24.46.45.66.67.18.24.37.47.57.68.36.47.79.86,1.07,1.39.2.29.43.56.69.81l.82.7c.6.5,1.21.98,1.86,1.38.39.27.82.47,1.25.66.66.23,1.36.48,2.05.41.54-.02,1.03-.28,1.44-.55.09-.06.18-.12.27-.18.34-.18.57.02.95.5l.27.33c.27.37.28.82-.02,1.23-.99,1.03-2.61,1.23-3.97,1.01-1.04-.14-1.97-.58-2.84-1.02l.02-.05Z"/><path class="cls-4" d="M149.66,376.35c-.13-.71-.17-1.43-.16-2.1,0-.25-.06-.49-.02-.73.15-.86.38-1.67.6-2.45.1-.34.15-.69.24-1.03.1-.44.21-.87.44-1.27.07-.12.23-.07.39.08.16.15.36.41.39.66.11.91.1,1.74-.06,2.57-.11.5.06,1.02.12,1.51.03.55.09,1.08.21,1.6.07.32.16.65.3.95.2.46.41.93.77,1.28.28.27.69.38,1.02.49.07.03.16.03.23.05.26.09.17.38-.1,1.01l-.19.44c-.21.47-.57.8-.99.84-1.09-.11-1.93-.91-2.44-1.79-.39-.66-.63-1.37-.81-2.08l.06-.02Z"/><path class="cls-4" d="M119.96,387.23c-.04.45-.11.91-.14,1.37-.04.45-.13.92-.13,1.38,0,.33.02.67.04,1-.02,1.19.15,2.38.55,3.5.16.51.44.96.71,1.4.2.27.42.52.62.79.22.26.46.49.67.78.13.18,0,.32-.28.37-.27.05-.74.03-1.14-.21-.31-.25-.62-.51-.92-.79-.27-.29-.53-.61-.79-.93-.46-.67-.75-1.43-.94-2.2-.11-.46-.22-.92-.38-1.38-.11-.46-.25-.93-.32-1.4-.13-1.03-.22-2.08-.1-3.1.04-.63.14-1.26.21-1.88.13-.94.34-1.87.48-2.79.13-.71.07-1.46.22-2.18.03-.16.03-.32.08-.48.19-.57.45-.69,1.02-.63.13.01.26.02.39.04.42.08.7.42.79.87.22,1.31-.05,2.5-.22,3.74-.15.91-.29,1.82-.37,2.74h-.06Z"/><path class="cls-2" d="M90.64,176.88s-2.41,79.54,19.23,127.77c7.39,16.48,18.41,26.89,33.52,35.4,25.21,14.2,123.18,12.09,131.11,8.02,10.09-5.19,32.19-22.16,33.87-49.75,0,0-8.61-2.42-16.54-2.19s-86.75,2.59-97.57-1.74c-10.82-4.32-35.7-6.48-45.34-43.59-9.65-37.12-15.01-62.71-20.55-67.53-5.54-4.82-37.72-6.39-37.72-6.39Z"/><path class="cls-2" d="M359.78,295.13s-8.5-1.95-11.13,6.81c-2.63,8.75-20.44,48.36-20.44,48.36,0,0,47.42,0,58.7-9.01,8.02-6.41,10.11-11.45,12.19-18.21,2.08-6.76,4.09-19.86,4.09-19.86,0,0-21.11-8.09-24.83-15.91l-18.57,7.82Z"/><path class="cls-4" d="M345.26,358.75c-.64-.02-1.29-.04-1.94-.04-.24,0-.46.09-.7.09-.84-.03-1.69-.07-2.56-.15-.38-.01-.76.02-1.14.02-.25,0-.49.04-.74-.02-.13-.04-.25-.01-.38-.14-.13-.15-.25-.3-.37-.39-.14-.15-.11-.2.02-.43.07-.12.16-.28.25-.57.05-.13.09-.32.14-.43.05-.08.11-.15.16-.19.4-.3.82-.47,1.25-.57.45-.04.91-.06,1.4.06.59.15,1.15-.08,1.74-.13.64-.05,1.3-.07,1.95-.1.4-.02.81-.04,1.21-.06.61-.05,1.22-.04,1.82-.17.46-.09.9-.41,1.36-.5.1-.03.2-.08.31-.08.39.01.54.31.67.95.03.15.06.3.08.44.07.48-.05.94-.29,1.27-.18.24-.36.35-.55.52-.19.15-.38.28-.58.33-.4.13-.81.19-1.22.24-.62.07-1.26.07-1.89.12v-.08Z"/><path class="cls-4" d="M364.05,353.66c1.11-.11,2.21-.28,3.3-.49.4-.07.78-.23,1.17-.31,1.39-.32,2.83-.57,4.2-1.01.61-.19,1.2-.44,1.79-.68.74-.34,1.47-.69,2.25-.99.24-.09.29.05.19.31-.1.25-.33.67-.71.99-.69.53-1.4,1.03-2.15,1.47-.76.42-1.56.76-2.39,1.01-.99.32-1.98.75-2.99,1.07-1.11.34-2.25.6-3.38.85-.7.15-1.4.27-2.11.39-1.06.19-2.14.3-3.2.5-.82.15-1.61.44-2.42.63-.18.04-.35.12-.54.14-.34.06-.57.03-.74-.12-.17-.13-.27-.35-.36-.66-.04-.14-.09-.27-.12-.4-.09-.39.15-.93.61-1.2,1.37-.56,2.81-.79,4.28-1.03,1.09-.18,2.19-.33,3.29-.54l.02.06Z"/><path class="cls-4" d="M139.28,345.74c.95.4,1.9.82,2.87,1.21.35.15.73.2,1.09.34,1.26.5,2.53.98,3.8,1.51.57.22,1.15.37,1.73.51.75.18,1.5.34,2.23.64.23.1.17.28-.07.47-.24.18-.66.42-1.12.44-1.61.02-3.24-.01-4.78-.49-.9-.37-1.9-.47-2.85-.74-1.04-.3-2.08-.62-3.09-1.02l-1.87-.75c-.94-.38-1.87-.82-2.81-1.22-.73-.31-1.51-.52-2.25-.94-.15-.1-.32-.19-.46-.3-.54-.48-.56-.83-.28-1.3.06-.11.12-.22.19-.32.24-.31.7-.42,1.12-.35.29.07.67.09.97.14.28.09.62.16.92.26.29.11.63.17.92.31.3.13.6.26.92.38.91.39,1.86.79,2.83,1.15l-.02.07Z"/><path class="cls-4" d="M163.42,355.05c-.65-.13-1.29-.27-1.94-.4-.24-.04-.48-.04-.72-.1-.84-.25-1.68-.5-2.5-.82-.36-.17-.73-.29-1.09-.44-.45-.19-.94-.38-1.26-.82-.1-.13-.02-.21.18-.32.2-.1.53-.29.77-.28.9.08,1.79-.15,2.64.28.53.2,1.11.13,1.69.17.63.08,1.27.16,1.9.24.4.05.8.09,1.19.14.6.05,1.21.15,1.82.14.47.01.96-.2,1.44-.2.11,0,.21-.03.32-.02.4.03.49.32.49.91,0,.14,0,.27,0,.41-.03.44-.23.82-.53,1.03-.85.53-1.65.47-2.5.39-.63-.06-1.27-.17-1.91-.25v-.06Z"/><path class="cls-4" d="M289.03,295.84s9.14.6,14.03,3.26c3.49,1.89,2.65,10.79,1.63,13.42-2.69,6.97,10.15-17.02,1.65-17.01-11.75,0-17.3.33-17.3.33Z"/><path class="cls-4" d="M273.53,392.09c-1.51.46-3.07.88-4.85.93-.33,0-.68-.02-1.02-.03-.31-.03-.6-.06-.89-.13-2.04-.47-3.91-1.4-5.61-2.5-.75-.5-1.46-1.05-2.14-1.63-.85-.76-1.56-1.69-2.05-2.71-.16-.32-.03-.34.3-.23.32.12.89.32,1.41.64.45.3.92.55,1.38.8.42.29.86.55,1.31.8.9.47,1.75,1.03,2.69,1.5,1.11.59,2.44.76,3.68.97,1.16.19,2.59-.11,3.97-.51.86-.26,1.72-.55,2.56-.9,1.28-.52,2.58-1.06,3.8-1.72.95-.53,1.84-1.1,2.79-1.65.21-.12.4-.25.62-.36.8-.4,1.17-.31,1.57.12.09.1.2.19.27.29.25.35.08.84-.4,1.29-1.48,1.27-3.12,2.49-5.03,3.31-1.39.66-2.84,1.25-4.34,1.78l-.03-.06Z"/><path class="cls-4" d="M251.24,383.74c-.48-.72-.94-1.46-1.39-2.2-.17-.27-.39-.49-.54-.77-.55-.97-.95-2.03-1.37-3.05-.17-.46-.45-.86-.63-1.3-.24-.56-.57-1.09-.5-1.8.01-.21.2-.27.54-.26.17,0,.38.03.61.07.24.03.45.1.56.23.95.85,1.51,1.84,1.95,2.96.27.67.79,1.21,1.2,1.81.45.66.91,1.33,1.39,1.98.3.4.6.8.93,1.18.49.58.97,1.18,1.55,1.68.44.39,1.04.62,1.52.96.11.07.23.12.33.21.36.32.34.57-.15,1.22-.11.14-.2.29-.31.42-.34.43-.89.71-1.28.59-.58-.16-1.15-.36-1.59-.71-.45-.34-.86-.74-1.25-1.16-.58-.62-1.1-1.32-1.63-2.01l.05-.05Z"/><path class="cls-4" d="M335.24,338.71s-6.31,11.88-5.42,13.51c1.5,2.73,6.58,2.31,7.54,2.73,2.54,1.12-12.36-.23-12.36-.23l10.25-16.01Z"/><path class="cls-4" d="M286.38,339.98c2-1.73,3.88-3.59,5.61-5.59.64-.73,1.21-1.5,1.81-2.26,2.12-2.66,3.95-5.55,5.54-8.59.71-1.34,1.33-2.75,1.92-4.14.7-1.81,1.52-3.59,2.4-5.34.28-.54.38-.42.38.13-.01.55-.07,1.54-.38,2.64-.25.98-.62,1.91-1.01,2.83-.38.93-.78,1.85-1.21,2.77-.85,1.83-1.81,3.62-2.91,5.34-1.31,2.06-2.66,4.2-4.21,6.16-1.69,2.15-3.55,4.17-5.54,6.04-1.23,1.15-2.49,2.26-3.8,3.31-1.98,1.6-4.08,3.06-6.23,4.39-1.67,1.04-3.38,1.98-5.24,2.67-.42.14-.82.27-1.25.39-1.62.34-2.18.22-2.54-.03-.08-.06-.19-.11-.24-.17-.16-.21.47-.42,1.52-.76,1.56-.55,3.09-1.28,4.58-2.16,1.48-.89,3.02-1.75,4.48-2.76,2.18-1.48,4.29-3.13,6.28-4.89l.03.03Z"/><path class="cls-4" d="M288.56,339.09c-6.5,4.32-17.69,11.2-24.68,13.12-4.66,1.28-20.93,3.78-23.98,3.96l24.7-.1,23.97-16.98Z"/><path class="cls-4" d="M152.19,144.38c.74.28,16.15,3.89,25.7,23.04,6.02,12.06,11.14,27.19,11.14,27.19l8.24-2.91s-8.32-18.85-11.46-24.42c-3.14-5.57-14.49-21.53-15.63-22.87-7.69-9.13-15.16-5.48-15.16-5.48l-2.82,5.45Z"/><path class="cls-4" d="M151.1,136.24c3.17.46,6.34,1.09,9.48,1.96,3.13.9,6.27,2.03,9.17,3.94,1.05.7,2.06,1.53,2.96,2.51.8.92,1.52,1.81,2.23,2.75,4.92,6.62,9.01,13.71,12.65,21.01,1.61,3.24,3.21,6.5,4.66,9.8.95,2.1,1.86,4.24,2.6,6.43.19.55.39,1.09.56,1.64l.43,1.69c.06.28.16.55.19.85.03.3.03.6.05.89.04.59.02,1.2.12,1.77.28,1.41.25,1.21-.26.1-.25-.56-.83-1.28-1.61-2.1-.4-.41-.64-.92-.97-1.43-.16-.26-.3-.53-.47-.8-.12-.29-.25-.58-.38-.88-.91-2.12-1.85-4.23-2.72-6.36-.91-2.12-1.86-4.22-2.84-6.32-1.98-4.18-4.09-8.32-6.35-12.41-2.71-4.89-6.1-9.64-9.7-14l-.37-.45-.36-.37c-.25-.24-.46-.51-.74-.73-.56-.44-1.1-.9-1.75-1.26-1.22-.79-2.62-1.39-4.03-1.96-2.86-1.07-5.9-1.8-8.96-2.37-3.78-.7-7.63-1.19-11.5-1.52-5.86-.51-11.78-.8-17.64-.9-4.56-.09-9.04.1-13.58,0-1-.03-1.98-.02-3-.09-1.88-.12-3.15-.32-4.01-.62-.86-.37-1.32-.72-1.62-1.21-.14-.21-.32-.43-.37-.61-.09-.3.28-.45.93-.53.67-.09,1.69-.21,3-.13,3.92.11,8.06-.05,12.24-.02,4.19,0,8.46.04,12.75.18,6.37.2,12.8.62,19.21,1.48v.08Z"/><path class="cls-4" d="M46.01,152.09c-.73-.72-1.4-1.49-2-2.3-.21-.3-.45-.58-.65-.88-.69-1.09-1.31-2.2-1.92-3.3-.28-.48-.56-.96-.84-1.44-.36-.61-.72-1.22-1.02-1.87-.09-.2-.02-.21.16-.1.17.11.46.34.71.67.87,1.16,1.73,2.3,2.52,3.5.47.72,1.09,1.37,1.67,2.02.65.7,1.25,1.44,1.94,2.09.42.41.85.8,1.32,1.15.7.54,1.43,1.05,2.23,1.41.62.28,1.29.4,1.93.51.14.02.28.06.42.1.5.18.65.33.69.75.01.09.03.19.03.28,0,.3-.28.51-.75.57-.34.01-.72.09-1.06,0-.35-.06-.68-.16-1.02-.27-.67-.23-1.31-.56-1.91-.93-.9-.55-1.71-1.22-2.47-1.93l.02-.03Z"/><path class="cls-4" d="M51.92,134.75c-.38-.5-.77-.99-1.1-1.53-.35-.52-.69-1.04-.96-1.61-.22-.39-.45-.79-.63-1.2-.63-1.47-1.13-2.98-1.43-4.51-.16-.67-.27-1.36-.39-2.03-.06-.43-.11-.87-.17-1.31-.04-.44.05-.89.08-1.32.03-.27.08-.24.21-.02.11.22.42.61.55,1.08.39,1.69,1.04,3.24,1.52,4.87.29.98.89,1.89,1.42,2.78.28.5.63.95.92,1.45.34.46.64.96,1.01,1.4l.67.83.73.78c.75.77,1.57,1.49,2.46,2.08.36.21.73.39,1.1.57.38.16.78.27,1.14.44.16.08.32.14.49.21.59.29.72.53.67,1.05-.01.12-.01.24-.04.36-.08.38-.46.57-1.03.5-.41-.05-.84-.1-1.25-.22-.39-.15-.79-.3-1.16-.5-.37-.21-.74-.42-1.1-.65-.36-.24-.69-.51-1.04-.77-.51-.38-.96-.85-1.43-1.28-.43-.47-.88-.92-1.28-1.42l.04-.04Z"/><path class="cls-4" d="M60.15,148.99c.28-.93.57-1.85.88-2.77.12-.33.18-.68.31-1.01.46-1.15.93-2.31,1.4-3.45.23-.5.42-1.02.6-1.53.23-.66.46-1.32.84-1.92.12-.19.3-.09.46.16.15.25.31.66.25,1.05-.24,1.4-.42,2.8-1.06,4.08-.35.78-.47,1.66-.69,2.49-.23.92-.54,1.82-.78,2.74-.16.56-.32,1.13-.45,1.7-.21.86-.43,1.73-.54,2.6-.09.68-.04,1.36-.04,2.05,0,.15.02.3.01.45-.02.56-.23.71-.81.75-.13.01-.26.03-.39.03-.4,0-.79-.28-.87-.71-.22-1.27-.06-2.58.18-3.86.18-.96.42-1.91.66-2.85h.05Z"/><path class="cls-4" d="M71.27,132.86c.19-.49.38-.98.56-1.46.07-.18.09-.36.16-.54.26-.61.59-1.2.91-1.78.15-.25.21-.54.37-.79.18-.33.38-.64.66-.92.09-.09.17-.04.26.1.09.14.24.39.27.62l.05.6c0,.1.02.2.01.29l-.07.26c-.1.34-.23.67-.41,1-.23.38-.28.84-.41,1.26-.14.46-.29.93-.43,1.4-.08.29-.17.58-.23.87-.09.45-.23.89-.26,1.34-.03.35.06.71.11,1.06,0,.08.03.15.02.23-.02.28-.16.36-.62.4l-.31.02c-.35,0-.63-.13-.75-.36-.37-.68-.35-1.39-.3-2.09.03-.52.23-1.03.35-1.53h.05Z"/><path class="cls-4" d="M75.77,136.45s-4.84,19.94-1.58,20.46c4.99.79,19.83.81,30.56,4.71,11.11,4.04,26.96,20.03,26.96,20.03l-73.28-7.26s6.98-36.37,8.46-38.2c1.48-1.83,8.88.26,8.88.26Z"/><path class="cls-4" d="M248.72,237.63s-8.98,27.83-4.45,40.77c4.53,12.94,7.24,19.09,7.24,19.09,0,0-47.37,3.12-65.71-5.35-6.27-2.9-25.44-12.64-31.56-26.43-6.12-13.79-13.51-45.17-13.51-45.17,0,0-4.2-28.19-7.36-32.39-3.16-4.2-17.28-14.65-21.07-16.59-3.78-1.94-31.64-11.73-31.64-11.73l-10.81-1.7s-.46-2.2.09-5.9,7.21-27.65,7.21-27.65l5.85-13.76,28.63,9.05s46.29,22.9,49.75,26.66c3.46,3.76,14.31,25.68,14.31,25.68l10.11,24.97s-14.52,12.87-14.2,21.01c.32,8.13,8.54,24.55,16.59,29.41,8.05,4.85,27.91,9.19,31.89,8.78,8.91-.93,0-8.78,0-8.78l-11.41-5.51s-.96-2.15,2.34-2.15,37.71-2.28,37.71-2.28Z"/><path class="cls-4" d="M346.69,241.45c-.6.12-7.74-1.54-8.25.61-.53,2.23,3.45,8.03,3.45,8.03,0,0-8.81-4.77-8.18-8.03.7-3.61,12.98-.61,12.98-.61Z"/><path class="cls-4" d="M294.32,215.13c-.1,1.77-.1,3.57-.25,5.39-.04.66-.04,1.33-.12,1.99l-.37,3.15-.04.31-.14.17c-.07.08-.15.16-.24.23-.06.04-.05.05-.18.1-.12.05-.26.08-.4.08-.31-.01-.42-.1-.57-.21-.07-.05-.14-.13-.18-.18l-.05-.08c-.07-.12-.12-.24-.13-.29-.02-.07-.05-.15-.05-.19-.04-.22-.06-.4-.07-.58-.02-.35-.03-.68-.03-1.01,0-.66.03-1.3.06-1.94.07-1.04.13-2.07.2-3.1.03-1.32.31-2.63.7-3.91.13-.4.16-.33.24.02.07.36.29,1.01.42,1.77.28,2.64.24,5.34.23,7.86,0,.15.02.31.03.4v.05s0,0,0,0h0s-.09.04-.09.04c-.16.08-.26.1-.35.14-.09.04-.19.12-.25.16-.04,0-.08.08-.08.09,0-.05,0,.02-.04-.08-.04-.07-.1-.12-.17-.14l-.65.18c.09-1.26.08-2.56.14-3.84.04-.9.04-1.79.06-2.7l.09-2.72c.04-1.12.1-2.25.18-3.38.12-1.71.38-3.44.71-5.12.25-1.31.49-2.62.95-3.88.1-.27.19-.55.33-.81.53-.97.84-1.2,1.31-1.22.1,0,.21-.03.29-.02.26.02.38.57.23,1.32-.1.57-.15,1.15-.3,1.69-.1.56-.19,1.12-.32,1.67-.26,1.1-.47,2.22-.63,3.36-.24,1.7-.37,3.44-.42,5.22h-.06Z"/><path class="cls-4" d="M380.63,120.93c.52,1.23.9,2.43,1.28,3.62.14.43.35.84.47,1.28.43,1.55.88,3.06,1.23,4.61.17.68.42,1.33.66,1.98.31.83.81,1.54.65,2.61.04.3.04.26-.19.11-.1-.08-.38-.12-.65-.21-.14-.05-.32-.09-.44-.16-.11-.08-.21-.17-.3-.28-.59-.78-.99-1.62-1.4-2.46-.37-.85-.77-1.69-.92-2.61-.22-1.1-.73-2.12-1.11-3.17-.42-1.15-.81-2.31-1.28-3.41-.29-.67-.59-1.34-.95-1.93-.28-.43-.55-.85-.88-1.08-.33-.25-.76-.39-1.23-.41-.75-.04-1.5.31-2.31.57-.18.05-.36.14-.55.18-.74.14-1.13-.06-1.33-.72-.04-.15-.09-.3-.11-.45-.02-.5.13-.92.53-1.23.63-.43,1.43-.84,2.41-.98.95-.17,2.16-.17,3.4.38.45.22.88.51,1.24.85.29.32.64.69.82,1,.44.65.74,1.26,1.03,1.87l-.06.03Z"/><path class="cls-4" d="M388.71,143.98c-.1-.63-.22-1.26-.4-1.88-.06-.23-.18-.43-.24-.66-.2-.81-.42-1.63-.75-2.41-.15-.34-.32-.68-.51-1-.11-.22-.3-.37-.34-.63,0-.14.02-.31-.01-.43-.04-.11-.07-.22-.12-.36-.04-.15,0-.17.17-.13.12.03.24.07.33.09.07.02.13.05.23.06.11,0,.23,0,.34.02,1.05.54,1.46,1.56,1.77,2.56.17.61.53,1.16.75,1.76.23.67.4,1.35.56,2.03.1.42.17.84.25,1.26.13.64.19,1.29.32,1.92.09.49.3.96.43,1.45.03.11.08.21.1.32,0,.05.01.1.01.14-.02.04-.04.09-.07.12-.05.07-.1.13-.16.19-.12.1-.27.16-.47.21-.09.02-.18.05-.27.07-.29.05-.57-.1-.87-.36-.33-.39-.38-.8-.51-1.21-.11-.41-.18-.83-.25-1.25-.11-.62-.2-1.26-.34-1.88h.05Z"/><path class="cls-4" d="M383.47,129.09c-.15-.97-.33-1.94-.53-2.9-.08-.35-.21-.68-.29-1.03-.28-1.23-.55-2.47-.88-3.7-.14-.55-.37-1.06-.56-1.58-.26-.66-.52-1.33-.74-2.03-.06-.22.04-.25.26-.15.21.1.58.31.86.65.99,1.2,1.61,2.59,2.03,4.04.21.88.58,1.75.85,2.63.29.97.52,1.95.76,2.94l.41,1.82c.2.92.4,1.84.59,2.75.16.71.48,1.37.59,2.08.03.16.08.31.09.46.04.6-.11.81-.46,1-.08.04-.16.09-.24.12-.27.1-.56-.1-.83-.48-.19-.28-.34-.58-.51-.87-.16-.29-.32-.59-.4-.91-.19-.63-.39-1.25-.5-1.91-.19-.96-.34-1.94-.54-2.91h.05Z"/><polygon class="cls-4" points="463.41 139.36 461.61 144.7 432.51 130.92 431.93 125.85 463.41 139.36"/><path class="cls-4" d="M431.93,125.85s1.16,4.08.58,5.07c-.58.99-2.95-.33-2.95-.33v-6.02l2.37,1.28Z"/><path class="cls-4" d="M397.09,130.59s8.45-.17,9.2-1.76c.75-1.59-1.32-1.98-1.32-1.98l-7.45,1.38-.43,2.37Z"/><path class="cls-4" d="M468.17,152s5.32,0,6.43,2.78c1.11,2.78-4.01-10.78-4.01-10.78l-2.42,8Z"/><path class="cls-4" d="M433.44,247.91s8.54-8.75,2.05-12c-6.49-3.25-10.83,5.62-10.83,5.62,0,0-8.2-.56-11.41,4.1-3.22,4.65-6.97,14.22-8.32,14.85-1.35.63-7.36-2.11-7.36-2.11l-3.23-3.94s-3.34,5.65-5.39,6.14-7.4.3-8.16-2.08c-.76-2.38-1.88-2.92-1.88-2.92,0,0-7.43,1.55-10.38,6.84s-4.8,7.75-3.68,11.18c1.12,3.44,3.59,6.71,3.59,6.71,0,0-3.25,5.26-2.21,8,1.04,2.74,3.4,6.6,6.29,7.28,2.89.68,5.83.72,5.83.72,0,0,1.97,5.31,3.72,7.82,1.75,2.51,8.58,7.81,11.93,8.04,3.35.23,9.65-.44,12.16-2.22,3.79-2.69,7.58-7.41,7.58-7.41,0,0,9.66,3.08,13.92.55,4.27-2.54,8.42-4.19,8.93-7.49s.62-10.98.62-10.98l-3.76-6.35s3.75-1.3,5.44-4.47c1.69-3.18,3.42-10.19,2.85-12.57-.57-2.39-4.12-9.16-4.12-9.16l-4.17-4.14Z"/><path class="cls-4" d="M242.19,236.77c4.67.04,9.34.11,14,.26,1.7.04,3.4.02,5.1.1,5.99.26,11.97.69,17.95,1.09,2.65.16,5.32.32,7.95.48,1.69.12,3.38.18,5.07.34,1.69.19,3.37.41,5.05.65,1.05.16.9.29,0,.48-.9.17-2.57.5-4.53.6-.87.05-1.73.06-2.59.03l-2.59-.04c-1.73-.04-3.45-.03-5.18-.12-3.45-.16-6.91-.36-10.38-.6-4.15-.31-8.48-.23-12.73-.34-4.67-.1-9.35-.18-14.03-.17-2.88,0-5.76.03-8.63.08-4.36.1-8.74.21-13.05.51-3.36.23-6.63.67-9.93,1.06-.73.09-1.44.19-2.17.28-1.36.16-2.26.19-2.91.07-.65-.1-1.03-.3-1.36-.63-.15-.15-.34-.29-.43-.44-.31-.49.76-1.07,2.74-1.51,5.9-1.06,12.2-1.59,18.52-1.9,4.7-.26,9.42-.32,14.13-.35v.07Z"/><path class="cls-4" d="M283.78,239.38c-.31.24-.66.45-1.04.61-.19.08-.39.13-.58.18-.11.03-.18.04-.22.05l-.16.03-1.38.28c-.95.19-1.92.38-2.93.52-.74.07-1.48.2-2.28.15-.7-.05-1.42-.11-2.21-.42-.78-.27-1.7-1-1.9-2.07-.17-1.05.23-1.8.57-2.41.37-.61.8-1.12,1.24-1.6.8-.83,1.58-1.65,2.45-2.33.56-.44,1.09-.92,1.73-1.25.31-.17.63-.34.96-.49.31-.18.75-.14,1.09-.26.42-.16.38-.08.13.2-.13.14-.25.44-.36.83-.14.34-.35.66-.6.97-.24.26-.43.56-.69.79l-.73.71-.71.72-.73.67c-.48.45-.94.92-1.33,1.38-.4.46-.73.96-.87,1.32-.08.22-.07.3-.03.4.05.12.23.21.47.31.56.15,1.37.09,2.15,0,.87-.12,1.78-.28,2.69-.45l2.82-.61c.42-.07.66-.21.96-.53.28-.31.53-.76.71-1.24.55-1.5.77-3.28.76-5,0-1.35-.15-2.68-.28-4.02-.03-.3-.08-.58-.09-.88-.03-.56-.02-.93.09-1.2.15-.27.32-.44.55-.58.1-.06.2-.14.29-.18.15-.06.3.01.5.2.19.19.47.48.56.89.72,2.4,1.42,5.05,1.07,7.84-.09,1.03-.26,2.09-.58,3.19-.35,1.07-.8,2.29-2.01,3.36l-.05-.05Z"/><path class="cls-4" d="M43.7,110.78c-.1-2.7-.04-5.41.26-8.15.17-1.37.39-2.75.78-4.15.42-1.38.89-2.86,2.28-4.2.48-.55,1.5-.99,2.4-1.16.29,0,.59.02.89.04.29.05.57.17.85.28.26.15.51.32.75.5.23.2.44.44.6.61.58.73.96,1.45,1.25,2.15,1.38,3.44,1.92,6.77,2.61,10.11.66,3.33,1.27,6.64,2.17,9.83.4,1.41.88,2.8,1.53,4.02.31.62.7,1.16,1.11,1.58.37.4.95.68,1.58.96,1.63.69,3.47,1.2,5.29,1.7l1.38.38,1.37.45c.92.3,1.83.62,2.74,1.03,1.14.57.86.7-.21.82-1.07.14-3.04.52-5.26.17-1.95-.39-3.92-.76-5.95-1.5-.51-.21-1.02-.43-1.56-.74-.54-.29-1.12-.72-1.63-1.24-.93-1.01-1.43-2.02-1.89-3.02-.89-1.99-1.39-3.95-1.88-5.91-.46-1.96-.83-3.91-1.17-5.86-.41-2.33-.89-4.68-1.5-6.97-.3-1.15-.62-2.28-1-3.36-.38-1.05-.84-2.16-1.35-2.75-.14-.19-.34-.32-.56-.28-.26-.03-.99.54-1.4,1.43-.44.88-.74,1.93-.98,3-.44,2.16-.62,4.45-.66,6.73-.06,3.2.12,6.44.5,9.64.29,2.43.68,4.85,1.2,7.23.55,2.36,1.2,4.74,2.25,6.81.42.8.89,1.47,1.51,2.03.64.56,1.38,1.03,2.17,1.43,1.6.79,3.34,1.33,5.11,1.8.78.2,1.56.35,2.35.56,2.95.74,3.88,1.08,4.36,2.03.11.2.27.41.33.58.19.55-1.18.95-3.47.59-1.7-.25-3.43-.57-5.15-1.11-1.72-.53-3.46-1.17-5.16-2.16-.84-.48-1.7-1.07-2.5-1.78-.82-.76-1.49-1.72-1.97-2.61-.93-1.79-1.52-3.57-2.04-5.36-1.47-5.32-2.16-10.72-2.43-16.16h.07Z"/><path class="cls-4" d="M52.19,155.7c-1.25-.29-2.5-.61-3.75-.88-.46-.1-.93-.12-1.38-.23-1.61-.36-3.23-.72-4.85-1.09-.72-.15-1.45-.24-2.17-.32-.46-.05-.93-.13-1.39-.21-.46-.08-.92-.2-1.37-.42-.28-.14-.23-.27.04-.5.13-.12.32-.27.55-.43.23-.14.49-.24.76-.27.48-.05.97-.1,1.45-.12.48.01.96.04,1.44.07.96.08,1.91.17,2.85.43,1.13.29,2.33.3,3.5.47,1.28.18,2.56.4,3.84.62.79.13,1.57.32,2.35.45,1.19.22,2.38.48,3.57.63.93.11,1.86.08,2.78.17.2.02.41.01.61.04.75.11.96.35,1.02.98.01.14.04.29.04.42,0,.45-.37.82-.95.91-.85.12-1.71.19-2.57.19-.86-.04-1.71-.14-2.57-.25-1.28-.17-2.55-.4-3.82-.6v-.07Z"/><path class="cls-4" d="M37.9,119.14c-.34-.4-.7-.74-1.02-.99l-.23-.15c-.07-.04-.12-.05-.18-.09-.11-.03-.09-.05-.15-.05-.08.02-.12-.02-.31.26-.16.26-.31.7-.4,1.19-.34,2.01-.08,4.39.28,6.66.28,1.67.73,3.33,1.16,4.98.76,2.92,1.7,5.81,2.82,8.62,1.13,2.8,2.39,5.57,4.02,8.08.72,1.1,1.53,2.16,2.46,3.02.46.43.96.81,1.46,1.09.52.29.97.41,1.65.54,1.66.33,3.4.56,5.11.81.86.13,1.7.33,2.55.49.43.06.84.21,1.26.36.42.14.84.25,1.26.37,1.03.32.93.36-.03.69-.48.17-1.16.37-2,.67-.83.22-1.79.28-2.81.25-1.8-.19-3.56-.48-5.37-.81-.47-.09-.89-.18-1.44-.34-.57-.17-1.15-.43-1.63-.73-.97-.59-1.72-1.3-2.4-2.03-2.65-2.94-4.28-6.27-5.7-9.66-1.62-4.08-3.21-8.33-4.23-12.7-.54-2.4-.97-4.84-1.09-7.36-.04-1.27-.03-2.55.28-3.9.17-.67.42-1.38.96-2.05.56-.68,1.56-1.14,2.49-.97,1.14.22,1.81.83,2.42,1.39.59.58,1.08,1.2,1.52,1.83.9,1.26,1.66,2.56,2.42,3.86,1.14,1.97,2.18,3.97,3.27,5.93,1.09,1.94,2.19,3.93,3.56,5.51.27.3.55.58.83.79.3.21.64.43,1,.61.71.38,1.48.69,2.26.96,1.57.55,3.19.96,4.84,1.32.72.16,1.44.28,2.18.43,2.73.5,3.54.97,4.05,1.64.11.16.27.33.33.47.21.47-1.01.75-3.13.64-3.11-.37-6.28-.99-9.47-2.15-.8-.31-1.6-.63-2.4-1.08-.41-.21-.79-.47-1.22-.78-.45-.35-.8-.71-1.12-1.06-1.24-1.42-2.08-2.86-2.93-4.3-1.24-2.14-2.34-4.29-3.49-6.39-.57-1.05-1.15-2.08-1.76-3.08-.63-.97-1.29-1.94-1.99-2.72l.04-.05Z"/><path class="cls-4" d="M120.31,382.79c-.63,2.74-1.1,5.52-1.19,8.2-.03,1.32.05,2.65.37,3.7.16.53.38.96.62,1.23.24.28.48.44.86.53.56.12,1.25-.03,1.97-.38.73-.33,1.45-.94,2.17-1.53,1.26-1.1,2.42-2.46,3.51-3.88,1.08-1.43,2.11-2.92,3.06-4.48,1.92-3.1,3.65-6.36,5.26-9.67,1.46-2.93,2.76-5.96,3.94-8.99,1.5-3.9,2.9-7.84,4.68-11.66.67-1.16.5-1.04.53.12.02.58,0,1.4,0,2.41-.05.99-.21,2.12-.49,3.32-.27,1.05-.49,2.12-.84,3.15-.34,1.03-.69,2.05-1.05,3.07-.73,2.04-1.5,4.07-2.33,6.07-1.62,4.03-3.63,7.92-5.91,11.69-1.37,2.25-2.77,4.55-4.38,6.78-1.62,2.21-3.36,4.44-5.95,6.09-.38.2-.76.41-1.16.59-.44.14-.85.32-1.31.41-.93.18-1.95.2-2.93-.12-1-.33-1.88-1.05-2.42-1.86-.55-.81-.84-1.67-1.03-2.48-.37-1.64-.37-3.2-.29-4.72.08-1.52.29-3.01.55-4.47.64-3.61,1.56-7.11,2.59-10.57,1.56-5.24,3.46-10.37,5.38-15.42,1.5-3.93,2.89-7.81,4.52-11.65.36-.85.69-1.68,1.08-2.53,1.55-3.07,2.33-3.93,3.36-4.19.23-.06.48-.17.66-.18.59-.02.4,1.44-.51,3.72-2.68,6.81-5.64,13.95-8.25,21.24-1.92,5.41-3.75,10.91-4.99,16.45h-.08Z"/><path class="cls-4" d="M150.92,374.59c-.01.71.01,1.41.13,2.01.12.59.33,1.04.52,1.26.19.23.47.37.79.37.35,0,.89-.2,1.42-.55.8-.53,1.52-1.36,2.26-2.19,1.3-1.48,2.49-3.17,3.59-4.92,1.12-1.74,2.17-3.56,3.13-5.42.87-1.65,1.56-3.39,2.31-5.08.96-2.18,1.66-4.45,2.93-6.53.43-.64.5-.52.66.19.21.73.46,2.06.13,3.44-.32,1.21-.67,2.4-1.05,3.59-.19.59-.38,1.19-.6,1.77l-.74,1.72c-1.02,2.27-2.16,4.51-3.52,6.65-.8,1.28-1.6,2.6-2.46,3.92-.86,1.31-1.78,2.62-2.93,3.8-.62.65-1.34,1.26-2.16,1.81-.83.52-1.88,1-3.12.98-1.24-.02-2.42-.63-3.16-1.56-.74-.93-1.01-1.95-1.17-2.88-.34-2.32.01-4.43.37-6.5.6-3.13,1.57-6.12,2.5-9.08.73-2.3,1.35-4.58,2.12-6.85.17-.5.31-1,.51-1.49.17-.46.35-.83.56-1.12.2-.29.36-.52.55-.69.39-.32.73-.46,1.09-.52.16-.03.33-.09.45-.09.21,0,.3.21.37.63.07.42.13,1.04-.03,1.73-1.03,4.07-2.56,8.18-3.7,12.37-.84,3.09-1.62,6.28-1.68,9.22h-.08Z"/><path class="cls-4" d="M104.58,304.05c2.98,7.03,6.51,13.82,10.9,20,4.38,6.15,9.64,11.74,15.92,15.8,4.57,2.95,9.76,5.01,15.02,6.76,9.32,3.07,19.1,4.92,28.91,6.29,9.83,1.33,19.74,2.14,29.68,2.58,8.82.4,17.7.46,26.46.3,5.63-.12,11.26-.32,16.9-.52,2.82-.09,5.63-.28,8.45-.34,2.82-.08,5.64-.16,8.46-.24,3.51-.12,3.05-.14.11.45-1.47.27-3.55.75-6.08,1.22-1.27.23-2.64.52-4.11.72-1.47.19-3.03.34-4.65.47-2.88.23-5.76.42-8.65.6-2.88.17-5.77.25-8.66.34-5.78.16-11.56.21-17.35.15-11.58-.14-23.18-.8-34.78-2.13-6.93-.82-14-1.78-21.05-3.17-7.04-1.4-14.1-3.19-20.83-5.87-3.67-1.53-7.31-3.25-10.66-5.54-3.34-2.25-6.36-4.91-9.11-7.81-5.51-5.8-9.91-12.49-13.57-19.48-4.5-8.63-7.9-17.75-10.69-26.99-4.2-14.03-6.91-28.5-8.92-42.84-1.55-11.16-2.77-22.14-3.49-33.26-.16-2.45-.32-4.84-.42-7.32-.34-9.17-.03-12.11.85-14.07.2-.44.41-1.04.62-1.28.69-.84,1.09,2.84,1.43,9.5,1.03,19.74,2.91,40.54,6.67,61.07,2.84,15.21,6.67,30.37,12.71,44.56l-.07.05Z"/><path class="cls-4" d="M371.68,388.88c1.38,2.1,2.87,4.15,4.55,5.91.83.9,1.73,1.68,2.65,2.33.91.65,1.91,1.1,2.69,1.13.14-.01.27-.02.42-.01.1,0,.12-.03.17-.04.07-.03.16-.11.29-.33.24-.45.4-1.25.47-2.07.13-1.47.03-3.09-.14-4.69-.18-1.61-.44-3.23-.75-4.84-.62-3.23-1.43-6.46-2.33-9.66-.81-2.84-1.72-5.66-2.71-8.43l-.97-2.65-.93-2.67c-.29-.9-.65-1.77-.86-2.7-.21-.93-.42-1.86-.65-2.78-.27-1.15-.16-1.04.54-.26.41.45.92,1.01,1.48,1.63.3.34.67.7.96,1.12.27.43.53.9.76,1.4,3.27,7.09,5.58,14.55,7.11,22.32.44,2.33.93,4.69,1.27,7.14.17,1.22.3,2.46.33,3.75.02,1.28-.02,2.6-.5,4.05-.28.77-.77,1.7-1.76,2.3-.46.28-1.08.46-1.5.47-.44.02-.9.07-1.3-.02-1.69-.24-3.01-1.04-4.17-1.87-2.28-1.73-4.03-3.82-5.63-5.97-1.97-2.65-3.65-5.47-5.22-8.33-2.37-4.33-4.37-8.87-6.15-13.42-1.39-3.54-2.72-7.03-3.73-10.7-.22-.81-.44-1.6-.63-2.43-.63-3.08-.46-4.15.25-4.87.17-.17.33-.38.5-.48.61-.33,1.15.85,1.67,2.97,1.56,6.29,3.85,12.8,6.62,19.13,2.09,4.68,4.42,9.31,7.27,13.54l-.06.05Z"/><path class="cls-4" d="M345.97,376.95c.81,1.25,1.72,2.45,2.74,3.27.99.85,2.09,1.2,2.78.93.19-.1.35-.17.49-.46.14-.27.27-.66.37-1.11.32-1.63.29-3.7.07-5.68-.22-2.01-.58-4.03-1.02-6.05-.38-1.79-.86-3.58-1.36-5.34-.28-1.14-.6-2.28-.86-3.44l-.19-.87-.11-.9c-.06-.6-.11-1.2-.13-1.81.02-.78.11-.65.4-.08.16.28.4.68.71,1.14.16.25.33.49.5.75.09.13.16.27.27.41.06.15.13.3.19.46l1.37,3.33c.44,1.12.79,2.28,1.17,3.43.75,2.31,1.26,4.72,1.63,7.18.2,1.48.45,2.98.58,4.57.05.8.12,1.6.02,2.45-.07.84-.22,1.73-.66,2.64-.1.25-.25.5-.43.74-.15.25-.36.48-.6.69-.21.23-.49.4-.77.55-.27.18-.57.26-.86.35-1.14.3-2.25.18-3.24-.18-1.92-.79-3.19-2.13-4.26-3.48-1.32-1.68-2.33-3.49-3.25-5.32-1.39-2.78-2.48-5.67-3.51-8.54-.8-2.23-1.64-4.41-2.27-6.7-.14-.5-.29-1-.4-1.52-.19-.97-.25-1.64-.14-2.13.13-.49.39-.78.74-1,.15-.1.3-.22.43-.27.22-.09.43.07.7.38.28.31.53.78.69,1.42,1.09,3.8,2.48,7.87,4.04,11.81,1.19,2.91,2.52,5.81,4.21,8.32l-.06.05Z"/><path class="cls-4" d="M363.33,351.91c4.92-.77,9.84-1.79,14.34-3.64.81-.35,1.65-.67,2.36-1.15l1.12-.66c.38-.21.75-.43,1.1-.7,2.56-1.75,4.85-3.93,6.86-6.37,2.04-2.42,3.82-5.1,5.36-7.92,1.37-2.51,2.45-5.18,3.47-7.83,1.29-3.43,2.22-6.97,3.75-10.39.47-1.07.37-.94.35.06,0,.5.04,1.22.11,2.11,0,.87-.05,1.88-.24,2.95-1.54,7.5-4.6,14.8-9.32,21.1-2.91,3.67-6.21,7.44-10.52,9.88-4.73,2.66-9.84,3.93-14.92,4.95-3.13.63-6.28,1.04-9.43,1.42-4.77.54-9.58.83-14.33,1.09-3.69.18-7.31.5-10.98.55-.81,0-1.6.04-2.42.03-3.03-.06-4-.48-4.57-1.28-.13-.18-.31-.35-.38-.5-.23-.47,1.02-.99,3.18-1.13,3.23-.16,6.53-.32,9.87-.48,3.35-.13,6.75-.31,10.15-.53,5.04-.34,10.1-.82,15.07-1.64l.02.07Z"/><path class="cls-4" d="M245.15,260.94c-.08,1.53-.18,3.07-.14,4.61.01.77,0,1.54.03,2.31l.15,2.31c.05,1.13.28,2.24.41,3.36.43,3.95,1.11,7.91,2.2,11.77.44,1.73,1.07,3.4,1.66,5.07.86,2.1,1.65,4.22,2.04,6.57.17.71.14.62-.29.15-.21-.23-.57-.54-1.03-.9-.23-.18-.47-.38-.73-.6-.13-.11-.24-.23-.4-.34-.09-.14-.19-.27-.28-.42-2.6-4.08-3.93-8.77-4.75-13.52-.5-2.84-1.18-5.75-1.54-8.68-.21-1.6-.28-3.23-.41-4.84-.01-1.62-.12-3.24-.05-4.85l.11-2.98.27-2.97c.05-.75.15-1.5.28-2.24l.34-2.24c.26-1.48.61-2.95.88-4.42.29-1.13.54-2.25.77-3.39.27-1.12.6-2.23.92-3.35.13-.5.25-.99.49-1.45.81-1.74,1.28-2.2,2.21-2.18.19,0,.38-.05.52-.04.4,0,.84,1.07.47,2.34-.48,1.93-1.02,3.85-1.57,5.79-.23.99-.48,1.97-.75,2.96-.21,1-.41,2.01-.62,3.01-.32,1.49-.48,3.02-.73,4.54-.11,1.53-.34,3.06-.37,4.61h-.08Z"/><path class="cls-4" d="M246.05,391.12c.49.01.99.05,1.49,0,.5-.01,1-.1,1.5-.21.37-.05.69-.27,1.06-.36,1.26-.37,2.55-.87,3.69-1.65.27-.15.47-.38.72-.57.23-.2.49-.37.69-.6l.4-.43c.15-.13.33-.23.5-.35.33-.24.66-.48,1.11-.66.42-.01.27-.09.37.26.09.33.27.99.16,1.56-.05.25-.13.48-.21.73-.08.24-.25.4-.37.6-.26.4-.59.73-.91,1.08-.36.31-.76.56-1.17.79-.4.25-.83.46-1.28.62-.27.1-.52.22-.77.36-.26.11-.52.24-.77.37-.5.28-1.03.5-1.57.69-.58.23-1.21.32-1.81.47-.62.08-1.24.19-1.86.21l-1.15.02-1.14-.08c-.57-.04-1.14-.18-1.7-.27-.55-.16-1.11-.27-1.66-.44-.42-.13-.86-.22-1.3-.31l-1.3-.38c-.2-.05-.37-.15-.53-.25-.3-.21-.48-.39-.53-.62-.04-.24.02-.49.16-.82.06-.15.12-.3.19-.43.12-.23.31-.39.53-.51.23-.12.5-.22.75-.19.75.05,1.4.16,1.99.39.63.14,1.23.37,1.86.5.46.15.94.18,1.41.29.48.05.96.12,1.45.11v.07Z"/><path class="cls-4" d="M227.5,370.38c1.38.42,2.59.93,3.83,1.41.45.17.92.27,1.36.45,1.55.65,3.07,1.37,4.64,1.87.7.22,1.41.36,2.12.46.45.07.9.05,1.34.12.22.06.44.08.66.17.22.09.46.18.69.24.3.11.3.2.08.5-.11.15-.27.38-.49.62-.11.12-.24.27-.37.37-.14.09-.29.16-.44.21-2.22.32-4.23-.27-6.09-1.05-1.11-.49-2.34-.69-3.47-1.12-1.25-.45-2.47-.94-3.69-1.35l-1.03-.32c-.19-.06-.4-.12-.62-.13-.07,0-.15,0-.22,0-.3.06-.51.35-.48.65.01.3.16.6.33.85.06.06.22.3.36.43.14.16.3.29.46.42.33.26.67.48.99.69.15.08.29.17.44.24.26.16.41.24.51.43.1.14.16.31.21.54.03.11.07.22.09.32.03.17-.03.31-.21.44-.19.13-.5.25-.88.23-1.1-.1-2.17-.5-2.97-1.22-.21-.18-.41-.36-.59-.56l-.28-.31-.13-.17-.2-.28c-.48-.74-.83-1.58-.89-2.36,0-.29,0-.58.07-.85.03-.28.16-.53.27-.79.26-.51.74-.87,1.19-1.18.25-.11.52-.19.79-.26.29-.03.58-.08.9-.05l.47.02.48.08c.31.05.68.14.8.17v.07Z"/><path class="cls-4" d="M217.91,382.13c.91-1.21,1.85-2.36,2.95-3.48,1.28-1.22,2.78-2.12,4.27-2.65,1.09-.4,2.16-.8,3.25-1,3.86-.78,7.62-.73,11.34-.77,1.65,0,3.3-.09,4.92-.21,2.08-.2,4.13-.31,6.24-.14.71.29.6.15.13.63-.48.44-1.42,1.3-2.64,1.63-.54.14-1.07.31-1.61.38-.55.07-1.08.12-1.62.17-1.08.1-2.15.17-3.23.23-2.14.11-4.27.17-6.4.19-2.54,0-5.15.44-7.53,1.08-.63.21-1.32.35-1.9.63-.3.13-.61.24-.9.38l-.82.48c-.3.14-.5.36-.74.55-.23.2-.48.36-.71.63-.47.49-.93,1.03-1.38,1.57-1.1,1.34-2.14,2.75-3.03,4.23-.67,1.12-1.27,2.28-1.71,3.47-.43,1.17-.69,2.44-.42,3.46.22.86.72,1.8,1.24,2.58.53.79,1.15,1.51,1.83,2.07.3.24.62.42.89.67,1.03.86,1.45,1.07,1.74,1.7.07.13.17.24.22.33.08.16-.05.28-.42.49-.19.13-.43.18-.72.21-.3.04-.64.02-1.04-.03-.58-.09-1.14-.28-1.68-.52-.53-.26-.97-.64-1.39-1.02-.83-.78-1.5-1.67-2.05-2.61-.28-.47-.51-.96-.76-1.45l-.33-.75c-.1-.27-.2-.46-.29-.86-.43-1.45-.26-2.74-.02-3.88.37-1.71,1.06-3.16,1.8-4.54.75-1.38,1.59-2.66,2.47-3.9l.06.04Z"/><path class="cls-4" d="M400.72,215.44c.92-.19,2.04-.34,3.23.12.41.19.85.4,1.13.71.55.54.81,1.25.9,1.86.1.62.1,1.17.09,1.7,0,.47.02.92.06,1.36.06.55.11,1.01.19,1.66.02.18-.1.21-.3.12-.2-.09-.51-.3-.68-.63-.55-1.16-.84-2.36-1.07-3.28-.06-.29-.2-.51-.37-.68-.15-.18-.32-.28-.48-.4-.29-.18-.8-.34-1.47-.22-.4.06-.83.17-1.25.33-.64.25-1.3.53-1.89.94-.46.32-.82.77-1.24,1.18-.09.09-.17.19-.28.27-.39.28-.65.2-1.08-.38-.09-.12-.19-.23-.26-.33-.22-.31-.38-.97-.18-1.24.53-.94,1.43-1.56,2.44-2.12.75-.41,1.58-.75,2.52-1.02l.02.06Z"/><path class="cls-4" d="M476.78,156.05c.76,2.08,1.54,4.15,2.35,6.21.29.75.66,1.48.95,2.23,1.05,2.65,2.02,5.34,3.05,8.01.45,1.19.98,2.35,1.46,3.51l.89,2.26c.26.77.45,1.57.65,2.36.12.5-.03.48-.4.18-.36-.31-1.02-.88-1.57-1.66-1.74-2.83-2.97-5.88-4.15-8.99-.7-1.86-1.6-3.73-2.4-5.6-.87-2.06-1.7-4.15-2.53-6.23l-1.49-3.86c-.73-1.96-1.45-3.94-2.17-5.88-.57-1.51-1.25-2.95-1.84-4.44-.13-.33-.28-.64-.4-.98-.45-1.24-.36-1.71.14-2.16.11-.1.21-.22.32-.29.34-.23.98.13,1.4.99,1.26,2.56,2.31,5.32,3.4,8.09.79,2.07,1.59,4.15,2.39,6.23l-.06.03Z"/><path class="cls-4" d="M477.46,162.46l2.17,8.8c.27,1.07.62,2.12.88,3.19.45,1.89.88,3.79,1.3,5.7.21.95.41,1.91.57,2.89l.13.76c.06.35.11.72.16,1.08.04.36.05.71,0,1.03-.04.15-.09.29-.17.42,0,.2-.19.22-.3.31-.07.05-.15.08-.21.13-.55.2-1.18.33-1.81.43l-1.29.24c-.82.16-1.64.28-2.45.42-1.09.18-2.17.4-3.27.51-.55.06-1.1.11-1.66.15-.55.05-1.13-.06-1.69-.08-.71-.08-.62-.19-.1-.58.33-.26.7-.55,1.08-.84.45-.31,1-.56,1.6-.75,1.38-.44,2.78-.75,4.17-1.1.7-.18,1.39-.34,2.1-.47l.52-.11.25-.05s.02,0,.02,0c.03.01.06.02.08.01.09.04.11,0,.12-.03.02-.05.04-.05.04-.19-.14-.77-.28-1.54-.42-2.31-.43-2.66-1.31-5.33-2-8.01l-2.25-8.84-1.39-5.45c-.72-2.75-1.39-5.52-2.17-8.22-.61-2.1-1.36-4.13-2.03-6.2-.15-.46-.32-.89-.42-1.37-.2-.87-.29-1.46-.24-1.9.09-.45.26-.74.53-1,.12-.12.23-.26.35-.34.2-.14.44-.05.73.21.28.26.66.69.9,1.3.84,1.77,1.44,3.65,2.07,5.56.62,1.91,1.19,3.87,1.76,5.83.83,2.92,1.62,5.86,2.42,8.81l-.07.02Z"/><path class="cls-4" d="M465.55,170.83c-.64,2.97-1.23,5.97-1.79,8.97-.21,1.1-.34,2.2-.55,3.3-.76,3.86-1.57,7.72-2.43,11.58-.35,1.71-.81,3.42-1.19,5.11-.56,2.16-1.01,4.37-2.08,6.39-.37.61-.27.54-.31-.08-.1-.64-.2-1.78,0-3.04l.54-3.34.51-3.34c.15-1.12.39-2.22.63-3.33.24-1.11.48-2.22.73-3.33.61-2.66.9-5.5,1.36-8.26.5-3.04,1.03-6.08,1.59-9.11.34-1.87.7-3.74,1.08-5.6.55-2.83,1.23-5.65,1.88-8.44.53-2.17.92-4.33,1.51-6.48.13-.47.2-.95.38-1.42.67-1.71,1.07-2.18,1.82-2.31.17-.03.35-.08.5-.08.51.02.67.87.43,2.16-.75,3.8-1.79,7.68-2.62,11.69-.66,2.96-1.35,5.95-1.92,8.96h-.07Z"/><path class="cls-4" d="M469.31,166.56c-.28,2.6-.55,5.21-.8,7.82-.09.95-.11,1.91-.2,2.86-.29,3.35-.75,6.7-1.06,10.06-.13,1.49-.25,2.99-.35,4.47-.09,1.9-.31,3.81-.58,5.7-.09.59-.15.51-.28,0-.11-.51-.36-1.44-.48-2.55-.11-.98-.14-1.96-.16-2.93l-.04-2.93c.03-1.95.15-3.91.33-5.86.2-2.34.28-4.79.46-7.18.21-2.63.45-5.27.69-7.9l.45-4.86c.22-2.45.47-4.91.66-7.35.15-1.89.16-3.76.25-5.64.02-.41.01-.82.07-1.23.09-.77.18-1.27.34-1.62.19-.34.39-.53.64-.67.11-.07.22-.16.32-.19.17-.06.3.07.45.37.14.29.32.75.33,1.32.16,1.7.1,3.42.05,5.17-.07,1.75-.13,3.52-.29,5.28-.24,2.62-.48,5.26-.73,7.89h-.06Z"/><path class="cls-4" d="M452.11,132.18c3.11,1.5,6.21,3,9.34,4.45,1.14.53,2.32.98,3.45,1.51l2.39,1.11,1.2.55,1.64.73.57.44c.21.12.35.33.38.57.1.46,0,1.01-.12,1.54l-.17.72-.14.5-.29.99c-.39,1.3-.81,2.59-1.27,3.86-.68,1.87-1.3,3.77-2.05,5.6-.47,1.18-.95,2.36-1.53,3.51-.61,1.13-1.39,2.21-2.45,3.04-.61.54-.49.47-.23-.15.14-.31.15-.85.23-1.44.04-.3.04-.63.09-.96.06-.33.13-.66.22-1,1.72-4.65,3.18-9.54,4.83-14.31l.09-.31c.02-.06.03-.06.04-.1.03-.06.05-.12.07-.19.01-.06.06-.15.02-.2-.05-.03-.12-.06-.18-.1l-.31-.14-.78-.33-1.56-.65c-1.04-.43-2.09-.87-3.11-1.33-3.18-1.42-6.34-2.9-9.49-4.38l-5.82-2.73c-2.94-1.36-5.87-2.8-8.81-4.1-2.29-1.01-4.6-1.86-6.89-2.78-.51-.2-1.01-.37-1.5-.62-.91-.45-1.5-.76-1.86-1.11-.33-.4-.48-.72-.58-1.05-.04-.15-.12-.3-.14-.41-.03-.19.18-.26.61-.32.43-.06,1.1-.12,1.81.13,2.19.55,4.28,1.42,6.43,2.27,2.13.87,4.27,1.8,6.41,2.75,3.18,1.4,6.32,2.93,9.48,4.38l-.03.07Z"/><path class="cls-4" d="M356.93,172.18c-4.26,3.6-8.38,7.43-11.82,11.68l-.93,1.17-.76,1.21c-.54.77-.92,1.69-1.38,2.53-1.53,3.09-2.59,6.5-3.41,9.97-.82,3.48-1.41,7.04-1.79,10.62-.37,3.18-.56,6.41-.58,9.6.01,4.1.04,8.2-.16,12.32-.15,1.29-.35,1.14-.89.09-.51-1.05-1.37-3.03-1.68-5.43-.48-4.25-.42-8.53-.24-12.81.18-4.28.8-8.56,1.76-12.8.3-1.27.6-2.54.9-3.83.37-1.28.65-2.58,1.08-3.86.75-2.58,1.79-5.13,3.14-7.53l1.25-1.93,1.37-1.74c.89-1.18,1.92-2.21,2.88-3.31.99-1.07,2.03-2.07,3.05-3.11l3.17-2.96c2.66-2.35,5.37-4.65,8.17-6.81,4.22-3.31,8.63-6.4,13.08-9.33,3.47-2.26,6.86-4.52,10.54-6.46.82-.41,1.61-.84,2.45-1.24,3.22-1.31,4.49-1.21,5.37-.58.2.15.46.29.59.45.22.28.03.65-.47,1.05-.25.2-.58.41-.97.63-.2.1-.41.21-.64.32-.23.13-.48.27-.74.4-.77.43-1.58.73-2.36,1.17-.79.42-1.58.84-2.37,1.26-1.56.93-3.16,1.79-4.73,2.79-3.16,1.91-6.3,4.01-9.41,6.17-4.6,3.23-9.11,6.65-13.38,10.33l-.06-.06Z"/><path class="cls-4" d="M346.71,133.77c-8,4.98-15.65,10.56-22.38,17.07-2.42,2.4-4.76,4.92-6.78,7.58-3.67,4.66-6.73,9.94-9.49,15.34-2.75,5.42-5.16,11.03-7.25,16.76-1.85,5.08-3.5,10.29-4.75,15.51-.84,3.35-1.45,6.74-2.09,10.12-.51,3.39-1.14,6.79-1.27,10.2-.19,2.13-.41,1.9-.94.07-.14-.46-.27-1.02-.43-1.67-.14-.65-.21-1.38-.32-2.19-.08-.81-.23-1.71-.21-2.63.02-.93.06-1.91.15-2.94.06-.91.21-1.8.32-2.69.12-.9.24-1.79.39-2.68.35-1.77.7-3.53,1.08-5.29.43-1.75.84-3.5,1.3-5.24.49-1.73.97-3.46,1.49-5.18,2.08-6.88,4.74-13.6,7.87-20.13,1.92-3.88,3.84-7.86,6.1-11.72.57-.96,1.09-1.95,1.71-2.89l1.85-2.83c.6-.95,1.35-1.82,2.01-2.74l1.03-1.35,1.09-1.28c6.52-7.37,14.21-13.49,22.24-18.94,4.95-3.35,10.08-6.41,15.31-9.27,3.97-2.16,8.01-4.18,12.14-6.04,2.06-.93,4.14-1.82,6.25-2.65,1.06-.41,2.11-.81,3.2-1.18l.86-.28c.38-.11.76-.23,1.15-.31.38-.09.76-.16,1.12-.17.36,0,.69.02,1.03.15.39.4.65.81.82,1.4.18.56.28,1.2.39,1.75l.5,2.57c.34,1.66.73,3.3,1.2,4.91.92,3.22,2.12,6.33,3.6,9.3.65,1.31,1.39,2.53,2.14,3.79,1.43,2.31,2.48,3.75,3.12,4.85.67,1.08.92,1.83.99,2.58.03.34.12.76.07,1.02-.08.45-.61.35-1.52-.25-.9-.6-2.14-1.73-3.48-3.42-3.98-4.98-6.82-11.06-8.55-17.43-.44-1.59-.81-3.21-1.13-4.81l-.45-2.32-.02-.1h0s-.01-.01-.01-.01c-.01,0-.02.01-.02.02.15-.05-.38.12-.7.24l-1.08.39c-1.45.54-2.92,1.14-4.37,1.77-8.64,3.79-17.14,8.24-25.18,13.31l-.06-.07Z"/><path class="cls-4" d="M452.93,191.48c-1.17,2.95-2.39,5.88-3.64,8.82-.63,1.47-1.26,2.93-1.95,4.41l-.53,1.11-.41.79c-.17.3-.35.63-.54.92-.38.6-.83,1.04-1.37,1.26-.3.15-.58.01-.87-.03-.29-.07-.58-.11-.87-.19l-2.43-1.4-1.77-.98c-1.18-.65-2.37-1.29-3.57-1.92-2.39-1.27-4.81-2.49-7.23-3.71-3.84-1.92-7.72-3.73-11.58-5.59-5.94-2.87-11.91-5.7-17.89-8.48l-9-4.12c-1.5-.68-3.01-1.36-4.52-2l-2.27-.97-1.14-.48-1.42-.56c-.3-.19-.65-.31-.87-.57-.23-.27-.34-.62-.38-.97-.06-.35-.03-.72.01-1.08.02-.18.05-.37.09-.55.02-.14.06-.26.09-.39.24-1.01.56-1.94.89-2.87,1.17-3.21,2.5-6.31,3.82-9.42,1.32-3.09,2.64-6.18,3.95-9.24,3.37-7.87,6.4-15.87,9.23-23.82.39-1.26.55-1.81.66-1.76.1.05.15.71.17,1.87-.03,1.15.25,2.91-.16,4.86-.31,1.97-.86,4.23-1.68,6.59-2.31,6.39-4.97,12.57-7.64,18.74-1.35,3.07-2.72,6.14-4.01,9.21-.64,1.53-1.27,3.07-1.8,4.59-.26.75-.51,1.52-.66,2.2-.03.06-.07.23.06.24,0,.03.02.02.04.03l.23.1.72.31,1.41.63,2.8,1.28c1.86.85,3.73,1.71,5.61,2.57,9.58,4.46,19.63,8.89,29.37,13.57,3.65,1.75,7.29,3.54,10.91,5.37,1.81.91,3.61,1.86,5.41,2.79l2.69,1.45c.45.24.89.49,1.34.74l.84.49c.09.04.17.1.25.14.04.02.08.06.13.06.05-.02.08-.05.11-.09.12-.15.21-.32.31-.5l.19-.38.29-.62.57-1.27c.75-1.71,1.47-3.45,2.18-5.19,2.7-6.78,5.39-13.57,8.09-20.34,1.86-4.71,3.75-9.43,5.69-14.12.98-2.34,1.96-4.68,2.94-7.01l1.51-3.48.78-1.73.38-.83c.09-.17.14-.35.25-.52l.16-.36c.02-.06.07-.12.06-.18-.04-.05-.09-.09-.15-.13-.22-.15-.45-.27-.68-.4l-1.29-.67-1.42-.7c-.95-.45-1.91-.91-2.86-1.36-1.91-.89-3.83-1.75-5.76-2.59-3.85-1.68-7.72-3.31-11.6-4.91-1.72-.69-3.4-1.37-5.13-2.06-6.41-2.61-8.39-3.54-9.45-4.94-.25-.31-.6-.65-.72-.89-.42-.81,2.5-.49,7.31,1.27,5.8,2.09,11.63,4.44,17.49,6.97,2.93,1.27,5.86,2.58,8.8,3.95,1.47.69,2.93,1.39,4.41,2.13l1.11.57.57.33,1.02.62c.67.42,1.28.89,1.54,1.47v.26s0,.07,0,.07v.03c-.1.04.14-.03.12-.02v.02s-.01.12-.01.12l-.04.49-.09.97c-.24.61-.64,1.32-.88,1.86l-.44,1c-.29.67-.58,1.35-.88,2.02-.58,1.36-1.16,2.72-1.74,4.09-4.55,10.89-8.83,21.99-13.17,33.07l-.08-.02Z"/><path class="cls-4" d="M428.13,129.8s.04-.22.07-.35c.02-.16.02-.35.03-.53,0-.38-.02-.77-.08-1.18-.11-.82-.29-1.66-.53-2.5-.18-.61-.45-1.19-.66-1.79-.19-.52-.39-1.05-.62-1.55-.11-.27-.23-.47-.34-.68-.11-.21-.28-.42-.41-.65-.62-.87-1.42-1.69-2.27-2.45-.76-.68-1.62-1.24-2.45-1.82-1.09-.71-2.23-1.32-3.27-2.09-.29-.37-.29-.31.15-.5.43-.17,1.28-.36,2.07-.12,1.34.52,2.66,1.09,3.82,1.94,1.15.84,2.25,1.79,3.19,2.96.27.36.57.7.84,1.1.26.37.56.86.74,1.23.41.8.79,1.59,1.09,2.42.64,1.82,1.17,3.67,1.21,5.74,0,.3,0,.6-.06.92-.02.29-.14.72-.28,1.08-.31.72-.92,1.25-1.64,1.49l-.37.05c-.61.08-1.24-.11-1.72-.51-.22-.22-.46-.42-.63-.69-.18-.25-.28-.44-.4-.66-.44-.85-.71-1.68-1.02-2.49-.24-.62-.5-1.22-.79-1.78-.14-.28-.29-.56-.45-.82-.15-.28-.29-.43-.46-.63-.15-.16-.33-.28-.5-.42-.66-.48-.87-.72-.81-1.4.01-.15,0-.31.02-.45.06-.45.68-.74,1.59-.36.66.29,1.31.76,1.83,1.4.54.71.78,1.24,1.08,1.84.55,1.17.96,2.36,1.41,3.35.11.22.22.46.33.63.05.1.12.2.14.23-.01,0,0,0,0,0,0,.01,0,.04.02.04.02.02.06,0,.08-.03l.06.02Z"/><path class="cls-4" d="M355.78,236.97c2-2.76,3.96-5.69,6.21-8.48,2.25-2.77,4.78-5.46,7.92-7.51,1.13-.75,2.34-1.41,3.59-1.97,1.25-.52,2.5-.9,3.76-1.33,4.5-1.26,9.25-1.64,13.86-1.03,4.61.61,9.06,2.13,13.05,4.41,3.54,2.02,6.78,4.54,9.64,7.36l1.36,1.38c.46.46.85.98,1.27,1.46l1.23,1.51c.38.53.73,1.07,1.1,1.6.36.54.73,1.07,1.06,1.62.3.58.65,1.12.9,1.72.26.59.58,1.15.78,1.77.22.61.39,1.24.58,1.85.44,1.54.35,1.33-.54.28-.45-.52-1.13-1.23-1.9-2.08-.4-.42-.86-.85-1.28-1.34-.4-.5-.78-1.06-1.24-1.6-3.04-3.92-6.45-7.54-10.48-10.38-.51-.35-.98-.75-1.51-1.05l-1.58-.95c-1.03-.69-2.17-1.15-3.26-1.71l-.83-.41-.86-.33-1.72-.68c-.57-.26-1.17-.39-1.76-.56l-1.78-.51c-5.78-1.41-12.16-.6-17.83,1.58-3.07,1.11-5.74,3.1-8.11,5.49-2.38,2.38-4.44,5.15-6.45,7.98-1.38,1.93-2.69,3.86-4.21,5.82-.46.57-1.17.94-1.72,1.11-.56.17-1.1.28-1.62.34-1.05.13-2.05.14-3.04.14-3.34-.04-6.59-.41-9.8-.56-.8-.03-1.6-.06-2.38-.04-.39.01-.78.03-1.15.06-.28.02-.47.05-.71.11-.22.07-.45.13-.61.3-.18.17-.16.43-.09.65.06.22.19.42.31.62.06.1.14.19.2.28l.33.41c1.54,1.83,3.51,3.39,5.38,4.99,1.9,1.59,3.83,3.18,5.68,4.9.82.76,1.62,1.51,2.39,2.35,2.85,3.14,3.27,4.75,2.93,5.87-.08.26-.14.58-.26.74-.45.53-1.32-.75-3.15-2.87-2.78-3.17-6.3-5.99-9.82-9-1.78-1.51-3.52-3.05-5.33-4.93l-.33-.38-.17-.2c-.1-.08-.17-.23-.26-.34-.16-.24-.34-.48-.49-.72l-.41-.75c-.22-.51-.33-1.03-.38-1.53-.03-.5.11-.99.29-1.47.46-.93,1.31-1.54,2.39-1.88.25-.11.54-.16.83-.21.28-.04.58-.12.85-.14.4-.03.7-.06,1.04-.07,3.36-.09,6.38.27,9.43.45,1.51.1,3,.17,4.42.15.7-.02,1.39-.07,1.97-.17.28-.05.55-.12.69-.18l.1-.04s0-.02.02-.01c.42-.56.97-1.29,1.44-1.96l.07.04Z"/><path class="cls-4" d="M362.96,270.79c.08-.54.18-1.08.32-1.6.12-.53.29-1.03.46-1.53.15-.5.39-1.02.6-1.52.25-.47.47-.97.76-1.41.38-.67.74-1.33,1.19-1.94.81-1.06,1.72-2.01,2.68-2.91.98-.88,2.06-1.64,3.19-2.31,1.01-.59,2.02-1.17,3.12-1.59,1.39-.5,2.98-.88,4.46-.35.46.13.35.38-.03.73-.19.18-.44.39-.72.61-.14.09-.28.24-.43.34-.15.09-.31.17-.47.22-.3.07-.58.24-.86.35-.28.11-.56.26-.83.42-.55.26-1.1.56-1.64.87-1.09.63-2.12,1.43-3.18,2.23-1.32.93-2.29,2.35-3.2,3.7-.51.74-.94,1.52-1.31,2.31-.17.39-.33.79-.46,1.23-.15.43-.26.86-.36,1.3-.23,1.07-.39,2.17-.3,3.25.09,1.64.61,3.26,1.53,4.64.73,1.07,1.77,1.87,2.81,2.62.22.17.48.3.71.47.42.32.68.55.79.83.09.3.04.61-.09,1-.06.18-.11.37-.18.53-.13.27-.35.44-.67.52-.32.07-.74.08-1.14-.13-2.38-1.16-4.65-3.28-5.89-6.16-.92-2.11-1.21-4.53-.91-6.73h.08Z"/><path class="cls-4" d="M429.22,299.96c1.71-.92,3.25-2.34,4.51-3.93.22-.28.42-.58.58-.91.17-.32.35-.64.51-.97,1.24-2.31,1.82-5.07,1.75-7.8-.07-1.22-.37-2.41-.76-3.54-.49-1.46-1.22-2.87-2.25-4.12-.31-.41-.21-.44.23-.28.22.08.54.2.93.37.36.19.78.45,1.19.79,1.35,1.25,2.52,2.9,2.87,4.74.44,1.81.55,3.7.24,5.51-.38,2.16-.79,4.42-1.85,6.45-1.19,2.26-2.84,4.08-4.84,5.55-1.2.92-2.57,1.61-3.97,2.17-2.14.82-4.42,1.11-6.64,1.15-1.72.02-3.44.03-5.15-.21-.37-.07-.74-.12-1.11-.21-1.36-.36-1.7-.78-1.68-1.68,0-.21,0-.42.03-.62.12-.67.82-1.03,1.76-.95,2.8.12,5.48.56,8.11.22,1.95-.2,3.82-.79,5.5-1.79l.05.07Z"/><path class="cls-4" d="M307.16,368.12c4.31-3.27,8.55-6.67,12.49-10.29.98-.91,1.95-1.83,2.84-2.79.47-.47.87-.95,1.29-1.45l1.2-1.57c.39-.53.81-1.03,1.19-1.59l1.1-1.67,1.1-1.67,1.02-1.74,1.48-2.55,1.36-2.62c.93-1.73,1.77-3.52,2.63-5.29,3.02-6.26,5.71-12.71,8.13-19.25,2.37-6.56,4.46-13.22,6.19-19.98,1.57-5.99,2.63-12.13,3.3-18.21.15-1.96.41-3.91.43-5.87l.11-2.94c0-.24.03-.5.02-.73l-.03-.64c-.06-.43-.12-.87-.24-1.3-.22-.87-.54-1.73-.96-2.57-.39-.86-.83-1.7-1.34-2.52-.5-.83-1.04-1.63-1.61-2.43-.55-.81-1.04-1.68-1.6-2.5-1.34-2.1-1.29-1.72.4-.42.81.68,2.2,1.46,3.5,2.81.66.66,1.37,1.4,2.05,2.28.35.43.66.92,1.01,1.41.29.52.57,1.07.82,1.67.43,1.06.76,2.19.9,3.42.02.3.05.63.06.92v.78s-.04,1.56-.04,1.56l-.05,3.11-.3,3.08c-.11,1.03-.19,2.06-.32,3.08l-.47,3.05c-.16,1.02-.3,2.04-.49,3.05l-.61,3.02c-1.65,8.05-3.94,15.94-6.7,23.69-3.33,9.25-6.95,18.83-11.55,27.82l-1.94,3.68-2.09,3.61c-.67,1.22-1.5,2.35-2.25,3.53-.73,1.19-1.62,2.29-2.47,3.41-1.7,2.29-3.78,4.24-5.81,6.11-2.06,1.87-4.17,3.66-6.31,5.4-5.28,4.29-10.75,8.32-16.33,12.19-4.23,2.92-8.56,5.73-13,8.35-4.47,2.58-8.96,5.11-13.92,6.81l-1.48.43c-.51.11-1.02.23-1.54.31-1.03.13-2.27.17-3.31-.22-2.11-.68-3.77-1.96-5.35-3.23-3.08-2.67-5.52-5.89-7.62-9.3-.45-.76-.92-1.5-1.33-2.28-.42-.77-.84-1.54-1.2-2.37-1.39-3.01-1.99-5.16-2.23-6.69-.09-.78-.12-1.39-.09-1.91.06-.53.17-.95.32-1.33.14-.34.25-.78.41-.98.56-.66,1.28,1.82,2.9,6.03,2.48,6.21,6.42,12.25,11.31,16.86,1.19,1.14,2.63,2.03,3.88,2.41l.46.14.43.02.21.02.26-.03.53-.05c.36-.05.76-.16,1.15-.22.39-.1.8-.23,1.2-.34,3.24-1.06,6.5-2.69,9.68-4.43,4.73-2.6,9.35-5.51,13.88-8.55,4.54-3.04,8.99-6.24,13.32-9.56l.06.05Z"/><path class="cls-4" d="M410.98,140.05s.04.01.07.01c.04-.01,0,.03.15-.06.24-.15.51-.37.77-.64.52-.53,1.02-1.2,1.46-1.9.33-.52.56-1.09.85-1.64.51-.97,1-1.98,1.43-3,.21-.51.41-1.03.57-1.53.07-.24.15-.51.17-.69.03-.24.05-.53.05-.79.01-.96-.1-1.94-.27-2.9-.16-1.26-.53-2.5-.53-3.88-.01-.42.02-.38.29-.1.14.14.34.33.61.55.28.22.55.51.73.86,1.46,2.37,2.29,5.42.95,8.53-.64,1.59-1.16,3.23-1.98,4.76-.45.84-.95,1.66-1.54,2.44-.6.78-1.25,1.55-2.21,2.17-.55.34-1.18.57-1.79.59-.63.04-1.21-.18-1.72-.49-.31-.2-.57-.49-.7-.85-.2-.55-.19-1.17-.08-1.77l.1-.44.09-.34c.06-.22.14-.43.21-.64.3-.83.63-1.61.93-2.4.46-1.22.79-2.45,1.08-3.64.06-.26.1-.52.17-.78.26-.95.4-1.2.89-1.41.11-.05.22-.11.32-.14.35-.12.69.36.74,1.25.09,1.3-.19,2.54-.47,3.75-.3,1.2-.67,2.37-.99,3.48-.09.31-.17.61-.24.9-.06.28-.17.64-.15.56-.01,0-.04.04-.03.07,0,.02.02.04.05.04v.07Z"/><path class="cls-4" d="M234.21,396.61c.23.58.53,1.1.85,1.5.16.2.32.35.47.45.06.06.12.09.22.1.14.03.23-.1.28-.21.03-.05.05-.11.06-.17,0-.11.01-.34,0-.53-.02-.4-.08-.84-.15-1.28-.15-.89-.33-1.8-.46-2.82-.03-.22-.04-.47-.06-.73,0-.29.02-.58.1-.87.15-.57.48-1.07.84-1.44.47-.47.99-.8,1.53-.99.56-.15,1.12-.21,1.66-.29.34-.04.35.06.21.4-.15.32-.41,1.02-.77,1.56l-.23.33c-.09.08-.17.15-.25.23-.16.15-.27.31-.38.42-.23.22-.29.33-.33.45-.05.01-.01.59.06,1.06.06.5.15,1.04.19,1.6.05.67.18,1.36.26,2.11.08.59.13,2.11-.66,2.81-.84.81-2.26.8-3.25.26-.88-.51-1.4-1.2-1.85-1.89-.55-.85-.91-1.75-1.2-2.66-.43-1.38-.71-2.78-.71-4.3.04-1.17.17-2.28.55-3.39.09-.24.17-.49.29-.73.51-.87,1.01-1.05,1.54-.72.11.06.22.12.3.18.13.11.16.29.22.52.07.25.03.42-.02.68-.21.72-.41,1.54-.51,2.35-.05.4-.08.8-.07,1.17,0,.36.06.73.13,1.15.23,1.23.64,2.53,1.2,3.65l-.05.03Z"/><path class="cls-4" d="M232.16,403.41l-.16.03-.98-.1-.99-.33c-.32-.15-.64-.35-.95-.52-.16-.08-.31-.19-.43-.29l-.29-.24c-.71-.63-1.31-1.3-1.82-2.03-.38-.53-.78-1.06-1.08-1.64-.51-1.04-.91-2.13-1.08-3.34-.08-.59-.11-1.28-.01-1.84.08-.58.21-1.13.36-1.67.28-.95.58-1.88.95-2.77.22-.58.5-1.13.83-1.65.32-.52.72-1.01,1.26-1.37.51-.11.42-.1.6.39.11.26.15.54.22.88.07.34.08.69-.04.99-.33,1.1-.79,2.08-1.13,3.1-.17.51-.32,1.01-.44,1.52-.13.5-.2,1.03-.26,1.44-.08,1.16.59,2.45,1.27,3.58.38.63.81,1.23,1.3,1.77.25.25.5.52.77.73.19.17.29.25.47.35.13.08.27.13.43.18.16.02.36.09.51-.02.14-.11.15-.29.16-.46,0-.19-.02-.38-.05-.58l-.06-.34-.12-.55c-.18-.75-.35-1.5-.53-2.24-.27-1.18-.67-2.36-.62-3.77,0-.31.07-.62.17-.93.21-.58.49-.93.81-1.06.28-.15.54-.14.81-.05.12.04.25.07.34.13.31.19.3.71.42,1.27-.02.38.13.77.15,1.15.04.39.1.82.18,1.27.17.91.41,1.9.68,2.94l.29,1.21c.14.65.32,1.54.32,2.25,0,.74-.2,1.33-.57,1.82-.19.24-.45.47-.74.62-.27.17-.6.17-.91.25l-.03-.06Z"/><path class="cls-4" d="M220.66,399.54c-.73-1.24-1.35-2.55-1.72-4.08-.07-.28-.12-.59-.18-.88-.04-.31-.06-.67-.03-.97.28-1.97,1-3.57,1.79-5.15.35-.7.7-1.39,1.05-2.08.52-.83.96-1.79,1.96-2.25.29-.16.44.03.57.45.07.21.13.49.2.78.03.15.07.32.07.46-.01.13-.04.26-.09.38-.18.42-.36.83-.52,1.25-.18.41-.4.8-.6,1.2-.39.81-.8,1.61-1.23,2.43-.26.49-.41,1.03-.51,1.56-.09.51-.15,1.11-.11,1.45.07.95.54,2.14,1.15,3.2.37.66.8,1.3,1.27,1.9.35.45.79.92,1,1.13.25.21.55.53.9.43.27-.07.42-.36.44-.63.03-.28-.02-.5-.06-.71,0-.19-.04-.39-.03-.61.02-.39.1-.72.3-.92.24-.21.53-.29.92-.24.17.02.33.06.47.12.23.11.4.32.61.41.1.06.2.15.29.21.1.11.12.16.15.3.04.17.07.37.1.59l.03.34v.18c.01.09,0,.19,0,.29-.03.8-.21,1.64-.61,2.29-.39.65-1.03,1.15-1.77,1.34-.76.2-1.49.05-2.23-.27l-.78-.55c-.26-.19-.46-.41-.69-.61-.1-.1-.24-.22-.32-.3l-.19-.21c-.12-.14-.26-.28-.37-.43-.47-.58-.9-1.17-1.29-1.78l.05-.04Z"/><path class="cls-4" d="M60.34,173.11c-.03.07-.03.17.06.2.02,0,.04.02.06.03.07.03.26.09.41.12.31.08.65.15.99.21,1.4.25,2.91.38,4.43.48,3.04.2,6.14.27,9.23.33,2.26.04,4.53-.01,6.8.04,8,.2,16.03.53,24.03,1.48,3.55.43,7.12.91,10.62,1.61,2.24.46,4.51.96,6.69,1.78,1.08.43,2.19.82,3.19,1.44,1,.62,1.96,1.32,2.82,2.12,1.04,1.04.81.97-.39.67-.61-.14-1.51-.25-2.54-.37-.51-.07-1.09-.09-1.65-.2-.55-.13-1.12-.29-1.72-.47-1.04-.34-2.12-.6-3.18-.9-1.06-.3-2.15-.55-3.24-.8-2.19-.47-4.4-.87-6.65-1.19-4.48-.65-9.04-1.11-13.64-1.56-5.51-.52-11.28-.44-16.96-.53-3.13-.05-6.26-.1-9.4-.2-3.16-.13-6.28-.2-9.56-.82-.25-.05-.51-.11-.77-.18-.13-.03-.26-.07-.39-.12-.17-.05-.35-.11-.52-.19-.67-.27-1.36-.64-1.63-1.29-.11-.33-.21-.65-.19-1.02,0-.18-.02-.36,0-.54l.03-.47c.04-.5.08-.99.13-1.48.21-1.95.49-3.86.78-5.78.89-5.8,2.01-11.57,3.35-17.25.52-2.21,1.05-4.4,1.69-6.57.68-2.17,1.36-4.33,2.62-6.46.16-.29.35-.57.56-.85.24-.37.6-.72.95-1.07l.36-.25.09-.06c.07.08.08,0,.12,0,.07-.03.14-.06.21-.08l.21-.08.23-.02c.15-.02.3-.02.46,0,.38.02.71.09,1.04.14.22.04.42.09.62.13.39.09.73.17,1.04.26.62.17,1.11.34,1.5.51.79.33,1.18.71,1.48,1.19.14.22.34.43.42.63.15.33-.2.58-.93.71-.73.14-1.81.07-3.13-.11-.54-.07-1.13-.15-1.6-.2-.11,0-.19,0-.24.02-.06,0-.12.04-.15.11-.07.09-.02.09-.27.45-.17.32-.36.63-.52.98-.33.69-.64,1.43-.92,2.21-.57,1.54-1.05,3.18-1.55,4.84-.96,3.33-1.79,6.78-2.54,10.27-.64,3.02-1.24,6.06-1.76,9.12-.24,1.53-.46,3.07-.66,4.6l-.27,2.29-.11,1.13-.07,1h-.08Z"/><path class="cls-4" d="M286.75,204.79c.56,2.71.91,5.49.87,8.32-.04,2.82-.46,5.67-1.44,8.39-.72,1.98-1.71,3.88-2.98,5.51-2.22,2.91-5.29,5.3-8.85,6.41-1.77.55-3.64.82-5.5.68-.93-.08-1.85-.23-2.74-.49-.86-.24-1.85-.62-2.62-1.17-1.38-.96-2.43-2.03-3.6-2.91-1.16-.88-2.38-1.62-3.69-2.16l-.64-.25-.76-.34c-.5-.26-.96-.57-1.39-.91-.85-.69-1.55-1.51-2.13-2.37-.29-.43-.55-.88-.79-1.34-.2-.48-.38-.96-.53-1.44-.32-.97-.44-1.99-.52-2.98,0-.63.04-.91.08-.9.06,0,.15.29.46.73.55.92,2.1,2.3,3.23,3.88.48.73,1.02,1.38,1.61,1.91.29.26.6.49.91.67.16.08.31.19.47.25l.54.23c2.02.79,3.93,2,5.51,3.35.8.66,1.52,1.34,2.21,1.88.34.27.67.51.99.68.32.2.61.3,1.06.44,1.62.55,3.38.71,5.14.46,2.11-.26,4.17-1.27,5.93-2.64,1.74-1.42,3.19-3.22,4.35-5.18,2.55-4.25,3.06-9.57,2.37-14.69-.4-3.17-1.21-6.31-2.26-9.36-1.63-4.6-3.76-9.15-6.55-13.1-.27-.37-.45-.59-.66-.82-.21-.22-.41-.43-.65-.56l-.12-.03s-.07.06-.1.09c-.05.08-.08.17-.12.26-.07.18-.12.35-.17.52l-.31,1.22c-.34,1.28-.64,2.57-.94,3.87-.18.81-.35,1.61-.53,2.43-.36,1.51-.62,2.5-.93,3.17-.34.66-.7,1-1.1,1.26-.18.12-.35.29-.48.35-.23.11-.36-.17-.51-.79-.16-.62-.2-1.55,0-2.69.31-2.03.69-4.09,1.16-6.16l.37-1.56.2-.79.11-.39c.03-.13.14-.46.2-.68.3-.97.62-2.01,1.1-2.72.23-.38.51-.59.8-.69l.44-.17.13-.05h.04s.02-.02.02-.02h0c-.03-.15,0-.04,0-.08h0s.07,0,.07,0c.09,0,.19-.03.28-.03l.68.17c.23.06.45.08.7.29.24.18.48.29.71.52l.7.72c.46.48.84,1.03,1.25,1.53l.67.93c.86,1.25,1.64,2.53,2.37,3.83,2.68,4.83,4.78,10.01,6.02,15.47l-.08.02Z"/><path class="cls-4" d="M322.55,240.54c-.14.15-.22.27-.3.4-.08.17-.12.42-.1.68.01.54.26,1.2.63,1.84.27.47.66.89,1.01,1.35,1.26,1.62,2.88,3.12,4.54,4.52.75.62,1.54,1.19,2.31,1.78.5.37,1.01.74,1.5,1.14.47.42.91.9,1.3,1.43.24.34.05.42-.36.39-.41-.04-1.1-.11-1.75-.4-1.06-.64-2.16-1.28-3.22-2-1.04-.75-2.06-1.55-3.01-2.45-1.14-1.09-2.48-2.05-3.58-3.34-.6-.71-1.17-1.49-1.57-2.43-.39-.93-.66-2.05-.33-3.22.16-.75.64-1.32,1.1-1.8.24-.22.49-.41.74-.6l.78-.47c1.6-.81,3.25-1.18,4.85-1.53,1.25-.28,2.46-.62,3.72-.84.28-.05.55-.13.83-.14,1.04-.08,1.38.14,1.61.88.05.17.12.34.14.51.09.57-.31,1.06-1.01,1.26-2.07.64-4.24.9-6.26,1.46-.75.19-1.46.43-2.1.71-.64.27-1.17.63-1.42.93l-.06-.04Z"/><path class="cls-4" d="M414.72,113.01c1.91,1.3,3.62,2.86,5.1,4.58,1.47,1.75,2.79,3.58,3.75,5.79.75,1.69.99,3.49.96,5.17-.04,1.49-.23,2.95-.55,4.37-.15.71-.35,1.41-.56,2.1-.24.68-.49,1.36-.79,2.03-.59,1.33-1.27,2.62-2.21,3.82-.47.59-1,1.17-1.69,1.65-.34.24-.74.44-1.18.59-.45.12-.96.18-1.45.07-.22-.03-.42-.12-.62-.21-.2-.08-.4-.18-.58-.36-.19-.16-.37-.33-.47-.56-.13-.22-.23-.44-.26-.65-.18-.87-.02-1.57.13-2.21.33-1.29.81-2.42,1.23-3.55.27-.72.52-1.44.73-2.15.23-.71.36-1.36.53-2.18.16-.78.38-1.53.6-2.25.1-.36.18-.71.22-1.06.05-.34.14-.71.08-1.07-.19-.9-.25-.82.32-.14.24.34.69.96.8,1.77.08.4.12.82.14,1.26.02.22.01.43.03.66-.02.21-.04.43-.06.66l-.1,1.15c-.03.36-.09.9-.17,1.31-.16.89-.48,1.66-.75,2.43-.56,1.5-1.23,3.01-1.44,4.2-.02.14-.05.29-.03.37v.15s.01.04.01.06c0,.02,0,.05,0,.03-.05.01-.11.04-.17.09-.03.03.08-.06.09-.09.05-.07,0-.04.03-.04.15.08.32.12.75-.13.41-.24.88-.74,1.28-1.28.41-.55.79-1.17,1.14-1.82,1.57-3.16,2.42-7.12,2.08-10.64-.12-.98-.3-1.83-.73-2.7-.42-.88-.93-1.76-1.52-2.6-1.16-1.69-2.56-3.23-4.12-4.57-1.93-1.64-4.12-2.99-6.49-3.82-1.8-.62-3.7-.96-5.61-1-1.94-.01-3.88.23-5.76.67-2.94.7-5.67,1.95-8.4,3.25-.6.3-1.18.59-1.79.88-1.13.53-1.9.85-2.49.95-.6.08-1.02,0-1.42-.23-.18-.1-.4-.19-.54-.31-.23-.2-.16-.52.16-.92.32-.41.87-.93,1.68-1.38,2.39-1.4,4.94-2.72,7.72-3.78,2.78-1.03,5.79-1.82,8.92-2.03,2.29-.19,4.78.03,7.07.66,2.31.63,4.48,1.66,6.43,2.95l-.03.06Z"/><path class="cls-4" d="M397.84,129.19c-1.19-.04-2.36-.13-3.53-.23-.43-.04-.85,0-1.28-.05l-1.12-.14c-.35-.04-.67-.09-1-.11-.65-.03-1.25,0-1.85.16-.53.16-1.04.5-1.55.88-.33.25-.68.48-1.05.71-.18.11-.38.21-.58.3-.19.1-.47.06-.71.08-.34-.05-.31-.08-.29-.46.01-.27.02-.55.03-.78.03-.28.14-.5.3-.68.29-.3.56-.62.88-.92.33-.27.69-.56,1.12-.83.84-.55,2.02-.94,3.04-.84.59.02,1.17.04,1.75.07.52.02,1.04.01,1.55.04,1.13.06,2.27.12,3.41.14.7,0,1.4.01,2.09-.02,1.05-.05,2.11-.1,3.13-.32.79-.16,1.5-.55,2.19-.88.15-.08.28-.18.43-.25.56-.25.77-.17,1.22.45.1.14.21.27.3.42.31.49.25,1.03-.21,1.41-1.36,1.07-3.04,1.47-4.66,1.7-1.21.17-2.42.17-3.62.19v-.07Z"/><path class="cls-4" d="M406.1,137.12v.12s-.02.01-.03.02c-.01,0-.01.03-.02.04-.01.03-.02.07-.02.11,0,.08.06.15.14.19.1.03.16.06.32,0,.26-.15.57-.36.86-.68.43-.44.78-1.04,1.17-1.62,1.35-2.06,2.39-4.62,2.53-7.03.05-1.11-.2-2.25-.53-3.37-.43-1.43-.92-2.97-.81-4.64.06-.52.1-.46.46-.13.36.33,1.18.85,1.67,1.62l.58,1.06.29.54.21.58c.28.79.53,1.62.7,2.5.17.88.24,1.82.17,2.76-.06.96-.34,1.82-.62,2.65-.74,1.95-1.39,3.97-2.64,5.77-.34.49-.74.96-1.19,1.41-.47.44-.98.87-1.68,1.18-.81.37-1.7.43-2.48.15-.82-.19-1.47-.82-1.74-1.58l-.12-.35c-.02-.12-.03-.25-.04-.38-.02-.25-.07-.5-.03-.75.04-.53.12-.82.22-1.2.19-.71.44-1.36.67-1.99.35-.96.75-1.88,1.03-2.78.14-.45.27-.91.29-1.29.05-.4,0-.91-.04-1.35-.17-1.44-.77-2.78-1.43-4.07-.15-.28-.31-.56-.46-.84-.52-1.08-.49-1.53.02-2.1.12-.13.22-.28.34-.38.39-.35,1.1-.14,1.72.63.89,1.16,1.57,2.53,2.05,4.05.24.76.41,1.56.5,2.39.05.41.07.84.08,1.26,0,.38-.05,1.07-.15,1.46-.28,1.32-.72,2.34-1.1,3.34-.39.98-.74,1.97-.85,2.72h-.07Z"/><path class="cls-4" d="M412.44,243.63c.4-.38.81-.73,1.24-1.08.47-.36.95-.7,1.46-.98,1.01-.58,2.08-.99,3.16-1.29,1.08-.29,2.17-.45,3.25-.52.54-.04,1.08-.05,1.62-.04h.1s.05,0,.01,0h0s.04,0,.04,0h.08s.17.04.17.04c.05-.05.08-.13.12-.2l.04-.06.17-.29c.11-.19.21-.39.34-.57.25-.36.48-.74.75-1.08.53-.69,1.1-1.34,1.74-1.92,1.11-1.04,2.37-1.9,3.73-2.6,1.36-.69,2.85-1.21,4.45-1.37,1.59-.17,3.3.07,4.79.84,1.47.77,2.68,2.1,3.28,3.6,1.09,2.68.76,5.57-.34,7.96-.7,1.54-1.74,2.97-3.15,3.98-1.38,1.04-3.19,1.55-4.84,1.29-.51-.22-.71-.33-.69-.37.02-.05.27-.07.66-.29.2-.15.43-.24.68-.37.25-.15.52-.3.78-.49.54-.38,1.08-.83,1.66-1.28,2.05-1.64,3.05-4.5,2.91-6.97-.05-1.24-.43-2.36-1.11-3.16-.68-.78-1.69-1.41-2.89-1.62-1.45-.25-3.17.15-4.69,1.01-1.54.84-2.95,2.01-4.1,3.34-.4.44-.74.92-1.07,1.4l-.22.37-.16.27-.18.37-.69,1.46c-.62-.06-1.24-.11-1.85-.14-.15,0-.32-.03-.44-.02h-.26c-.17-.01-.35,0-.52,0-.69.01-1.38.06-2.05.17-1.35.22-2.65.62-3.8,1.29-.99.57-1.93,1.42-2.78,2.33-.85.92-1.6,1.93-2.26,3.01-1.01,1.65-1.77,3.39-2.45,5.29-.73,1.88-1.38,3.89-2.91,5.64-.6.66-1.44,1.26-2.42,1.49-.9.17-1.85.25-2.75,0-1.82-.4-3.28-1.54-4.42-2.81-.49-.58-.96-1.15-1.33-1.82-1.36-2.48-1.09-3.67-.39-4.28.17-.15.34-.32.51-.38.29-.12.58.09.83.44.28.36.57.9.94,1.61.54,1.06,1.28,2.05,2.12,2.84.83.8,1.78,1.36,2.64,1.48.42.1.86.03,1.24-.05.26-.07.5-.23.8-.55.61-.65,1.18-1.81,1.66-3.06l1.1-3c.4-1.09.88-2.15,1.43-3.18,1.09-2.07,2.47-4.03,4.2-5.72l.06.05Z"/><path class="cls-4" d="M389.95,261.9c-.86.39-1.84.56-2.79.62-.95,0-1.9-.13-2.74-.42-.62-.19-1.23-.39-1.8-.7-2-1.11-3.42-2.99-4.18-4.98-.33-.89-.56-1.83-.62-2.76-.15-1.2.23-2.43.81-3.42.18-.31.2-.25.23.07.03.22.06.45.08.64.06.26.14.56.17.86.36,2.1,1.1,3.81,2.2,5.48.69.99,1.8,1.65,2.9,2.13,1.25.55,2.54.78,3.81.43.78-.19,1.54-.57,2.21-1.11,1.02-.79,1.93-1.85,2.56-3.05.48-.94.72-1.97.93-2.98.04-.22.05-.45.11-.68.18-.82.42-1.03,1.21-1.05.18,0,.36-.02.53-.01.57.03.98.51.97,1.25-.09,2.16-.94,4.35-2.35,6.26-1.04,1.41-2.43,2.7-4.21,3.49l-.03-.06Z"/><path class="cls-4" d="M368.55,289.4c.34,1.06.92,2.09,1.72,2.95.29.32.66.55.99.82,1.14,1,2.56,1.81,4.15,2.13.7.14,1.44.15,2.15.04.46-.05.92-.11,1.39-.18.23-.04.48-.03.73-.04.25-.02.49-.04.76-.06.33-.01.35.13.21.47-.15.32-.43,1-.97,1.43-.24.18-.51.3-.78.43-.27.12-.54.28-.83.33-.58.13-1.17.19-1.76.22-1.19.04-2.4-.21-3.48-.71-1.28-.58-2.66-1.1-3.76-2.04-1.2-1.01-2.19-2.27-2.86-3.67-.42-.86-.74-1.77-.91-2.71-.3-1.42-.21-2.88.04-4.27.21-1.08.42-2.17.87-3.19.1-.22.19-.45.31-.66.48-.78.87-.85,1.54-.54.16.07.32.14.46.23.48.3.65.86.51,1.4-.19.81-.44,1.54-.57,2.27-.14.73-.24,1.43-.3,2.14-.04,1.05.04,2.14.46,3.17l-.07.03Z"/><path class="cls-4" d="M390,308.94c2.06,1.07,4.41,1.73,6.77,1.89.86.04,1.73-.06,2.59-.15,3.05-.29,6.11-1.37,8.76-3.15,1.18-.79,2.18-1.82,3.13-2.85l.84-1.06.77-1.11c.52-.74,1.03-1.49,1.55-2.27.48-.42.49-.36.65.25.16.6.23,1.7-.18,2.83-1.71,3.82-5.07,6.8-8.92,8.38-2.3.94-4.77,1.81-7.34,2.01-2.83.19-5.63-.29-8.24-1.24-1.6-.61-3.13-1.39-4.52-2.37-2.12-1.46-3.94-3.32-5.45-5.35-1.19-1.56-2.31-3.18-3.17-4.98-.19-.39-.4-.78-.53-1.2-.57-1.55-.31-2.17.45-2.65.18-.11.35-.24.53-.32.6-.25,1.33.24,1.76,1.18,1.43,2.77,2.87,5.55,5.03,7.87,1.56,1.72,3.41,3.24,5.53,4.24l-.03.07Z"/><path class="cls-4" d="M439.61,267.26c.58-1.79.8-3.68.62-5.59-.02-.35-.09-.69-.17-1.04l-.23-1.03c-.51-2.45-1.56-4.84-3-7-.63-.97-1.43-1.82-2.26-2.61-.54-.5-1.12-.95-1.67-1.44-.58-.46-1.13-.94-1.62-1.57-.3-.41-.21-.47.31-.55.26-.04.63-.09,1.09-.14.43,0,.86.13,1.3.34,1.52.75,2.76,1.93,3.9,3.15,1.13,1.24,2.1,2.64,2.76,4.2.81,1.84,1.73,3.72,2.17,5.75.48,2.22.55,4.57.12,6.79-.23,1.38-.66,2.7-1.19,3.97-.8,1.93-1.92,3.69-3.14,5.33-.94,1.28-1.87,2.56-2.98,3.72-.24.26-.47.53-.74.75-.5.44-.88.66-1.23.68-.34.04-.64-.09-.98-.36-.16-.13-.33-.24-.46-.38-.44-.48-.33-1.21.22-1.87,1.66-1.95,3.39-3.82,4.75-6,1.03-1.6,1.85-3.32,2.36-5.13l.08.02Z"/><path class="cls-4" d="M280.39,344.34c4.28-2.77,8.37-5.83,11.76-9.46,1.21-1.34,2.26-2.8,3.17-4.3.79-1.33,1.53-2.86,2.26-4.33.72-1.49,1.43-2.99,2.11-4.51,1.36-3.03,2.65-6.1,3.81-9.22,1.03-2.76,1.93-5.59,2.66-8.41.94-3.64,1.65-7.27,2.44-10.95.2-1.16.27-1.02.49-.01.28,1,.86,2.96.67,5.21-.43,3.96-1.46,7.76-2.64,11.49-1.19,3.73-2.59,7.39-4.17,10.98-.93,2.16-1.88,4.35-2.84,6.56-.48,1.11-.97,2.21-1.5,3.32-.53,1.12-1.17,2.25-1.88,3.28-3.15,4.56-7.37,8-11.68,11.08-2.67,1.89-5.43,3.62-8.22,5.28-4.22,2.52-8.58,4.82-12.81,7.18-3.28,1.84-6.44,3.79-9.5,5.8-.68.44-1.3.92-1.96,1.37-2.44,1.7-3.04,2.12-4.12,1.98-.24-.02-.52,0-.74-.04-.36-.07-.46-.43-.24-1.11.11-.34.33-.67.61-1.08.3-.36.67-.79,1.12-1.17,2.68-2.33,5.63-4.12,8.64-5.91,3.01-1.77,6.09-3.45,9.16-5.15,4.54-2.53,9.09-5.07,13.37-7.93l.05.06Z"/><path class="cls-4" d="M146.57,239.08c.84,3.91,1.94,7.74,3.12,11.54,1.3,3.74,2.66,7.48,4.45,11.01,1.68,3.59,3.79,6.93,6,10.2l1.81,2.34c.62.77,1.17,1.59,1.86,2.3l1.99,2.2,1,1.09,1.04,1c4.14,3.84,9.34,6.5,14.69,8.59,9.52,3.66,19.77,5.45,30.02,6.55,10.28,1.07,20.65,1.39,31.02,1.31,9.21-.06,18.46-.53,27.59-1.11,5.87-.41,11.75-.83,17.63-1.24,2.94-.18,5.89-.4,8.85-.43,2.96-.02,5.93-.01,8.93.45,1.87.26,2.68.83,2.56.92-.12.12-1.03-.07-2.58.1-1.55.11-3.72.55-6.35.93-1.31.2-2.74.45-4.26.63-1.52.15-3.14.3-4.82.41-23.91,1.67-48.08,3.38-72.41,1.39-7.26-.62-14.67-1.46-22.05-2.93-7.36-1.48-14.73-3.58-21.5-7.06-3.7-1.94-7.23-4.31-10.25-7.29-1.43-1.52-2.84-3.03-4.2-4.61l-1.92-2.45-.96-1.23c-.3-.42-.58-.86-.87-1.29-4.71-6.83-8.25-14.43-10.68-22.29-3.13-9.66-4.71-19.67-6.63-29.47-.7-3.72-1.58-7.38-2.42-11.11-.84-3.7-1.71-7.38-2.8-10.98-1.08-3.59-2.4-7.11-4.18-10.34-.89-1.64-1.93-3.06-3.15-4.43-1.26-1.34-2.59-2.61-4.01-3.79-4.44-3.65-9.41-6.59-14.57-9.02-5.17-2.43-10.56-4.36-16.04-6-1.21-.35-2.41-.7-3.61-1.04-1.21-.3-2.43-.61-3.67-.91-9.16-2.24-12.13-2.77-13.96-4.14-.42-.3-.99-.61-1.23-.87-.39-.43.39-.62,2.15-.6,1.76.03,4.51.24,7.97.93,1.29.25,2.58.47,3.87.74,1.28.3,2.57.6,3.87.91l1.94.46,1.93.55c1.29.38,2.57.75,3.87,1.13,5.13,1.67,10.23,3.64,15.18,6.09,4.95,2.45,9.75,5.38,14.15,9,2.18,1.84,4.29,3.79,6.12,6.19.92,1.26,1.7,2.5,2.37,3.79.7,1.28,1.29,2.59,1.85,3.91,1.64,3.93,2.8,7.95,3.81,11.96,1,4.04,1.87,7.96,2.77,11.99,1.77,8.09,2.96,16.14,4.8,24l-.07.04Z"/><path class="cls-4" d="M108.89,117.51c9.08,3.73,18.05,7.69,26.86,12.04,3.21,1.59,6.44,3.15,9.59,4.87,5.53,3.08,11.03,6.25,16.04,10.36,1.26,1.02,2.44,2.18,3.54,3.46,1.11,1.46,1.79,2.77,2.6,4.16,1.57,2.74,3.08,5.51,4.54,8.31,2.57,4.97,5.07,10.02,7.3,15.12,2.81,6.54,5.72,13.24,6.44,20.45.23,2.23.24,1.91-.55.18-.38-.87-1.07-2.06-1.82-3.5-.37-.72-.77-1.5-1.2-2.33-.39-.84-.78-1.73-1.14-2.67-1.27-3.35-2.55-6.69-3.99-9.98-1.44-3.29-2.94-6.55-4.52-9.79-1.59-3.23-3.23-6.44-4.95-9.62-.86-1.59-1.73-3.17-2.63-4.74l-1.35-2.35c-.23-.43-.45-.68-.67-1.02-.2-.33-.48-.64-.76-.95-1.32-1.49-2.98-2.88-4.74-4.15-1.74-1.29-3.61-2.47-5.5-3.63-3.8-2.29-7.77-4.38-11.72-6.42-8.72-4.44-17.64-8.55-26.68-12.38-5.56-2.35-11.17-4.62-16.83-6.7-2.14-.79-4.3-1.56-6.46-2.29-1.08-.37-2.17-.71-3.25-1.05l-1.63-.48-1.4-.37-.47-.11c-.08-.04-.16-.02-.21.06-.05.06-.09.13-.13.2-.17.3-.26.47-.55,1.07-.48,1.01-.94,2.05-1.39,3.09-.9,2.08-1.73,4.2-2.49,6.33-2.38,6.63-4.28,13.29-5.79,20.06-.33,1.49-.6,2.96-.88,4.46-1.02,5.58-1.16,7.32-2.07,8.5-.19.27-.36.64-.52.8-.49.57-1.23-1.88-.73-6.19.69-6.35,2.23-12.69,4.09-19,.93-3.15,1.97-6.3,3.08-9.43,1.17-3.12,2.2-6.28,3.57-9.42l.41-.88.31-.63c.15-.27.28-.54.44-.8.31-.52.67-.99,1.13-1.22.06-.02.12-.05.19-.06l.1-.02h.05s.03-.01.03-.01h.01c-.07-.18-.01-.05-.02-.09l.42.02.83.03.83.03c.28.02.59.12.86.18l.94.24,1.83.53c2.41.73,4.76,1.54,7.11,2.36,4.68,1.67,9.31,3.45,13.91,5.29l-.02.08Z"/><path class="cls-4" d="M249.44,184.25c.3-.42.62-.79.99-.98.18-.12.38-.14.61-.2.11-.04.24-.02.35-.09.12,0,.23,0,.34.03.41.07.78.25,1.17.57.39.32.75.79,1.09,1.29.17.25.33.51.49.77l.42.71.49.91.94,1.81c.45.88.96,1.71,1.39,2.58.67,1.36,1.33,2.72,2.03,4.02l.53.96.48.8c.08.13.17.27.29.39.14.15.29-.02.44-.06.04-.01.08-.03.13-.05l.22-.1.61-.23c1.55-.53,3.09-.92,4.64-1.14.99-.15,1.98-.3,2.98-.34.5.02,1-.05,1.5.08.5.12,1,.42,1.49.55.61.11.53.13.01.3-.26.08-.62.35-1.03.75-.21.18-.43.41-.67.54-.24.1-.5.18-.76.24-1.44.28-2.86.48-4.23.81-.68.17-1.37.27-2.03.46-.33.09-.65.18-.96.29l-.46.16-.37.16c-.15.07-.32.16-.48.25-.39.12-.78.21-1.15.27-.4-.03-.78-.2-1.09-.45-.32-.25-.61-.57-.87-.92-.12-.18-.25-.35-.37-.53l-.2-.34c-1.22-2.24-2.46-4.36-3.61-6.54-.62-1.19-1.24-2.38-1.87-3.54l-.64-1.17c-.15-.24-.29-.56-.58-.71-.2,0-.29.19-.38.34-.09.16-.16.33-.23.52l-.1.28-.05.15-.08.27c-.11.39-.21.78-.3,1.17-.55,2.39-.92,4.88-1.09,7.34-.13,1.91,0,3.8.08,5.67.03.41.06.81.09,1.23.08,1.53,0,2.01-.61,2.42-.13.09-.25.21-.37.27-.37.21-.98-.38-1.2-1.57-.76-3.5-.68-7.23-.29-10.92.14-1.37.35-2.74.6-4.12.12-.69.27-1.38.43-2.08l.17-.69.27-.95.34-.89c.13-.28.27-.53.4-.79l.05.06Z"/><path class="cls-4" d="M270.02,237.52c-.46-.74-1.34-1.59-2.25-2.34-.92-.76-1.93-1.47-2.96-2.15-.76-.49-1.56-.9-2.34-1.36-2.74-1.64-5.62-3.13-8.57-4.41-1.31-.57-2.67-1.03-4.03-1.41-.87-.24-1.73-.49-2.6-.71-.43-.1-.86-.27-1.29-.37-.22-.06-.43-.12-.65-.16-.22-.05-.44-.16-.66-.2-.56-.17-.51-.13-.03-.4.47-.32,1.48-.82,2.64-.87,1.01.04,2,.16,2.96.36.95.24,1.88.53,2.8.84,1.84.62,3.6,1.41,5.3,2.35,2.03,1.11,4.24,2.04,6.29,3.24,2.25,1.32,4.45,2.73,6.43,4.64.48.48.95,1,1.35,1.67.23.37.41.85.47,1.3,0,.23.04.47-.03.69-.09.22-.11.45-.23.66-.24.42-.51.78-.79,1.04-1.1,1.06-2.52,1.43-3.79,1.56-1.3.13-2.55.04-3.78-.12-1.9-.26-3.76-.54-5.58-1.17-.4-.14-.8-.27-1.19-.46-.73-.34-1.17-.67-1.4-1.01-.24-.34-.29-.65-.22-1.02.03-.17.04-.35.1-.49.22-.47.89-.46,1.89-.23,1.44.44,2.98.78,4.48,1.16,1.52.34,3.08.6,4.52.59.78,0,1.51-.09,2.09-.29.28-.1.54-.21.72-.35.18-.12.38-.36.34-.3,0,0,.02-.02.02-.04-.01-.05.04.05-.09-.19l.06-.04Z"/><path class="cls-4" d="M185.29,247.11c-2.3-1.54-4.5-3.26-6.5-5.17-2-1.91-3.91-4.11-5.33-6.58-2.93-4.92-4.05-10.89-3.24-16.49.59-4.09,1.93-8.05,4.04-11.56,3.67-6.2,9.21-11.19,15.68-14.23,1.6-.79,3.3-1.37,5-1.91,1.73-.46,3.47-.88,5.23-1.08,3.52-.49,7.08-.42,10.56-.04,6.19.68,12.24,2.27,17.98,4.37,1.85.67,3.67,1.4,5.48,2.17,1.8.79,3.58,1.64,5.32,2.53,3.49,1.79,6.88,3.84,9.83,6.48.9.85,1.23,1.28,1.16,1.33-.09.06-.61-.24-1.6-.59-.98-.37-2.41-.82-4.05-1.44-.82-.31-1.74-.61-2.66-1-.91-.41-1.87-.85-2.85-1.34-7-3.38-14.23-6.35-21.74-8.07-3.75-.84-7.56-1.41-11.36-1.48-1.9-.03-3.8.03-5.68.26-1.88.2-3.73.58-5.55,1.13-4.34,1.29-8.48,3.7-11.93,6.88-3.46,3.18-6.25,7.12-8.05,11.41-1.98,4.71-2.64,9.99-1.51,14.95.56,2.48,1.59,4.84,2.96,7,1.38,2.16,3.11,4.07,5.06,5.84,4.77,4.36,10.52,7.58,16.61,9.91,2.08.81,4.21,1.49,6.36,2.2,2.14.7,4.28,1.37,6.44,1.89,2.16.51,4.34.93,6.51.98,1.08.06,2.15-.04,3.18-.2l1.6-.37c.28-.07.39-.1.54-.17.14-.07.27-.18.35-.32.32-.48.27-1.06-.2-1.72-.94-1.28-2.61-2.3-4.21-3.18-1.63-.89-3.35-1.65-5.1-2.35l-2.65-1.04c-.45-.17-.9-.34-1.38-.55-.45-.21-.91-.4-1.35-.62-1.77-.87-3.48-1.85-5.12-2.96-1.45-.97-2.84-1.99-4.12-3.22-2.42-2.25-3.63-4.22-4.22-5.69-.58-1.49-.59-2.48-.4-3.25.09-.36.15-.79.26-.98.18-.34.51.12,1.06,1.04.62.9,1.49,2.28,2.95,3.84,1.73,1.95,3.87,3.61,6.11,5.17,2.24,1.53,4.69,2.94,7.16,3.94,2.69,1.07,5.51,2.22,8.24,3.74,1.38.76,2.7,1.67,4.01,2.92.64.64,1.29,1.4,1.75,2.55.12.27.19.63.26.94.04.34.1.73.04,1.1-.03.75-.36,1.43-.73,2.06-.35.52-.84.93-1.41,1.19-.27.13-.61.25-.87.31l-.55.13-.92.21c-.36.08-.73.17-1.09.21-1.46.23-2.88.21-4.27.12-5.8-.46-10.98-2.4-16.11-4.04-5.22-1.74-10.35-4.01-15.03-7.09l.03-.07Z"/><path class="cls-4" d="M424.51,159.09c-.68,1.31-1.35,2.63-1.98,3.96-.23.49-.39,1-.63,1.49-.82,1.72-1.64,3.43-2.43,5.17-.35.77-.62,1.57-.9,2.36-.32,1.03-.65,2.05-1.2,3-.17.3-.46.16-.69-.22-.23-.38-.46-1.01-.36-1.63.51-2.16,1.2-4.27,2.16-6.29.61-1.2.99-2.54,1.5-3.8.57-1.39,1.18-2.76,1.79-4.13l1.15-2.52c.57-1.27,1.19-2.54,1.72-3.82.42-.99.68-2.04,1.02-3.05.07-.22.12-.46.21-.67.34-.81.66-.97,1.38-.84.16.03.33.05.49.1.52.16.79.68.69,1.34-.35,1.92-1.1,3.76-1.93,5.57-.65,1.33-1.3,2.67-1.95,4.01l-.06-.02Z"/><g class="cls-5"><path class="cls-4" d="M437.32,165.86c-.43.66-.86,1.33-1.26,2.02-.15.25-.23.52-.38.77-.53.87-1.03,1.76-1.52,2.66-.24.39-.42.8-.61,1.21-.23.53-.46,1.05-.79,1.55-.1.15-.22.09-.32-.11-.1-.2-.23-.54-.2-.88.17-1.19.24-2.44.93-3.45.37-.62.54-1.35.82-2.03.31-.74.66-1.46,1.01-2.19.22-.44.44-.89.66-1.33.33-.67.71-1.32.98-2.01.22-.54.3-1.12.44-1.69.03-.13.04-.26.08-.38.16-.45.38-.5,1.05-.28.15.05.31.09.45.15.5.2.81.57.79.94-.05,1.09-.49,2.05-.96,2.99-.36.7-.75,1.39-1.13,2.08l-.05-.02Z"/></g><path class="cls-4" d="M59.33,138.92l.07-.04h.02s0-.01,0-.01h0s0,0,0,0h1.06s0,0,0,0h0s-.03.02-.03.02c-.01,0,0,.02-.02.03-.06.03-.13.06-.17.09-.02.01-.02.03,0,.04.01.02.06.03-.03.05-.05.01-.78,0-.81-.02-.03-.04-.02-.07.08-.11.06-.02.02-.04.03-.07,0-.01.01-.02.02-.03h0s.8,0,.8,0h0s0,0,0,0h0s0,0,0,0h0s-.01.03-.01.03c-.01.01-.03.03-.03.04-.01.02-.04.04-.02.07.02.02.1.03.15.05.01,0,.04,0,.04.01.03.01-.05.02-.36.02h-.21c-.24,0-.43,0-.5-.01-.19-.03-.2-.06-.18-.09.01-.02.05-.05.08-.07h.02Z"/><path class="cls-4" d="M361.17,291.87c1.46-.3,2.91-.65,4.36-1.05.53-.15,1.02-.38,1.55-.52,1.87-.51,3.77-.96,5.59-1.64.82-.28,1.6-.64,2.38-.99.99-.47,1.98-.95,2.98-1.4.32-.14.33-.02.15.24-.18.26-.55.71-1.07,1.09-1.88,1.31-3.85,2.48-5.99,3.32-1.28.48-2.52,1.22-3.86,1.67-1.45.53-2.93.98-4.42,1.4-.91.27-1.84.48-2.77.72-1.41.33-2.84.59-4.26.86-1.1.21-2.19.54-3.36.67-.26.01-.52.05-.78.05-1-.06-1.33-.36-1.37-1.01-.01-.15-.04-.31-.03-.46.04-.5.48-.87,1.03-.98.86-.22,1.74-.43,2.66-.57.92-.18,1.87-.33,2.84-.53,1.43-.26,2.89-.6,4.34-.94l.02.06Z"/><path class="cls-4" d="M261.71,211.39c.52.97,1.29,1.85,2.07,2.62.96.95,2.05,1.8,3.31,2.31s2.6.47,3.63-.43,1.03-2.47.73-3.73c-.17-.68-.42-1.34-.69-1.99-.15-.36-.31-.72-.46-1.08-.06-.13-.12-.27-.17-.4-.1-.23.1.25,0,.02-.03-.08-.06-.15-.09-.23-.21-.55-.76-.99-1.38-.79-.53.17-1.02.8-.79,1.38.2.51.42,1,.64,1.5.05.12.11.25.16.37-.12-.28.05.13.08.2.11.26.21.53.3.8.09.25.16.51.23.76.03.12.06.24.08.36,0,.04.06.19.04.23l-.02-.15c0,.05.01.1.01.15,0,.11.01.22.01.33,0,.06,0,.12,0,.18,0,.2.02-.09.02-.09.02.09-.05.24-.07.32,0,.03-.07.24-.01.05s-.04.05-.06.09c-.07.16,0-.15.06-.07,0,0-.1.11-.11.12-.14.16-.03-.06.05-.02,0,0-.1.07-.12.08-.05.03-.12.05-.16.09-.12.09.27-.07.06-.03-.07.01-.42.09-.21.06s-.1,0-.16,0-.13,0-.19-.01c-.17,0,.11-.04.1.01,0,.02-.63-.17-.67-.18l-.07-.03c-.11-.05-.09-.04.06.03-.02,0-.13-.06-.14-.06-.12-.06-.23-.12-.35-.18-.24-.13-.47-.28-.69-.43-.12-.08-.23-.16-.34-.25.23.17-.12-.1-.17-.14-.22-.18-.43-.37-.64-.57-.43-.41-.84-.85-1.22-1.31-.03-.03-.13-.13-.14-.17.01.1.13.17,0,0-.07-.09-.13-.18-.19-.27-.13-.19-.25-.38-.36-.59-.28-.52-1.04-.72-1.54-.4-.53.34-.7.98-.4,1.54h0Z"/><path class="cls-4" d="M269.54,208.7c.98,1.99,1.99,4.65,4.37,5.28,1.41.38,2.94-.15,3.78-1.34.69-.97.87-2.28.86-3.44s-.18-2.44-.66-3.55c-.23-.54-1.07-.7-1.54-.4-.56.36-.65.96-.4,1.54-.19-.44,0,.05.04.18.06.19.1.39.14.59.04.21.07.42.11.62-.07-.37,0,0,0,.11.01.14.02.28.03.42.01.24.02.48.01.72,0,.26-.08.54-.06.79-.02-.28.02-.13,0-.02,0,.05-.02.09-.03.14-.02.11-.05.22-.08.34s-.06.22-.1.32c-.04.12-.01.23.02-.03,0,.05-.06.13-.08.17-.05.09-.1.18-.16.27-.16.25.16-.15-.05.06-.03.03-.21.18-.22.21.01-.1.22-.14.06-.05-.06.03-.13.07-.18.11-.17.12.2-.05.07-.02-.06.01-.12.04-.18.06-.02,0-.37.08-.38.09,0-.05.28-.01.05-.01-.06,0-.12,0-.18,0s-.11,0-.17,0c-.28,0,.21.06,0,0-.11-.03-.21-.06-.32-.09-.19-.05.08.04.09.04-.05,0-.13-.06-.18-.09-.1-.05-.19-.11-.28-.17-.02-.01-.08-.07-.11-.08.14.11.16.12.07.05-.04-.03-.07-.06-.1-.09-.18-.16-.34-.33-.49-.51,0,0-.09-.11-.09-.11-.02.03.15.2,0,0-.09-.12-.17-.24-.25-.37-.59-.9-1-1.89-1.48-2.85-.26-.53-1.05-.72-1.54-.4-.54.35-.68.97-.4,1.54h0Z"/><path class="cls-4" d="M276.57,220.42c-.14-.67-.3-1.34-.52-1.99-.24-.72-.55-1.53-1.12-2.07-.43-.4-1.17-.46-1.59,0s-.46,1.16,0,1.59c.07.06.13.13.18.2l-.18-.23c.19.25.32.53.45.82l-.11-.27c.34.81.55,1.68.72,2.54.12.58.83.96,1.38.79.61-.2.91-.77.79-1.38h0Z"/><path class="cls-4" d="M277.24,213.54c.05.25.07.49.06.61,0,.16-.02.28-.04.4-.04.24-.09.45-.16.65-.13.41-.29.79-.5,1.16-.15.27-.28.58-.51.84-.11.11-.23.23-.35.33-.14.1-.28.19-.43.27-.35.17-.58.26-1.08.31-.35,0-.42-.05-.58-.09-.13-.05-.25-.1-.37-.15-.23-.11-.45-.22-.65-.35-.36-.24-.71-.48-1.03-.76-.2-.19-.4-.38-.55-.63-.12-.26-.13-.58-.11-.85.02-.18.12-.18.34-.13.2.06.63.07.9.09.57.34,1.27.51,1.82.83.01,0,.04.02.04.02,0,.14,0,.28,0,.42-.01.11,0,.23.02.34l.02.08v.04s.02.01.02.01c.05.19-.41-1.63-.21-.86h0s0,0,0,0h0s0,0,0,0h.03s.07-.05.11-.08c.06-.1.15-.21.26-.36.24-.33.47-.87.54-1.31.01-.07.01-.12.02-.14h0s.16-.03.16-.03c.13-.04.25-.07.33-.08.09-.02.18-.08.24-.13.01,0,.03,0,.04-.02,0,0,0-.01.01-.02h0s0-.02,0-.02h0s-.07.82-.07.82h0s0,0,0,0h0c-.14-.02-.29-.04-.46-.04-.5,0-1.08.07-1.6.27-.41.16-.74.49-1.09.75-.08.06-.14.14-.22.19-.29.17-.45.06-.85-.53l-.27-.4c-.3-.46-.36-.94-.14-1.22.31-.42.7-.74,1.12-.98.43-.22.91-.37,1.41-.48.37-.08.76-.13,1.18-.15.21,0,.43,0,.66,0,.11,0,.24.02.36.03h.09s.09.02.09.02c.1.01.2.04.3.07.2.07.41.18.58.31.4.36.34.4.43.53.06.12.12.25.16.38l-.06.02Z"/><path class="cls-4" d="M192.8,212.5c.15,1.53-1.79.97-2.11,2.01-.75,2.45-3.01,1.41-4.03-.2-2.85-4.5,5.72-6.11,6.13-1.81Z"/><path class="cls-3" d="M234.94,213.52c1.19,1.56-2.8,1.27-3.72,1.98-1.61,1.25-1.98,3.97-4.22,1.42-3.72-4.23,3.62-9.11,7.94-3.4Z"/><path class="cls-4" d="M219.06,231.63c.14.91-1.77,1.83-3.42,1.12s-3.08,2.26-4.1.72c-2.86-4.31,6.26-9.74,7.51-1.83Z"/><path class="cls-4" d="M193.94,426.87c-2.89-.12-5.78-.27-8.69-.6-1.45-.16-2.92-.38-4.39-.69l-.56-.13-.29-.07c-.13-.03-.29-.08-.43-.13-.57-.21-1.21-.38-1.72-.63l-.69-.41c-.11-.07-.24-.13-.33-.21l-.21-.25c-.3-.33-.57-.62-.58-1.14-.01-.36.1-.67.26-.91.16-.26.37-.49.66-.72.56-.45,1.38-.84,2.24-1.15l.62-.23.39-.13.77-.24c.51-.16,1.02-.3,1.53-.44,1.52-.41,3.03-.79,4.5-1.22.36-.1.75-.22,1.06-.33.12-.03.23-.07.36-.11.12-.05.25-.09.36-.18.14-.07.12-.24.01-.33-.1-.13-.28-.21-.44-.28-.09-.04-.18-.06-.27-.1l-.64-.17c-.98-.23-2.01-.4-3.04-.53-2.07-.26-4.18-.39-6.29-.47-3.25-.12-6.53-.07-9.77.03-4.16.12-8.33.37-12.49.48-1.31-.07-1.14-.14-.06-.5,1.08-.35,3.08-.8,5.48-1.03,4.25-.39,8.51-.69,12.8-.77,4.29-.06,8.6-.08,13,.68.33.06.67.12,1.01.21.19.04.3.08.54.12l.79.27c.56.15.96.44,1.42.67.33.3.66.59.91.95.06.12.09.28.14.42l.03.11v.03c-.06,0,0,.02-.02.03v.06c.02.08.05.16.02.24-.04.33-.21.56-.38.8-.21.22-.46.43-.74.64-.33.18-.65.36-1.02.52l-.55.25c-.17.09-.42.16-.51.19l-.72.24-1.44.44c-1.91.56-3.82,1.06-5.64,1.64l-.58.19c-.12.04-.23.08-.35.13-.12.05-.24.11-.34.19-.12.07-.16.24-.04.32.19.15.43.26.68.34l.19.06c.06.02.12.03.32.08.34.07.66.17,1.01.22,2.74.52,5.61.74,8.47.9,3.52.19,7.07.25,10.61.25,5.37,0,10.77-.1,16.1-.34,4.15-.18,8.2-.58,12.3-.84.9-.06,1.78-.14,2.7-.19,3.38-.16,4.47,0,5.21.66.17.15.39.3.49.46.34.52-1.02,1-3.48,1.26-7.3.83-15.03,1.23-22.82,1.44-5.78.15-11.61.18-17.44.02v-.06Z"/><path class="cls-4" d="M256.38,171.71c.16.08.1.3-.07.59-.06.09-.3.28-.36.27-.13-.02-.25-.03-.36-.06-.06-.02-.81-.58-1.09-.74-.27-.17-.49-.36-.7-.57l-1.32-1.25c-.1-.09-.17-.2-.24-.32-.21-.42-.52-.75-.89-1.04-.06-.05-.1-.11-.23-.11-.21,0-1.13-.85-1.18-1.01-.13-.41-.29-.79-.43-1.19-.02-.06-.09-.08-.02-.2.16-.28.04-.34-.02-.45-.09-.15-.13-.34-.15-.54,0-.1.08-.28.14-.43.05-.14.42-.38.48-.39.16-.03.28-.2.43-.32.05-.04.11-.09.15-.12.09-.06,1.4.16,1.42.29.02.02.98,1.04,1.12,1.19.07.06.06.17.07.27.01.04.77.91.79.95.1.22.29.38.24.72,0,.07.03.1.05.14.24.34.39.74.57,1.11.09.19.23.35.34.53.02.03.02.08.03.12.01.05.02.1.05.14.28.41.48.88.8,1.26.07.09.23.65.33.75.05.06,0,.4.07.43Z"/><path class="cls-4" d="M262.65,165.8c0,.24-.2.38-.5.48-.09.03-.33-.04-.35-.11-.04-.14-.08-.29-.1-.43-.01-.08.09-1.38.1-1.83.01-.44.08-.86.16-1.28.18-.85.42-1.68.66-2.51.05-.18.13-.36.23-.53.33-.58.56-1.19.75-1.83.03-.11.08-.21.05-.34-.07-.22.57-1.89.72-2.08.37-.46.67-.96,1.06-1.4.05-.06.07-.16.19-.18.3-.04.34-.22.44-.36.14-.21.29-.4.47-.58.09-.09.27-.13.42-.18.14-.05.42.17.43.22.05.15.23.15.37.21.04.02.1.05.14.07.06.05,0,1.55-.07,1.68,0,.05-.76,1.87-.82,2.09-.03.11-.14.2-.22.29-.04.04-.57,1.53-.61,1.59-.17.28-.23.61-.54.84-.06.05-.08.11-.1.17-.2.53-.49,1.02-.75,1.53-.13.26-.21.54-.33.8-.02.05-.06.09-.09.13-.04.06-.08.11-.1.17-.21.65-.59,1.25-.78,1.91-.05.15-.47.81-.51.99-.03.1-.33.36-.32.46Z"/><path class="cls-4" d="M455.07,274.96c-.08.19-.33.11-.68-.1-.11-.07-.34-.36-.33-.44.02-.15.04-.3.09-.43.02-.08.76-.93,1.03-1.21.25-.29.55-.51.85-.72.63-.41,1.27-.82,1.95-1.16.15-.08.31-.13.48-.16.58-.09,1.11-.29,1.64-.52.09-.04.19-.06.25-.17.1-.21,1.63-.65,1.85-.61.53.07,1.04.1,1.55.18.07.01.15-.03.22.08.17.26.31.2.47.21.21,0,.42.05.63.13.1.04.21.2.3.33.09.12.03.56,0,.6-.09.14-.02.34-.01.53,0,.06,0,.14,0,.19-.02.11-1.07.83-1.17.82-.03-.02-1.53.27-1.68.36-.08.04-.18-.01-.28-.04-.05-.03-1.2.38-1.24.39-.26.02-.47.16-.78.03-.06-.03-.11,0-.16.01-.41.15-.86.2-1.29.31-.22.05-.42.16-.63.24-.04.01-.09,0-.13,0-.05,0-.11,0-.16.03-.48.23-1.02.38-1.45.72-.1.07-.72.22-.83.32-.06.05-.44-.02-.47.07Z"/><path class="cls-4" d="M453.74,283.23c-.2-.08.04-.3.53-.61.16-.1.67-.3.76-.29.17.02.34.04.47.07.08.02.64.65.86.85.21.2.34.43.45.66l.7,1.43c.05.11.07.22.07.35-.01.44.14.81.35,1.16.04.06.05.13.17.15.19.04.65,1.04.63,1.2-.04.4-.01.76-.02,1.15,0,.05.06.09-.04.18-.23.21-.14.29-.12.4.03.15.05.31.02.48-.02.09-.14.22-.24.34-.09.11-.51.24-.57.23-.15-.01-.33.12-.5.19-.06.02-.13.05-.18.07-.11.04-1.12-.5-1.14-.59,0,0-.17-.29-.34-.59-.18-.29-.36-.6-.41-.66-.05-.06-.02-.16,0-.24,0-.04-.56-.91-.57-.95-.04-.21-.21-.37-.06-.66.03-.06,0-.09-.02-.13-.16-.33-.2-.7-.27-1.06-.04-.18-.13-.35-.19-.52-.01-.03.01-.08.01-.11,0-.05.02-.1,0-.14-.18-.4-.21-.86-.46-1.23-.06-.09.02-.64-.05-.73-.04-.05.24-.39.16-.42Z"/></svg>
    <h1>Oops ! Nothing to See Here.</h1>
    </div>
</div>

@else
    <div class="d2">
    
        @if(isset($files) && $files->count() > 0)
        
        <table class="drive-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th style="padding-left: 36px;">Uploaded at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($files as $file)
                <tr>
                    <td class="filename">
                   
                   @switch($file->mime_type)
                       @case('image/jpeg')
                       @case('image/png')
                       @case('image/gif')
                    
                       <svg width="22" height="22" style="margin-right:10px;" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>file_type_image</title><path d="M30,5.851Q30,16,30,26.149H2Q2,16,2,5.851H30" style="fill:#2dcc9f"></path><path d="M24.232,8.541a2.2,2.2,0,1,0,1.127.623,2.212,2.212,0,0,0-1.127-.623" style="fill:#fff"></path><path d="M18.111,20.1q-2.724-3.788-5.45-7.575Q8.619,18.147,4.579,23.766q5.449,0,10.9,0,1.316-1.832,2.634-3.663" style="fill:#fff"></path><path d="M22.057,16q-2.793,3.882-5.584,7.765,5.584,0,11.169,0Q24.851,19.882,22.057,16Z" style="fill:#fff"></path></g></svg>

                           
                           @break

                           @case('text/html')
                           <svg width="22" height="22" style="margin-right:10px;" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>file_type_html</title><polygon points="5.902 27.201 3.655 2 28.345 2 26.095 27.197 15.985 30 5.902 27.201" style="fill:#e44f26"></polygon><polygon points="16 27.858 24.17 25.593 26.092 4.061 16 4.061 16 27.858" style="fill:#f1662a"></polygon><polygon points="16 13.407 11.91 13.407 11.628 10.242 16 10.242 16 7.151 15.989 7.151 8.25 7.151 8.324 7.981 9.083 16.498 16 16.498 16 13.407" style="fill:#ebebeb"></polygon><polygon points="16 21.434 15.986 21.438 12.544 20.509 12.324 18.044 10.651 18.044 9.221 18.044 9.654 22.896 15.986 24.654 16 24.65 16 21.434" style="fill:#ebebeb"></polygon><polygon points="15.989 13.407 15.989 16.498 19.795 16.498 19.437 20.507 15.989 21.437 15.989 24.653 22.326 22.896 22.372 22.374 23.098 14.237 23.174 13.407 22.341 13.407 15.989 13.407" style="fill:#fff"></polygon><polygon points="15.989 7.151 15.989 9.071 15.989 10.235 15.989 10.242 23.445 10.242 23.445 10.242 23.455 10.242 23.517 9.548 23.658 7.981 23.732 7.151 15.989 7.151" style="fill:#fff"></polygon></g></svg>
                           @break
                           @case('css')
                           <svg idth="22" height="22" style="margin-right:10px;"  viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>file_type_css</title><polygon points="5.902 27.201 3.656 2 28.344 2 26.095 27.197 15.985 30 5.902 27.201" style="fill:#1572b6"></polygon><polygon points="16 27.858 24.17 25.593 26.092 4.061 16 4.061 16 27.858" style="fill:#33a9dc"></polygon><polygon points="16 13.191 20.09 13.191 20.372 10.026 16 10.026 16 6.935 16.011 6.935 23.75 6.935 23.676 7.764 22.917 16.282 16 16.282 16 13.191" style="fill:#fff"></polygon><polygon points="16.019 21.218 16.005 21.222 12.563 20.292 12.343 17.827 10.67 17.827 9.24 17.827 9.673 22.68 16.004 24.438 16.019 24.434 16.019 21.218" style="fill:#ebebeb"></polygon><polygon points="19.827 16.151 19.455 20.29 16.008 21.22 16.008 24.436 22.344 22.68 22.391 22.158 22.928 16.151 19.827 16.151" style="fill:#fff"></polygon><polygon points="16.011 6.935 16.011 8.855 16.011 10.018 16.011 10.026 8.555 10.026 8.555 10.026 8.545 10.026 8.483 9.331 8.342 7.764 8.268 6.935 16.011 6.935" style="fill:#ebebeb"></polygon><polygon points="16 13.191 16 15.111 16 16.274 16 16.282 12.611 16.282 12.611 16.282 12.601 16.282 12.539 15.587 12.399 14.02 12.325 13.191 16 13.191" style="fill:#ebebeb"></polygon></g></svg>
                           @break

                    
                           @case('image/svg+xml')
                           <svg width="22" height="22" style="margin-right:10px;"  viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>file_type_svg</title><path d="M7.674,14.488a2.218,2.218,0,1,0,0,3.137H24.326a2.218,2.218,0,1,0,0-3.137Z" style="fill:#ffb13b;stroke:#000000;stroke-width:3.73000001907349px"></path><path d="M11.222,9.06A2.218,2.218,0,1,0,9,11.278L20.778,23.052A2.218,2.218,0,1,0,23,20.834Z" style="fill:#ffb13b;stroke:#000000;stroke-width:3.73000001907349px"></path><path d="M17.568,7.73a2.218,2.218,0,1,0-3.137,0V24.382a2.218,2.218,0,1,0,3.137,0Z" style="fill:#ffb13b;stroke:#000000;stroke-width:3.73000001907349px"></path><path d="M23,11.278A2.218,2.218,0,1,0,20.778,9.06L9,20.834a2.218,2.218,0,1,0,2.218,2.218Z" style="fill:#ffb13b;stroke:#000000;stroke-width:3.73000001907349px"></path><path d="M7.674,14.488a2.218,2.218,0,1,0,0,3.137H24.326a2.218,2.218,0,1,0,0-3.137Z" style="fill:#ffb13b"></path><path d="M11.222,9.06A2.218,2.218,0,1,0,9,11.278L20.778,23.052A2.218,2.218,0,1,0,23,20.834Z" style="fill:#ffb13b"></path><path d="M17.568,7.73a2.218,2.218,0,1,0-3.137,0V24.382a2.218,2.218,0,1,0,3.137,0Z" style="fill:#ffb13b"></path><path d="M23,11.278A2.218,2.218,0,1,0,20.778,9.06L9,20.834a2.218,2.218,0,1,0,2.218,2.218Z" style="fill:#ffb13b"></path><path d="M2,16.056H30V25.95a4.035,4.035,0,0,1-4.106,4.106H6.106A4.035,4.035,0,0,1,2,25.95Z"></path><path d="M6.2,23.045A3.628,3.628,0,1,1,12.4,20.48H10.27A1.5,1.5,0,1,0,7.7,21.541h0a1.6,1.6,0,0,0,1.062.441h0a4.118,4.118,0,0,1,2.566,1.063h0a3.628,3.628,0,1,1-6.194,2.565H7.264A1.5,1.5,0,1,0,9.83,24.55h0a1.948,1.948,0,0,0-1.063-.44h0A4.465,4.465,0,0,1,6.2,23.045Z" style="fill:#fff"></path><path d="M19.651,16.852,17.085,29.24H14.96L12.4,16.852H14.52l1.5,7.255,1.5-7.255Z" style="fill:#fff"></path><path d="M23.28,21.983h3.628v3.628h0a3.628,3.628,0,1,1-7.257,0h0V20.48h0a3.628,3.628,0,0,1,7.257,0H24.783a1.5,1.5,0,1,0-3.005,0v5.13h0a1.5,1.5,0,0,0,3.005,0h0v-1.5h-1.5V21.983Z" style="fill:#fff"></path></g></svg>
                           @break


                           @case('application/vnd.ms-powerpoint')
    @case('application/vnd.openxmlformats-officedocument.presentationml.presentation')
        <!-- PowerPoint SVG Icon -->
        <svg width="22" height="22" style="margin-right:10px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#E2E5E7;" d="M128,0c-17.6,0-32,14.4-32,32v448c0,17.6,14.4,32,32,32h320c17.6,0,32-14.4,32-32V128L352,0H128z"></path> <path style="fill:#B0B7BD;" d="M384,128h96L352,0v96C352,113.6,366.4,128,384,128z"></path> <polygon style="fill:#CAD1D8;" points="480,224 384,128 480,128 "></polygon> <path style="fill:#fb8137;" d="M416,416c0,8.8-7.2,16-16,16H48c-8.8,0-16-7.2-16-16V256c0-8.8,7.2-16,16-16h352c8.8,0,16,7.2,16,16 V416z"></path> <g> <path style="fill:#FFFFFF;" d="M105.456,303.152c0-4.224,3.328-8.832,8.688-8.832h29.552c16.64,0,31.616,11.136,31.616,32.48 c0,20.224-14.976,31.488-31.616,31.488h-21.36v16.896c0,5.632-3.568,8.816-8.176,8.816c-4.224,0-8.688-3.184-8.688-8.816v-72.032 H105.456z M122.336,310.432v31.872h21.36c8.576,0,15.36-7.568,15.36-15.504c0-8.944-6.784-16.368-15.36-16.368H122.336z"></path> <path style="fill:#FFFFFF;" d="M191.616,303.152c0-4.224,3.328-8.832,8.704-8.832h29.552c16.64,0,31.616,11.136,31.616,32.48 c0,20.224-14.976,31.488-31.616,31.488h-21.36v16.896c0,5.632-3.584,8.816-8.192,8.816c-4.224,0-8.704-3.184-8.704-8.816V303.152z M208.496,310.432v31.872h21.36c8.576,0,15.36-7.568,15.36-15.504c0-8.944-6.784-16.368-15.36-16.368H208.496z"></path> <path style="fill:#FFFFFF;" d="M301.68,311.472h-22.368c-11.136,0-11.136-16.368,0-16.368h60.496c11.392,0,11.392,16.368,0,16.368 h-21.232v64.608c0,11.12-16.896,11.392-16.896,0V311.472z"></path> </g> <path style="fill:#CAD1D8;" d="M400,432H96v16h304c8.8,0,16-7.2,16-16v-16C416,424.8,408.8,432,400,432z"></path> </g></svg>
        @break
                       @case('application/pdf')
                       <svg  width="22" height="22" style="margin-right:10px;"version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#E2E5E7;" d="M128,0c-17.6,0-32,14.4-32,32v448c0,17.6,14.4,32,32,32h320c17.6,0,32-14.4,32-32V128L352,0H128z"></path> <path style="fill:#B0B7BD;" d="M384,128h96L352,0v96C352,113.6,366.4,128,384,128z"></path> <polygon style="fill:#CAD1D8;" points="480,224 384,128 480,128 "></polygon> <path style="fill:#F15642;" d="M416,416c0,8.8-7.2,16-16,16H48c-8.8,0-16-7.2-16-16V256c0-8.8,7.2-16,16-16h352c8.8,0,16,7.2,16,16 V416z"></path> <g> <path style="fill:#FFFFFF;" d="M101.744,303.152c0-4.224,3.328-8.832,8.688-8.832h29.552c16.64,0,31.616,11.136,31.616,32.48 c0,20.224-14.976,31.488-31.616,31.488h-21.36v16.896c0,5.632-3.584,8.816-8.192,8.816c-4.224,0-8.688-3.184-8.688-8.816V303.152z M118.624,310.432v31.872h21.36c8.576,0,15.36-7.568,15.36-15.504c0-8.944-6.784-16.368-15.36-16.368H118.624z"></path> <path style="fill:#FFFFFF;" d="M196.656,384c-4.224,0-8.832-2.304-8.832-7.92v-72.672c0-4.592,4.608-7.936,8.832-7.936h29.296 c58.464,0,57.184,88.528,1.152,88.528H196.656z M204.72,311.088V368.4h21.232c34.544,0,36.08-57.312,0-57.312H204.72z"></path> <path style="fill:#FFFFFF;" d="M303.872,312.112v20.336h32.624c4.608,0,9.216,4.608,9.216,9.072c0,4.224-4.608,7.68-9.216,7.68 h-32.624v26.864c0,4.48-3.184,7.92-7.664,7.92c-5.632,0-9.072-3.44-9.072-7.92v-72.672c0-4.592,3.456-7.936,9.072-7.936h44.912 c5.632,0,8.96,3.344,8.96,7.936c0,4.096-3.328,8.704-8.96,8.704h-37.248V312.112z"></path> </g> <path style="fill:#CAD1D8;" d="M400,432H96v16h304c8.8,0,16-7.2,16-16v-16C416,424.8,408.8,432,400,432z"></path> </g></svg>
                           
                           @break
                           @case('video/mp4')
                           @case('video/x-matroska')
 <svg width="22" height="22" style="margin-right:10px;"  viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>file_type_video</title><path d="M4.5,2.375A2.562,2.562,0,0,1,5.861,2H25.274c.318,0,.635,0,.953,0A2.545,2.545,0,0,1,28.65,3.951a3.37,3.37,0,0,1,.072.862c0,3.725,0,7.451,0,11.176q-.786,0-1.573,0a1.814,1.814,0,0,0-.22.022A5.236,5.236,0,0,0,26.348,16c-.3.007-.61-.014-.914.014a2.275,2.275,0,0,0-.4-.02H20.295c-.2,0-.392.008-.587-.01l.1-.065q-3.177-1.907-6.353-3.813c0,1.3,0,2.593,0,3.889-2.213-.005-4.427,0-6.64,0a2.274,2.274,0,0,0-.251.021C6.352,15.984,6.137,16,5.922,16c-.284.006-.57-.015-.853.015a2.052,2.052,0,0,0-.253-.022q-.771,0-1.541,0c.006-3.635,0-7.27,0-10.9a4.786,4.786,0,0,1,.071-1.131A2.541,2.541,0,0,1,4.5,2.375ZM5.04,4.563a.639.639,0,0,0-.489.606c0,.439,0,.878,0,1.316a.639.639,0,0,0,.627.6c.436,0,.873,0,1.309,0a.638.638,0,0,0,.6-.608c.005-.426,0-.853,0-1.279a.644.644,0,0,0-.329-.575A.708.708,0,0,0,6.4,4.545H5.264A1.081,1.081,0,0,0,5.04,4.563Zm20.341,0a.639.639,0,0,0-.474.607c0,.435,0,.871,0,1.306a.638.638,0,0,0,.6.608c.436.005.872,0,1.308,0a.639.639,0,0,0,.627-.606c.006-.438,0-.876,0-1.314a.638.638,0,0,0-.594-.621c-.348-.009-.7,0-1.045,0A1.98,1.98,0,0,0,25.381,4.567ZM5.042,8.38a.637.637,0,0,0-.452.4,1.078,1.078,0,0,0-.041.386c0,.378,0,.757,0,1.135a.637.637,0,0,0,.6.6c.4.008.795,0,1.192,0a.826.826,0,0,0,.395-.065.641.641,0,0,0,.36-.574c0-.426,0-.853,0-1.279a.638.638,0,0,0-.6-.624c-.338-.008-.677,0-1.016,0A2.385,2.385,0,0,0,5.042,8.38Zm20.338,0a.637.637,0,0,0-.433.4,1.072,1.072,0,0,0-.041.387c0,.377,0,.754,0,1.131a.638.638,0,0,0,.608.607c.406.006.812,0,1.218,0a.739.739,0,0,0,.38-.078.64.64,0,0,0,.335-.558c0-.428,0-.856,0-1.284a.637.637,0,0,0-.593-.622c-.349-.009-.7,0-1.047,0A1.928,1.928,0,0,0,25.379,8.385ZM5.041,12.2a.639.639,0,0,0-.491.608c0,.438-.005.877,0,1.315a.638.638,0,0,0,.627.6c.435,0,.87,0,1.3,0a.638.638,0,0,0,.608-.607c0-.436,0-.871,0-1.307a.638.638,0,0,0-.605-.626c-.348-.007-.7,0-1.045,0A2.12,2.12,0,0,0,5.041,12.2Zm20.335.006a.635.635,0,0,0-.43.394,1.06,1.06,0,0,0-.041.386c0,.377,0,.754,0,1.131a.638.638,0,0,0,.607.608c.435.005.87,0,1.306,0a.639.639,0,0,0,.628-.605c.006-.438,0-.876,0-1.313a.637.637,0,0,0-.592-.622c-.349-.01-.7,0-1.046,0A1.908,1.908,0,0,0,25.377,12.2Z" style="fill:#e75749"></path><path d="M13.458,12.1q3.176,1.908,6.353,3.813l-.1.065q-3.127,1.872-6.251,3.748,0-1.868,0-3.736C13.459,14.695,13.456,13.4,13.458,12.1Z" style="fill:#fff"></path><path d="M3.275,15.988q.771,0,1.541,0a2.052,2.052,0,0,1,.253.022.645.645,0,0,0-.409.273.883.883,0,0,0-.111.518c0,.348,0,.7,0,1.045a.686.686,0,0,0,.685.689q.6,0,1.192,0a.68.68,0,0,0,.657-.569c.008-.447,0-.9,0-1.343a.632.632,0,0,0-.521-.613,2.274,2.274,0,0,1,.251-.021c2.213,0,4.427,0,6.64,0q0,1.868,0,3.736,3.127-1.871,6.251-3.748c.2.018.391.007.587.01h4.741a2.275,2.275,0,0,1,.4.02.637.637,0,0,0-.475.385.983.983,0,0,0-.045.407c0,.338,0,.676,0,1.014a.677.677,0,0,0,.691.719q.58,0,1.16,0a.684.684,0,0,0,.686-.658c0-.328,0-.656,0-.984a1.074,1.074,0,0,0-.1-.589.642.642,0,0,0-.42-.292,1.814,1.814,0,0,1,.22-.022q.786,0,1.573,0c.011,1.721,0,3.443,0,5.165q0,3.147,0,6.293a2.567,2.567,0,0,1-.612,1.651,2.539,2.539,0,0,1-1.563.868,7.534,7.534,0,0,1-.981.033H6.724a9.27,9.27,0,0,1-1.368-.048,2.557,2.557,0,0,1-2-1.846,2.825,2.825,0,0,1-.09-.746q0-5.233,0-10.466C3.273,16.591,3.264,16.289,3.275,15.988ZM5.07,19.831a.613.613,0,0,0-.386.234.761.761,0,0,0-.134.464c0,.387,0,.775,0,1.162a.685.685,0,0,0,.686.658c.428,0,.855,0,1.283,0a.687.687,0,0,0,.568-.716c0-.4,0-.794,0-1.191a.617.617,0,0,0-.2-.458.712.712,0,0,0-.487-.17H5.264A1.039,1.039,0,0,0,5.07,19.831Zm20.366,0a.62.62,0,0,0-.522.58c0,.407,0,.815,0,1.222a.676.676,0,0,0,.69.718c.428,0,.857.005,1.285,0a.7.7,0,0,0,.562-.684q0-.507,0-1.013a.9.9,0,0,0-.123-.568.661.661,0,0,0-.532-.267c-.318,0-.636,0-.954,0A2.246,2.246,0,0,0,25.436,19.83ZM5.071,23.648a.609.609,0,0,0-.4.249.766.766,0,0,0-.124.448c0,.378,0,.755,0,1.132a.7.7,0,0,0,.6.688c.459,0,.917,0,1.376,0a.687.687,0,0,0,.567-.717c0-.4,0-.792,0-1.189a.617.617,0,0,0-.2-.459.71.71,0,0,0-.484-.17H5.265A1.028,1.028,0,0,0,5.071,23.648Zm20.362,0a.616.616,0,0,0-.492.427.99.99,0,0,0-.029.33c0,.4,0,.8,0,1.195a.681.681,0,0,0,.656.567h1.193a.689.689,0,0,0,.686-.719c0-.388,0-.776,0-1.164a.657.657,0,0,0-.286-.545,1.461,1.461,0,0,0-.787-.11C26.062,23.639,25.745,23.609,25.434,23.647Z" style="fill:#c0392b"></path></g></svg>
                               
                               @break
                               @case('application/zip')
                               <svg width="22" height="22" style="margin-right:10px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#E2E5E7;" d="M128,0c-17.6,0-32,14.4-32,32v448c0,17.6,14.4,32,32,32h320c17.6,0,32-14.4,32-32V128L352,0H128z"></path> <path style="fill:#B0B7BD;" d="M384,128h96L352,0v96C352,113.6,366.4,128,384,128z"></path> <polygon style="fill:#CAD1D8;" points="480,224 384,128 480,128 "></polygon> <path style="fill:#84BD5A;" d="M416,416c0,8.8-7.2,16-16,16H48c-8.8,0-16-7.2-16-16V256c0-8.8,7.2-16,16-16h352c8.8,0,16,7.2,16,16 V416z"></path> <g> <path style="fill:#FFFFFF;" d="M132.64,384c-8.064,0-11.264-7.792-6.656-13.296l45.552-60.512h-37.76 c-11.12,0-10.224-15.712,0-15.712h51.568c9.712,0,12.528,9.184,5.632,16.624l-43.632,56.656h41.584 c10.24,0,11.52,16.256-1.008,16.256h-55.28V384z"></path> <path style="fill:#FFFFFF;" d="M212.048,303.152c0-10.496,16.896-10.88,16.896,0v73.04c0,10.608-16.896,10.88-16.896,0V303.152z"></path> <path style="fill:#FFFFFF;" d="M251.616,303.152c0-4.224,3.328-8.832,8.704-8.832h29.552c16.64,0,31.616,11.136,31.616,32.48 c0,20.224-14.976,31.488-31.616,31.488h-21.36v16.896c0,5.632-3.584,8.816-8.192,8.816c-4.224,0-8.704-3.184-8.704-8.816 L251.616,303.152L251.616,303.152z M268.496,310.432v31.872h21.36c8.576,0,15.36-7.568,15.36-15.504 c0-8.944-6.784-16.368-15.36-16.368H268.496z"></path> </g> <path style="fill:#CAD1D8;" d="M400,432H96v16h304c8.8,0,16-7.2,16-16v-16C416,424.8,408.8,432,400,432z"></path> </g></svg>
                                     @break

                                     @case('audio/mpeg')
                                     @case('audio/wav')
                                     <svg width="22" height="22" style="margin-right:10px;"  viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#2F88FF" stroke="#000000" stroke-width="4"></path> <path d="M30 18V30" stroke="white" stroke-width="4" stroke-linecap="round"></path> <path d="M36 22V26" stroke="white" stroke-width="4" stroke-linecap="round"></path> <path d="M18 18V30" stroke="white" stroke-width="4" stroke-linecap="round"></path> <path d="M12 22V26" stroke="white" stroke-width="4" stroke-linecap="round"></path> <path d="M24 14V34" stroke="white" stroke-width="4" stroke-linecap="round"></path> </g></svg>
                                      @break
                                      @case('application/msword')
                                      @case('application/vnd.openxmlformats-officedocument.wordprocessingml.document')
                                    <svg width="22" height="22" style="margin-right:10px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#E2E5E7;" d="M128,0c-17.6,0-32,14.4-32,32v448c0,17.6,14.4,32,32,32h320c17.6,0,32-14.4,32-32V128L352,0H128z"></path> <path style="fill:#B0B7BD;" d="M384,128h96L352,0v96C352,113.6,366.4,128,384,128z"></path> <polygon style="fill:#CAD1D8;" points="480,224 384,128 480,128 "></polygon> <path style="fill:#50BEE8;" d="M416,416c0,8.8-7.2,16-16,16H48c-8.8,0-16-7.2-16-16V256c0-8.8,7.2-16,16-16h352c8.8,0,16,7.2,16,16 V416z"></path> <g> <path style="fill:#FFFFFF;" d="M92.576,384c-4.224,0-8.832-2.32-8.832-7.936v-72.656c0-4.608,4.608-7.936,8.832-7.936h29.296 c58.464,0,57.168,88.528,1.136,88.528H92.576z M100.64,311.072v57.312h21.232c34.544,0,36.064-57.312,0-57.312H100.64z"></path> <path style="fill:#FFFFFF;" d="M228,385.28c-23.664,1.024-48.24-14.72-48.24-46.064c0-31.472,24.56-46.944,48.24-46.944 c22.384,1.136,45.792,16.624,45.792,46.944C273.792,369.552,250.384,385.28,228,385.28z M226.592,308.912 c-14.336,0-29.936,10.112-29.936,30.32c0,20.096,15.616,30.336,29.936,30.336c14.72,0,30.448-10.24,30.448-30.336 C257.04,319.008,241.312,308.912,226.592,308.912z"></path> <path style="fill:#FFFFFF;" d="M288.848,339.088c0-24.688,15.488-45.92,44.912-45.92c11.136,0,19.968,3.328,29.296,11.392 c3.456,3.184,3.84,8.816,0.384,12.4c-3.456,3.056-8.704,2.688-11.776-0.384c-5.232-5.504-10.608-7.024-17.904-7.024 c-19.696,0-29.152,13.952-29.152,29.552c0,15.872,9.328,30.448,29.152,30.448c7.296,0,14.08-2.96,19.968-8.192 c3.952-3.072,9.456-1.552,11.76,1.536c2.048,2.816,3.056,7.552-1.408,12.016c-8.96,8.336-19.696,10-30.336,10 C302.8,384.912,288.848,363.776,288.848,339.088z"></path> </g> <path style="fill:#CAD1D8;" d="M400,432H96v16h304c8.8,0,16-7.2,16-16v-16C416,424.8,408.8,432,400,432z"></path> </g></svg>
                                      @break
                                      @case('text/plain')
                                      <svg width="22" height="22" style="margin-right:10px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#E2E5E7;" d="M128,0c-17.6,0-32,14.4-32,32v448c0,17.6,14.4,32,32,32h320c17.6,0,32-14.4,32-32V128L352,0H128z"></path> <path style="fill:#B0B7BD;" d="M384,128h96L352,0v96C352,113.6,366.4,128,384,128z"></path> <polygon style="fill:#CAD1D8;" points="480,224 384,128 480,128 "></polygon> <path style="fill:#576D7E;" d="M416,416c0,8.8-7.2,16-16,16H48c-8.8,0-16-7.2-16-16V256c0-8.8,7.2-16,16-16h352c8.8,0,16,7.2,16,16 V416z"></path> <g> <path style="fill:#FFFFFF;" d="M132.784,311.472H110.4c-11.136,0-11.136-16.368,0-16.368h60.512c11.392,0,11.392,16.368,0,16.368 h-21.248v64.592c0,11.12-16.896,11.392-16.896,0v-64.592H132.784z"></path> <path style="fill:#FFFFFF;" d="M224.416,326.176l22.272-27.888c6.656-8.688,19.568,2.432,12.288,10.752 c-7.68,9.088-15.728,18.944-23.424,29.024l26.112,32.496c7.024,9.6-7.04,18.816-13.952,9.344l-23.536-30.192l-23.152,30.832 c-6.528,9.328-20.992-1.152-13.68-9.856l25.696-32.624c-8.048-10.096-15.856-19.936-23.664-29.024 c-8.064-9.6,6.912-19.44,12.784-10.48L224.416,326.176z"></path> <path style="fill:#FFFFFF;" d="M298.288,311.472H275.92c-11.136,0-11.136-16.368,0-16.368h60.496c11.392,0,11.392,16.368,0,16.368 h-21.232v64.592c0,11.12-16.896,11.392-16.896,0V311.472z"></path> </g> <path style="fill:#CAD1D8;" d="M400,432H96v16h304c8.8,0,16-7.2,16-16v-16C416,424.8,408.8,432,400,432z"></path> </g></svg>
                                      @break
                       @default
                     <svg width="22" height="22" style="margin-right:10px;"  version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:none;stroke:#6C3DB7;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st1{fill:none;stroke:#1F992A;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st2{fill:none;stroke:#6A83BA;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st3{fill:#8A8AFF;stroke:#8A8AFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st4{fill:#6C3DB7;stroke:#6C3DB7;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st5{fill:#A576FF;stroke:#A576FF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st6{fill:#F2BB41;stroke:#F2BB41;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st7{fill:#E08838;stroke:#E08838;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st8{fill:#1F992A;stroke:#1F992A;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st9{fill:#5EC11E;stroke:#5EC11E;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st10{fill:#E3FAFF;stroke:#E3FAFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st11{fill:#FF5093;stroke:#FF5093;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st12{fill:#B7257F;stroke:#B7257F;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st13{fill:#5189E5;stroke:#5189E5;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st14{fill:#6EBAFF;stroke:#6EBAFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st15{fill:#EDD977;stroke:#EDD977;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st16{fill:#8C43FF;stroke:#8C43FF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st17{fill:#5252BA;stroke:#5252BA;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st18{fill:none;stroke:#E3FAFF;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st19{fill:#354C75;stroke:#354C75;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} </style> <path class="st6" d="M19,3H8C6.9,3,6,3.9,6,5v20c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V8L19,3z"></path> <polygon class="st7" points="19,3 19,8 24,8 "></polygon> </g></svg>
                   @endswitch
                     
                    
                        {{ $file->name }}
                    </td>
                    <td class="time-info">{{ $file->uploaded_at }}</td>
                    <td>
                        <div class="dropdown-container">
                            <button class="svg-button dropdown-menu">
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-left:20px;" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                </svg>
                                
                            </button>
                            <div class="input1">
                                <button type="button" class="value" onclick="openFile('{{ route('files.open', ['name' => urlencode($file->name)]) }}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                      </svg>
                                      
                                    Open
                                </button>
                                <script>
                                    function openFile(url) {
                                        window.open(url, '_blank');
                                    }
                                </script>
                                <button onclick="downloadFile('{{ route('file.download', $file->id) }}')" class="value" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Download file
                                </button>
                                
                                <script>
                                function downloadFile(url) {
                                    window.open(url, '_blank');
                                }
                                </script>
                      
                
                    
                             
                                <button onclick="deleteFile('{{ route('file.delete', $file->id) }}')" class="value" style="color: #f13838cf;">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                    Delete file
                                </button>
                             
                                









                                <script>
                                function deleteFile(url) {
                                    const form = document.createElement('form');
                                    form.method = 'POST';
                                    form.action = url;
                                    
                                    const csrfToken = document.createElement('input');
                                    csrfToken.type = 'hidden';
                                    csrfToken.name = '_token';
                                    csrfToken.value = '{{ csrf_token() }}';
                                    
                                    const methodField = document.createElement('input');
                                    methodField.type = 'hidden';
                                    methodField.name = '_method';
                                    methodField.value = 'DELETE';
                                    
                                    form.appendChild(csrfToken);
                                    form.appendChild(methodField);
                                    
                                    document.body.appendChild(form);
                                    form.submit();
                                }
                                </script>
                            </div>
                        </div>
                    </td>
                </tr>
          
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
 @endif









    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdownButtons = document.querySelectorAll('.dropdown-menu');
    
            dropdownButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.stopPropagation();
                    const dropdownMenu = this.nextElementSibling;
                    
                    // Close all other open menus
                    document.querySelectorAll('.input1').forEach(menu => {
                        if (menu !== dropdownMenu) {
                            menu.style.display = 'none';
                        }
                    });
    
                    // Toggle the clicked menu
                    dropdownMenu.style.display = dropdownMenu.style.display === 'flex' ? 'none' : 'flex';
    
                    // Position the menu relative to the button
                    if (dropdownMenu.style.display === 'flex') {
                        const rect = this.getBoundingClientRect();
                        dropdownMenu.style.top = `${rect.bottom}px`;
                        dropdownMenu.style.left = `${rect.left - dropdownMenu.offsetWidth + this.offsetWidth}px`;
                    }
                });
            });
    
            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!event.target.closest('.dropdown-container')) {
                    document.querySelectorAll('.input1').forEach(menu => {
                        menu.style.display = 'none';
                    });
                }
            });
        });
        </script>
        
</body>
</html>